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
        $statesRaw = [];
<<<<<<< HEAD
        
=======

>>>>>>> 359d970 (.)
        if (class_exists($stateClass) && method_exists($stateClass, 'getStateMapping')) {
            $stateMapping = $stateClass::getStateMapping();
            if (is_object($stateMapping) && method_exists($stateMapping, 'toArray')) {
                $statesArray = $stateMapping->toArray();
                $statesRaw = is_array($statesArray) ? $statesArray : [];
            }
        }
<<<<<<< HEAD
        
=======

>>>>>>> 359d970 (.)
        /** @var array<string, string> $states */
        $states = $statesRaw;
        $columns = [];

        foreach ($states as $stateKey => $stateClassItem) {
<<<<<<< HEAD
            if (!is_string($stateClassItem) || !class_exists($stateClassItem)) {
                continue;
            }
            
            if (!is_string($stateKey)) {
                continue;
            }
            
            $stateInstance = new $stateClassItem($this->modelClass);
            Assert::isInstanceOf($stateInstance, StateContract::class);
            $visibleKey = $stateKey . '-visible';
            $this->data[$visibleKey] = true;

            $column = IconColumn::make($stateKey . '-icon')
=======
            if (! is_string($stateClassItem) || ! class_exists($stateClassItem)) {
                continue;
            }

            if (! is_string($stateKey)) {
                continue;
            }

            $stateInstance = new $stateClassItem($this->modelClass);
            Assert::isInstanceOf($stateInstance, StateContract::class);
            $visibleKey = $stateKey.'-visible';
            $this->data[$visibleKey] = true;

            $column = IconColumn::make($stateKey.'-icon')
>>>>>>> 359d970 (.)
                ->icon($stateInstance->icon(...))
                ->color($stateInstance->color(...))
                ->tooltip($stateInstance->label(...))
                ->extraAttributes([
                    'class' => 'w-auto min-w-0 px-0',
                    'style' => 'width: fit-content !important;',
                ])
                ->extraCellAttributes(['class' => 'px-1 py-1'])
                ->label('')
                ->default(function (mixed $record, Set $_set) use ($stateClassItem, $stateKey) {
                    $res = false;
                    if (is_object($record) && isset($record->state) && is_object($record->state) && method_exists($record->state, 'canTransitionTo')) {
                        $canTransition = $record->state->canTransitionTo($stateClassItem);
                        $res = is_bool($canTransition) ? $canTransition : false;
                    }
<<<<<<< HEAD
                    $visibleKey = $stateKey . '-visible';
                    $this->data[$visibleKey] = $res;
                    if (!$res) {
=======
                    $visibleKey = $stateKey.'-visible';
                    $this->data[$visibleKey] = $res;
                    if (! $res) {
>>>>>>> 359d970 (.)
                        return null;
                    }

                    return true;
                });
<<<<<<< HEAD
            $column->action(Action::make($stateKey . '-action')
=======
            $column->action(Action::make($stateKey.'-action')
>>>>>>> 359d970 (.)
                ->requiresConfirmation()
                ->modalHeading(function ($_record) use ($stateInstance) {
                    // StateContract provides modalHeading()
                    return $stateInstance->modalHeading();
                })
                ->modalDescription(function ($_record) use ($stateInstance) {
                    // StateContract provides modalDescription()
                    return $stateInstance->modalDescription();
                })
                ->schema(function ($_record) use ($stateInstance) {
                    // StateContract provides modalFormSchema()
                    return $stateInstance->modalFormSchema();
                })
                ->fillForm($stateInstance->modalFillFormByRecord(...))
                ->action(function (mixed $record, mixed $data) use ($stateInstance) {
                    // StateContract provides modalActionByRecord()
<<<<<<< HEAD
                    /** @var \Illuminate\Database\Eloquent\Model $record */
                    /** @var array<string, mixed> $data */
=======
                    /* @var \Illuminate\Database\Eloquent\Model $record */
                    /* @var array<string, mixed> $data */
>>>>>>> 359d970 (.)
                    $stateInstance->modalActionByRecord($record, $data);

                    // $this->invalidateCache();
                    // $this->loadAppointments();
                    // $this->dispatch('notify', [
                    //    'type' => 'success',
                    //    'message' => __('ui::messages.action_completed'),
                    // ]);
                }));
<<<<<<< HEAD
            $visibleKey = $stateKey . '-visible';
=======
            $visibleKey = $stateKey.'-visible';
>>>>>>> 359d970 (.)
            $visibleValue = $this->data[$visibleKey] ?? false;
            $column->visible(is_bool($visibleValue) ? $visibleValue : false);
            $columns[] = $column;
        }

        $this->columns($columns);

        return $this;
    }
}
