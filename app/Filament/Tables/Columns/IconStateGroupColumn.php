<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Actions\Action;
use Filament\Schemas\Components\Utilities\Set;
use Modules\Xot\Filament\Tables\Columns\XotBaseColumnGroup;
use Modules\UI\Filament\Tables\Columns\IconColumn;
use Modules\Xot\Contracts\StateContract;

final class IconStateGroupColumn extends XotBaseColumnGroup
{
    public string $stateClass = '';

    public string $modelClass = '';

    public array $data = [];

    protected function setUp(): void
    {
        // $this->label('');
    }

    public function stateClass(string $stateClass, string $modelClass): static
    {
        $this->stateClass = $stateClass;
        $this->modelClass = $modelClass;

        $states = $this->getStatesFromMapping();
        $columns = $this->buildColumnsFromStates($states);

        $this->columns($columns);

        return $this;
    }

    /**
     * Ottiene gli stati dal mapping.
     *
     * @return array<string, mixed>
     */
    private function getStatesFromMapping(): array
    {
        if (! class_exists($this->stateClass) || ! method_exists($this->stateClass, 'getStateMapping')) {
            return [];
        }

        $stateMapping = $this->stateClass::getStateMapping();
        if (! is_object($stateMapping) || ! method_exists($stateMapping, 'toArray')) {
            return [];
        }

        $states = $stateMapping->toArray();

        if (! is_array($states)) {
            return [];
        }

        // Ensure the array has string keys
        $result = [];
        foreach ($states as $key => $value) {
            $result[(string) $key] = $value;
        }

        return $result;
    }

    /**
     * Costruisce le colonne dagli stati.
     *
     * @param  array<string, mixed>  $states
     * @return array<IconColumn>
     */
    private function buildColumnsFromStates(array $states): array
    {
        $columns = [];

        foreach ($states as $stateKey => $stateClass) {
            /** @var string $state */
            $state = is_string($stateKey) ? $stateKey : (string) $stateKey;
            $column = $this->createColumnForState($state, $stateClass);
            if ($column !== null) {
                $columns[] = $column;
            }
        }

        return $columns;
    }

    /**
     * Crea una colonna per uno stato specifico.
     */
    private function createColumnForState(string $state, mixed $stateClass): ?IconColumn
    {
        if (! is_string($stateClass) || ! class_exists($stateClass)) {
            return null;
        }

        $stateInstance = new $stateClass($this->modelClass);
        if (! ($stateInstance instanceof StateContract)) {
            return null;
        }

        $this->data[$state.'-visible'] = true;

        $column = $this->buildIconColumn($state, $stateInstance, $stateClass);
        /** @var string $stateKey */
        $stateKey = $state;
        $visibleValue = $this->data[$stateKey.'-visible'] ?? true;
        $column->visible(is_bool($visibleValue) ? $visibleValue : true);

        return $column;
    }

    /**
     * Costruisce la colonna icona con tutte le configurazioni.
     */
    private function buildIconColumn(string $state, StateContract $stateInstance, string $stateClass): IconColumn
    {
        $column = IconColumn::make($state.'-icon')
            ->icon($stateInstance->icon(...))
            ->color($stateInstance->color(...))
            ->tooltip($stateInstance->label(...))
            ->extraAttributes([
                'class' => 'w-auto min-w-0 px-0',
                'style' => 'width: fit-content !important;',
            ])
            ->extraCellAttributes(['class' => 'px-1 py-1'])
            ->label('')
            ->default(function (mixed $record, Set $_set) use ($stateClass, $state) {
                /** @var string $stateKey */
                $stateKey = $state;
                return $this->getColumnDefault($record, $stateClass, $stateKey);
            });

        $column->action($this->createStateAction($state, $stateInstance));

        return $column;
    }

    /**
     * Ottiene il valore di default per la colonna.
     */
    private function getColumnDefault(mixed $record, string $stateClass, string $state): ?bool
    {
        $res = false;
        // PHPStan L10: isset() rispetta __get() per Eloquent magic properties
        if (is_object($record) && isset($record->state) && is_object($record->state) && method_exists($record->state, 'canTransitionTo')) {
            $res = $record->state->canTransitionTo($stateClass);
        }

        $this->data[$state.'-visible'] = $res;

        return $res ? true : null;
    }

    /**
     * Crea l'azione per la transizione di stato.
     */
    private function createStateAction(string $state, StateContract $stateInstance): Action
    {
        return Action::make($state.'-action')
            ->requiresConfirmation()
            ->modalHeading(fn ($_record) => $stateInstance->modalHeading())
            ->modalDescription(fn ($_record) => $stateInstance->modalDescription())
            ->schema(fn ($_record) => $stateInstance->modalFormSchema())
            ->fillForm($stateInstance->modalFillFormByRecord(...))
            ->action(function (mixed $record, mixed $data) use ($stateInstance) {
                if (! ($record instanceof \Illuminate\Database\Eloquent\Model)) {
                    return;
                }
                if (! is_array($data)) {
                    return;
                }
                /** @var array<string, mixed> $safeData */
                $safeData = $data;
                $stateInstance->modalActionByRecord($record, $safeData);
            });
    }
}
