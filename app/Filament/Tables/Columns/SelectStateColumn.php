<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Exception;
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

<<<<<<< HEAD
                /** @var array<int|string, mixed> $statesArray */
                $statesArray = (array) $states;

                return array_combine(array_keys($statesArray), array_values($statesArray));
            }
            try {
                // $states=$record->getAttribute($name)->transitionableStates();
                if (is_object($state) && method_exists($state, 'transitionableStates')) {
                    $states = $state->transitionableStates();
                } else {
                    $states = $record->getStatesFor($name)->toArray();
                }
            } catch (Exception $e) {
                $states = $record->getStatesFor($name)->toArray();

            }
            if (is_object($state) && property_exists($state, 'name') && is_string($state::$name)) {
                $states = [$state::$name, ...(array) $states];
            }
            /** @var array<int|string, mixed> $statesArray */
            $statesArray = (array) $states;
            $states = array_combine(array_keys($statesArray), array_values($statesArray));
=======
                return array_combine($states, $states);
            }
            try {
                // $states=$record->getAttribute($name)->transitionableStates();
                $states = $state->transitionableStates();
            } catch (Exception $e) {
                $states = $record->getStatesFor($name)->toArray();
            }
            $states = [$state::$name, ...$states];
            $states = array_combine($states, $states);
>>>>>>> 3b732b6 (.)
            // dddx(['state'=>$state, 'state1'=>$record->getAttribute($name),'record'=>$record]);

            return $states;
        });

        $this->beforeStateUpdated(function ($record, $state): void {
            $message = '';
            if (is_object($record) && method_exists($record, 'getState')) {
                $recordState = $record->getState();
                if (is_object($recordState) && method_exists($recordState, 'transitionTo')) {
                    $recordState->transitionTo($state, $message);
                }
            }
        });
    }
}
