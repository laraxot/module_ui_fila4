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
        $states = [];
        if (class_exists($this->stateClass) && method_exists($this->stateClass, 'getStateMapping')) {
            $stateMapping = $this->stateClass::getStateMapping();
            if (is_object($stateMapping) && method_exists($stateMapping, 'toArray')) {
                $states = $stateMapping->toArray();
            }
        }
        $columns = [];

        foreach ($states as $state => $stateClass) {
            if (is_string($stateClass) && class_exists($stateClass)) {
                $stateInstance = new $stateClass($this->modelClass);
                if ($stateInstance instanceof StateContract) {
                    $this->data[$state.'-visible'] = true;

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
                        ->default(function ($record, Set $_set) use ($stateClass, $state) {
                            $res = false;
                            if (is_object($record) && property_exists($record, 'state') && is_object($record->state) && method_exists($record->state, 'canTransitionTo')) {
                                $res = $record->state->canTransitionTo($stateClass);
                            }
                            $this->data[$state.'-visible'] = $res;
                            if (! $res) {
                                return null;
                            }

                            return true;
                        });
                    $column->action(Action::make($state.'-action')
                        ->requiresConfirmation()
                        ->modalHeading(fn ($_record) => is_object($stateInstance) && method_exists($stateInstance, 'modalHeading') ? $stateInstance->modalHeading() : '')
                        ->modalDescription(fn ($_record) => is_object($stateInstance) && method_exists($stateInstance, 'modalDescription') ? $stateInstance->modalDescription() : '')
                        ->schema(fn ($_record) => is_object($stateInstance) && method_exists($stateInstance, 'modalFormSchema') ? $stateInstance->modalFormSchema() : [])
                        ->fillForm($stateInstance->modalFillFormByRecord(...))
                        ->action(function ($record, $data) use ($stateInstance) {
                            if (is_object($stateInstance) && method_exists($stateInstance, 'modalActionByRecord')) {
                                $stateInstance->modalActionByRecord($record, $data);
                            }

                            // $this->invalidateCache();
                            // $this->loadAppointments();
                            // $this->dispatch('notify', [
                            //    'type' => 'success',
                            //    'message' => __('ui::messages.action_completed'),
                            // ]);
                        }));
                    $column->visible($this->data[$state.'-visible']);
                    $columns[] = $column;
                }
            }
        }

        $this->columns($columns);

        return $this;
    }
}
