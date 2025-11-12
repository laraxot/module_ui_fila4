<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Exception;
use Modules\Xot\Filament\Tables\Columns\XotBaseSelectColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Spatie\ModelStates\HasStatesContract;

final class SelectStateColumn extends XotBaseSelectColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        //  $this->selectablePlaceholder(false);
        $this->options(function (Model&HasStatesContract $record, mixed $state): array {
            $name = $this->getName();
            if ($state === null) {
                return $this->getDefaultStates($record, $name);
            }

            $states = $this->getTransitionableStates($record, $state, $name);
            $states = $this->mergeStateValues($state, $name, $states);

            return $this->normalizeStates($states);
        });

        $this->beforeStateUpdated(function (Model&HasStatesContract $record, $state) {
            $message = '';
            // PHPStan L10: isset() rispetta __get() per Eloquent magic properties
            if (isset($record->state) && is_object($record->state) && method_exists($record->state, 'transitionTo')) {
                $record->state->transitionTo($state, $message);
            }
        });
    }

    /**
     * Ottiene gli stati di default per il record.
     *
     * @return array<string, string>
     */
    private function getDefaultStates(Model&HasStatesContract $record, string $name): array
    {
        $defaultStates = $record->getDefaultStateFor($name);
        $states = Arr::wrap($defaultStates);
        /** @var array<int|string> $stringStates */
        $stringStates = array_filter($states, 'is_string');

        if (empty($stringStates)) {
            return [];
        }

        $result = array_combine($stringStates, $stringStates);

        // Ensure all keys and values are strings
        $finalResult = [];
        foreach ($result as $key => $value) {
            $finalResult[(string) $key] = (string) $value;
        }

        return $finalResult;
    }

    /**
     * Ottiene gli stati transitionabili per il record.
     *
     * @return array<int|string>
     */
    private function getTransitionableStates(Model&HasStatesContract $record, mixed $state, string $name): array
    {
        try {
            if (is_object($state) && method_exists($state, 'transitionableStates')) {
                $result = $state->transitionableStates();
                if (is_array($result)) {
                    // Filter to ensure only int or string values
                    return array_filter($result, fn ($item) => is_int($item) || is_string($item));
                }

                return [];
            }
        } catch (Exception $e) {
            // Fallback: usa getStatesFor se transitionableStates fallisce
        }

        $result = $record->getStatesFor($name)->toArray();
        if (is_array($result)) {
            // Filter to ensure only int or string values
            return array_filter($result, fn ($item) => is_int($item) || is_string($item));
        }

        return [];
    }

    /**
     * Unisce i valori dello stato con gli stati transitionabili.
     *
     * @param  array<int|string>  $states
     * @return array<int|string>
     */
    private function mergeStateValues(mixed $state, string $name, array $states): array
    {
        if (! is_object($state)) {
            return $states;
        }

        // PHPStan L10: isset() invece di property_exists() - funziona per magic properties
        if (! isset($state->{$name})) {
            return $states;
        }

        $stateValue = $state->{$name};
        if (is_array($stateValue)) {
            $filteredStateValues = array_filter($stateValue, fn ($item) => is_int($item) || is_string($item));

            return array_merge($filteredStateValues, $states);
        }

        if ($stateValue instanceof \Traversable) {
            $stateArray = iterator_to_array($stateValue);
            $filteredStateArray = array_filter($stateArray, fn ($item) => is_int($item) || is_string($item));

            return array_merge($filteredStateArray, $states);
        }

        return $states;
    }

    /**
     * Normalizza gli stati in un array associativo con chiavi stringa.
     *
     * @param  array<int|string>  $states
     * @return array<string, string>
     */
    private function normalizeStates(array $states): array
    {
        /** @var array<int|string> $stringStates */
        $stringStates = array_filter($states, 'is_string');

        if (empty($stringStates)) {
            return [];
        }

        $result = array_combine($stringStates, $stringStates);

        // Ensure all keys and values are strings
        $finalResult = [];
        foreach ($result as $key => $value) {
            $finalResult[(string) $key] = (string) $value;
        }

        return $finalResult;
    }
}
