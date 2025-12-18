<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Utilities\Set;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\IconColumn;
=======
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
>>>>>>> a8fbb3e (.)
=======
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 24eb066 (Lint)
use Modules\Xot\Contracts\StateContract;
use Webmozart\Assert\Assert;

class IconStateGroupColumn extends ColumnGroup
{
    public string $stateClass = '';
<<<<<<< HEAD
    public string $modelClass = '';
=======

    public string $modelClass = '';

>>>>>>> 24eb066 (Lint)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======

>>>>>>> 359d970 (.)
=======

>>>>>>> 161e28f (Lint)
=======

>>>>>>> a8fbb3e (.)
=======

>>>>>>> 24eb066 (Lint)
        if (class_exists($stateClass) && method_exists($stateClass, 'getStateMapping')) {
            $stateMapping = $stateClass::getStateMapping();
            if (is_object($stateMapping) && method_exists($stateMapping, 'toArray')) {
                $statesArray = $stateMapping->toArray();
                $statesRaw = is_array($statesArray) ? $statesArray : [];
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======

>>>>>>> 359d970 (.)
=======

>>>>>>> 161e28f (Lint)
=======

>>>>>>> a8fbb3e (.)
=======

>>>>>>> 24eb066 (Lint)
        /** @var array<string, string> $states */
        $states = $statesRaw;
        $columns = [];

        foreach ($states as $stateKey => $stateClassItem) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 161e28f (Lint)
=======
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 359d970 (.)
=======
>>>>>>> 161e28f (Lint)
=======
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
                ->icon($stateInstance->icon(...))
                ->color($stateInstance->color(...))
                ->tooltip($stateInstance->label(...))
                ->extraAttributes([
                    'class' => 'w-auto min-w-0 px-0',
                    'style' => 'width: fit-content !important;',
                ])
                ->extraCellAttributes(['class' => 'px-1 py-1'])
                ->label('')
<<<<<<< HEAD
<<<<<<< HEAD
                ->default(function (mixed $record, Set $_set) use ($stateClassItem, $stateKey) {
                    $res = false;
                    if (is_object($record) && isset($record->state) && is_object($record->state) && method_exists($record->state, 'canTransitionTo')) {
                        $canTransition = $record->state->canTransitionTo($stateClassItem);
                        $res = is_bool($canTransition) ? $canTransition : false;
                    }
<<<<<<< HEAD
<<<<<<< HEAD
                    $visibleKey = $stateKey . '-visible';
                    $this->data[$visibleKey] = $res;
                    if (!$res) {
=======
                    $visibleKey = $stateKey.'-visible';
                    $this->data[$visibleKey] = $res;
                    if (! $res) {
>>>>>>> 359d970 (.)
=======
                    $visibleKey = $stateKey.'-visible';
                    $this->data[$visibleKey] = $res;
                    if (! $res) {
>>>>>>> 161e28f (Lint)
=======
=======
>>>>>>> 24eb066 (Lint)
                ->default(function (Model $record) use ($stateClassItem, $stateKey): ?bool {
                    if (isset($record->state) && is_object($record->state) && method_exists($record->state, 'canTransitionTo')) {
                        $canTransition = $record->state->canTransitionTo($stateClassItem);
                        $res = is_bool($canTransition) ? $canTransition : false;
                    } else {
                        $res = false;
                    }
                    $visibleKey = $stateKey.'-visible';
                    $this->data[$visibleKey] = $res;
                    if (! $res) {
<<<<<<< HEAD
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
                        return null;
                    }

                    return true;
                });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $column->action(Action::make($stateKey . '-action')
=======
            $column->action(Action::make($stateKey.'-action')
>>>>>>> 359d970 (.)
=======
            $column->action(Action::make($stateKey.'-action')
>>>>>>> 161e28f (Lint)
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
<<<<<<< HEAD
                    /** @var \Illuminate\Database\Eloquent\Model $record */
                    /** @var array<string, mixed> $data */
=======
                    /* @var \Illuminate\Database\Eloquent\Model $record */
                    /* @var array<string, mixed> $data */
>>>>>>> 359d970 (.)
=======
                    /* @var \Illuminate\Database\Eloquent\Model $record */
                    /* @var array<string, mixed> $data */
>>>>>>> 161e28f (Lint)
                    $stateInstance->modalActionByRecord($record, $data);

                    // $this->invalidateCache();
                    // $this->loadAppointments();
                    // $this->dispatch('notify', [
                    //    'type' => 'success',
                    //    'message' => __('ui::messages.action_completed'),
                    // ]);
                }));
<<<<<<< HEAD
<<<<<<< HEAD
            $visibleKey = $stateKey . '-visible';
=======
            $visibleKey = $stateKey.'-visible';
>>>>>>> 359d970 (.)
=======
            $visibleKey = $stateKey.'-visible';
>>>>>>> 161e28f (Lint)
            $visibleValue = $this->data[$visibleKey] ?? false;
            $column->visible(is_bool($visibleValue) ? $visibleValue : false);
=======
=======
>>>>>>> 24eb066 (Lint)

            $column->action(
                Action::make($stateKey.'-action')
                    ->requiresConfirmation()
                    ->modalHeading(function (Model $record) use ($stateInstance) {
                        // StateContract provides modalHeading()
                        return $stateInstance->modalHeading();
                    })
                    ->modalDescription(function (Model $record) use ($stateInstance) {
                        // StateContract provides modalDescription()
                        return $stateInstance->modalDescription();
                    })
                    ->schema(function (Model $record) use ($stateInstance) {
                        // StateContract provides modalFormSchema()
                        return $stateInstance->modalFormSchema();
                    })
                    ->fillForm($stateInstance->modalFillFormByRecord(...))
                    ->action(function (Model $record, array $data) use ($stateInstance): void {
                        // Ensure data is treated as array<string, mixed> for PHPStan and StateContract
                        /** @var array<string, mixed> $typedData */
                        $typedData = $data;

                        $stateInstance->modalActionByRecord($record, $typedData);
                    })
            );

            $visibleValue = $this->data[$visibleKey] ?? false;
            $column->visible($visibleValue);
<<<<<<< HEAD
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
            $columns[] = $column;
        }

        $this->columns($columns);

        return $this;
    }
}
