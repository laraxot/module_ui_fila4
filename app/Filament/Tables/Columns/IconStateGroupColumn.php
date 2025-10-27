<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Actions\Action;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\IconColumn;
use Modules\Xot\Contracts\StateContract;
use Webmozart\Assert\Assert;

class IconStateGroupColumn extends ColumnGroup
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
        if (is_object($this->stateClass) && method_exists($this->stateClass, 'getStateMapping')) {
            $stateMapping = $this->stateClass::getStateMapping();
            if (is_object($stateMapping) && method_exists($stateMapping, 'toArray')) {
                $states = $stateMapping->toArray();
            } else {
                $states = [];
            }
        } else {
            $states = [];
        }
        $columns = [];

        foreach ((array) $states as $state => $stateClass) {
            $stateInstance = new $stateClass($this->modelClass);
            Assert::isInstanceOf($stateInstance, StateContract::class);
<<<<<<< HEAD
            $this->data[(string) $state.'-visible'] = true;

            $column = IconColumn::make((string) $state.'-icon')
=======
            $this->data[$state.'-visible'] = true;

            $column = IconColumn::make($state.'-icon')
>>>>>>> 3b732b6 (.)
                ->icon($stateInstance->icon(...))
                ->color($stateInstance->color(...))
                ->tooltip($stateInstance->label(...))
                ->extraAttributes([
                    'class' => 'w-auto min-w-0 px-0',
                    'style' => 'width: fit-content !important;',
                ])
                ->extraCellAttributes(['class' => 'px-1 py-1'])
                ->label('')
                ->default(function ($record, Set $_set) use ($stateClass, $state) {
<<<<<<< HEAD
                    if (is_object($record) && property_exists($record, 'state') && is_object($record->state) && method_exists($record->state, 'canTransitionTo')) {
                        $res = $record->state->canTransitionTo($stateClass);
                        $this->data[(string) $state.'-visible'] = $res;
                    } else {
                        $res = false;
                        $this->data[(string) $state.'-visible'] = false;
                    }
                    if (! $res) {
                        return;
                    }

                    return true;
                });
            $column->action(Action::make((string) $state.'-action')
=======
                    $res = $record->state->canTransitionTo($stateClass);
                    $this->data[$state.'-visible'] = $res;
                    if (! $res) {
                        return null;
                    }

                    return true;
                });
            $column->action(Action::make($state.'-action')
>>>>>>> 3b732b6 (.)
                ->requiresConfirmation()
                ->modalHeading(fn ($_record) => $stateInstance->modalHeading())
                ->modalDescription(fn ($_record) => $stateInstance->modalDescription())
                ->schema(fn ($_record) => $stateInstance->modalFormSchema())
                ->fillForm($stateInstance->modalFillFormByRecord(...))
                ->action(function ($record, $data) use ($stateInstance): void {
                    if (is_array($data) && $record instanceof \Illuminate\Database\Eloquent\Model) {
                        /** @var array<string, mixed> $typedData */
                        $typedData = $data;
                        $stateInstance->modalActionByRecord($record, $typedData);
                    }

                    // $this->invalidateCache();
                    // $this->loadAppointments();
                    // $this->dispatch('notify', [
                    //    'type' => 'success',
                    //    'message' => __('ui::messages.action_completed'),
                    // ]);
                }));
<<<<<<< HEAD
            $column->visible((bool) ($this->data[(string) $state.'-visible'] ?? false));
=======
            $column->visible($this->data[$state.'-visible']);
>>>>>>> 3b732b6 (.)
            $columns[] = $column;
        }

        $this->columns($columns);

        return $this;
    }
}
