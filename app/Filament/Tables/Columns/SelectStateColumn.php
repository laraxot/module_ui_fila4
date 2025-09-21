<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Exception;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Spatie\ModelStates\HasStatesContract;
use Spatie\ModelStates\State;

class SelectStateColumn extends SelectColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        //  $this->selectablePlaceholder(false);
        $this->options(function (Model&HasStatesContract $record, $state): array {
            $name = $this->getName();
            if ($state === null) {
                $states = Arr::wrap($record->getDefaultStateFor($name));
                return array_combine($states, $states);
            }
            try {
                //$states=$record->getAttribute($name)->transitionableStates();
                $states = $state->transitionableStates();
            } catch (Exception $e) {
                $states = $record->getStatesFor($name)->toArray();


            }
            $states = [$state::$name, ...$states];
            $states = array_combine($states, $states);
<<<<<<< HEAD
=======
=======
use Illuminate\Support\Arr;
use Spatie\ModelStates\State;
=======
>>>>>>> b93ef594b4 (.)
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Spatie\ModelStates\HasStatesContract;
use Spatie\ModelStates\State;

class SelectStateColumn extends SelectColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        //  $this->selectablePlaceholder(false);
        $this->options(function (Model&HasStatesContract $record, $state): array {
            $name = $this->getName();
            if ($state === null) {
                $states = Arr::wrap($record->getDefaultStateFor($name));
                return array_combine($states, $states);
            }
            try {
                //$states=$record->getAttribute($name)->transitionableStates();
                $states = $state->transitionableStates();
            } catch (Exception $e) {
                $states = $record->getStatesFor($name)->toArray();


            }
<<<<<<< HEAD
            $states=[$state::$name, ...$states];
            $states=array_combine($states, $states);
>>>>>>> a12f125f4a (.)
=======
            $states = [$state::$name, ...$states];
            $states = array_combine($states, $states);
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Arr;
use Spatie\ModelStates\State;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Columns\SelectColumn;
use Spatie\ModelStates\HasStatesContract;

class SelectStateColumn extends SelectColumn
{

    protected function setUp(): void
    {
        parent::setUp();
      //  $this->selectablePlaceholder(false);
        $this->options(function (Model&HasStatesContract $record ,$state): array {
            $name=$this->getName();
            if($state==null){

                $states=Arr::wrap($record->getDefaultStateFor($name));
                return array_combine($states, $states);
            }
            try{
                //$states=$record->getAttribute($name)->transitionableStates();
                $states=$state->transitionableStates();
            }catch(Exception $e){
                $states=$record->getStatesFor($name)->toArray();;
            }
            $states=[$state::$name, ...$states];
            $states=array_combine($states, $states);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            //dddx(['state'=>$state, 'state1'=>$record->getAttribute($name),'record'=>$record]);

            return $states;
        });

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
        $this->beforeStateUpdated(function (Model&HasStatesContract $record, $state) {
            $message = '';
            /** @phpstan-ignore property.notFound */
            $record->state->transitionTo($state, $message);
        });
    }
<<<<<<< HEAD
=======
=======

=======
>>>>>>> b93ef594b4 (.)
        $this->beforeStateUpdated(function (Model&HasStatesContract $record, $state) {
            $message = '';
            /** @phpstan-ignore property.notFound */
            $record->state->transitionTo($state, $message);
        });
    }
<<<<<<< HEAD
=======

        $this->beforeStateUpdated(function (Model&HasStatesContract $record, $state) {
            $message='';
            /** @phpstan-ignore property.notFound */
            $record->state->transitionTo($state,$message);
        });


    }
>>>>>>> origin/develop




<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
}
