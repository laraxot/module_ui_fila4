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
                $defaultStates = $record->getDefaultStateFor($name);
                $states = Arr::wrap($defaultStates);

                /** @phpstan-ignore argument.type */
                return is_array($states) ? array_combine($states, $states) : [];
            }
            try {
                // $states=$record->getAttribute($name)->transitionableStates();
                if (is_object($state) && method_exists($state, 'transitionableStates')) {
                    $states = $state->transitionableStates();
                } else {
                    $states = [];
                }
            } catch (Exception $e) {
                $states = $record->getStatesFor($name)->toArray();
            }
            
            if (is_object($state)) {
                // Check if $name property exists and get its value from the state object
                // This might be a property name stored in $name variable
                if (property_exists($state, $name ?? '')) {
                    $states = [$state->{$name}, ...$states];
                }
            }
            /** @phpstan-ignore argument.type */
            $states = is_array($states) ? array_combine($states, $states) : [];
            // dddx(['state'=>$state, 'state1'=>$record->getAttribute($name),'record'=>$record]);

            return $states;
        });

        $this->beforeStateUpdated(function (Model&HasStatesContract $record, $state) {
            $message = '';
            /** @phpstan-ignore property.notFound */
            if (property_exists($record, 'state') && is_object($record->state) && method_exists($record->state, 'transitionTo')) {
                $record->state->transitionTo($state, $message);
            }
        });
    }
}
