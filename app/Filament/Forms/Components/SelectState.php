<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Exception;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Spatie\ModelStates\HasStatesContract;
use Spatie\ModelStates\State;

class SelectState extends Select
{
    protected function setUp(): void
    {
        parent::setUp();

        //  $this->selectablePlaceholder(false);
        $this->options(function ((Model&HasStatesContract)|null $record): array {
            $name = $this->getName();
            if (is_null($record)) {
                $model = $this->getModel();
                $states = Arr::wrap(app($model)->getDefaultStateFor($name));
                /**
                 * @var array<int|string>
                 * @phpstan-ignore argument.type
                 */
                return array_combine($states, $states);
            }

            $states = $record->getStatesFor($name)->toArray();

<<<<<<< HEAD
=======
=======
use Illuminate\Support\Arr;
use Spatie\ModelStates\State;
=======
>>>>>>> b93ef594b4 (.)
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Spatie\ModelStates\HasStatesContract;
use Spatie\ModelStates\State;

class SelectState extends Select
{
    protected function setUp(): void
    {
        parent::setUp();

        //  $this->selectablePlaceholder(false);
        $this->options(function ((Model&HasStatesContract)|null $record): array {
            $name = $this->getName();
            if (is_null($record)) {
                $model = $this->getModel();
                $states = Arr::wrap(app($model)->getDefaultStateFor($name));
                /**
                 * @var array<int|string>
                 * @phpstan-ignore argument.type
                 */
                return array_combine($states, $states);
            }
<<<<<<< HEAD
            
            $states=$record->getStatesFor($name)->toArray();
            
>>>>>>> a12f125f4a (.)
=======

            $states = $record->getStatesFor($name)->toArray();

>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Arr;
use Spatie\ModelStates\State;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Columns\SelectColumn;
use Spatie\ModelStates\HasStatesContract;

class SelectState extends Select
{

    protected function setUp(): void
    {
        parent::setUp();
       
      //  $this->selectablePlaceholder(false);
        $this->options(function ((Model&HasStatesContract)|null $record): array {
            $name=$this->getName();
            if(is_null($record)){
                $model=$this->getModel();
                $states=Arr::wrap(app($model)->getDefaultStateFor($name));
                /**
             * @var array<int|string>
             * @phpstan-ignore argument.type
             */
                return array_combine($states, $states);
                
            }
            
            $states=$record->getStatesFor($name)->toArray();
            
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            /**
             * @var array<int|string>
             * @phpstan-ignore argument.type
             */
            return array_combine($states, $states);
        });
        $this->required();
<<<<<<< HEAD
    }
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    }
=======
=======
>>>>>>> origin/develop
       
    }

   
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    }
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
}
