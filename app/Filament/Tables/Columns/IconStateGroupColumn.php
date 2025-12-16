<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Actions\Action;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
>>>>>>> 8d182bf (.)
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
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

        if (class_exists($stateClass) && method_exists($stateClass, 'getStateMapping')) {
            $stateMapping = $stateClass::getStateMapping();
            if (is_object($stateMapping) && method_exists($stateMapping, 'toArray')) {
                $statesArray = $stateMapping->toArray();
                $statesRaw = is_array($statesArray) ? $statesArray : [];
            }
        }

        /** @var array<string, string> $states */
        $states = $statesRaw;
        $columns = [];

        foreach ($states as $stateKey => $stateClassItem) {
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
                ->icon($stateInstance->icon(...))
                ->color($stateInstance->color(...))
                ->tooltip($stateInstance->label(...))
                ->extraAttributes([
                    'class' => 'w-auto min-w-0 px-0',
                    'style' => 'width: fit-content !important;',
                ])
                ->extraCellAttributes(['class' => 'px-1 py-1'])
                ->label('')
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
                        return null;
                    }

                    return true;
                });

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
            $columns[] = $column;
        }

        $this->columns($columns);

        return $this;
    }
}
=======
use Filament\Forms\Get;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ColumnGroup;
use Modules\Xot\Contracts\StateContract;

class IconStateGroupColumn extends ColumnGroup
{

    public string $stateClass='';
    public string $modelClass='';
    public array $data=[];

    
    protected function setUp(): void
    {
        //$this->label('');
       
    }

 


    public function stateClass(string $stateClass,string $modelClass): static
    {
        $this->stateClass = $stateClass;
        $this->modelClass = $modelClass;
        $states=$this->stateClass::getStateMapping()->toArray();
        $columns = [];
        
        
        foreach($states as $state=>$stateClass){
            $stateInstance=new $stateClass($this->modelClass);
            Assert::isInstanceOf($stateInstance,StateContract::class);
            $this->data[$state.'-visible']=true;
                
            $column = IconColumn::make($state.'-icon')
                ->icon(fn()=>$stateInstance->icon())
                ->color(fn()=>$stateInstance->color())
                ->tooltip(fn()=>$stateInstance->label())
                ->extraAttributes([
                    'class' => 'w-auto min-w-0 px-0',
                    'style' => 'width: fit-content !important;'
                ])
                ->extraCellAttributes(['class' => 'px-1 py-1'])
                ->label('')
                ->default(function($record,Set $set) use ($stateClass,$state){
                     $res=$record->state->canTransitionTo($stateClass);
                     $this->data[$state.'-visible']=$res;
                     if(!$res){
                        return null;
                     }
                     return true;
                });
            $column->action(Action::make($state.'-action')
                    ->requiresConfirmation()
                    ->modalHeading(fn($record)=>$stateInstance->modalHeading())
                    ->modalDescription(fn($record)=>$stateInstance->modalDescription())
                    ->schema(fn($record)=>$stateInstance->modalFormSchema())
                    ->fillForm(fn($record)=>$stateInstance->modalFillFormByRecord($record))
                    ->action(function($record,$data) use ($stateInstance){
                        $stateInstance->modalActionByRecord($record,$data);
                        //$this->invalidateCache();
                        //$this->loadAppointments();
                        //$this->dispatch('notify', [
                        //    'type' => 'success',
                        //    'message' => __('ui::messages.action_completed'),
                        //]);
                    })
                
                )
                ;
            $column->visible($this->data[$state.'-visible']);
            $columns[] = $column;
        }
        
        $this->columns($columns);
        return $this;
    }
}
>>>>>>> 727968c (.)
