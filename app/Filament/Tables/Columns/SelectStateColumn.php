<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

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
        $this->options(function (Model&HasStatesContract $record, mixed $state): array {
            $name = $this->getName();
<<<<<<< HEAD
<<<<<<< HEAD
            if ($state === null) {
=======
            if (null === $state) {
>>>>>>> 359d970 (.)
=======
            if (null === $state) {
>>>>>>> 161e28f (Lint)
                // Record implements HasStatesContract which provides getDefaultStateFor()
                $defaultStates = $record->getDefaultStateFor($name);
                $states = Arr::wrap($defaultStates);
                /** @var array<int|string, mixed> $states */
                $states = is_array($states) ? $states : [];
<<<<<<< HEAD
<<<<<<< HEAD
                $statesValues = array_map(fn($v) => is_string($v) ? $v : (string) $v, array_values($states));
                $statesKeys = array_map(fn($k) => is_string($k) ? $k : (string) $k, array_keys($states));
            $combined = array_combine($statesKeys, $statesValues);
            /** @var array<int|string, int|string> $result */
            $result = $combined ?: [];
            return $result;
            }
            
=======
=======
>>>>>>> 161e28f (Lint)
                $statesValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($states));
                $statesKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($states));
                $combined = array_combine($statesKeys, $statesValues);
                /** @var array<int|string, int|string> $result */
                $result = $combined ?: [];

                return $result;
            }

<<<<<<< HEAD
>>>>>>> 359d970 (.)
=======
>>>>>>> 161e28f (Lint)
            $states = [];
            try {
                if (is_object($state) && method_exists($state, 'transitionableStates')) {
                    $transitionableStates = $state->transitionableStates();
                    if (is_iterable($transitionableStates)) {
                        $states = is_array($transitionableStates) ? $transitionableStates : iterator_to_array($transitionableStates);
                    }
                }
<<<<<<< HEAD
<<<<<<< HEAD
            } catch (Exception $e) {
=======
            } catch (\Exception $e) {
>>>>>>> 359d970 (.)
=======
            } catch (\Exception $e) {
>>>>>>> 161e28f (Lint)
                // Record implements HasStatesContract which provides getStatesFor()
                $fetchedStates = $record->getStatesFor($name);
                $statesArray = $fetchedStates->toArray();
                $states = $statesArray;
            }
<<<<<<< HEAD
<<<<<<< HEAD
            
=======

>>>>>>> 359d970 (.)
=======

>>>>>>> 161e28f (Lint)
            /** @var array<int|string, mixed> $states */
            if (is_object($state)) {
                $stateClass = $state::class;
                if (class_exists($stateClass)) {
                    $stateNameProperty = null;
                    // ✅ Usa Reflection invece di property_exists per maggiore affidabilità
                    try {
                        $reflection = new \ReflectionClass($stateClass);
                        if ($reflection->hasProperty('name')) {
                            $nameProperty = $reflection->getStaticPropertyValue('name');
                            $stateNameProperty = is_string($nameProperty) ? $nameProperty : null;
                        }
                    } catch (\ReflectionException) {
                        // Property non esiste, $stateNameProperty rimane null
                    }
<<<<<<< HEAD
<<<<<<< HEAD
                    if ($stateNameProperty !== null) {
=======
                    if (null !== $stateNameProperty) {
>>>>>>> 359d970 (.)
=======
                    if (null !== $stateNameProperty) {
>>>>>>> 161e28f (Lint)
                        $statesValues = array_values($states);
                        /** @var list<int|string> $statesValuesTyped */
                        $statesValuesTyped = $statesValues;
                        $states = [$stateNameProperty, ...$statesValuesTyped];
                    }
                }
            }
<<<<<<< HEAD
<<<<<<< HEAD
            
=======

>>>>>>> 359d970 (.)
=======

>>>>>>> 161e28f (Lint)
            /** @var array<int|string, mixed> $states */
            $statesFiltered = array_filter($states, function (mixed $item): bool {
                return is_string($item) || is_int($item);
            });
<<<<<<< HEAD
<<<<<<< HEAD
            
            /** @var array<int|string> $statesKeys */
            $statesKeys = array_map(fn($k) => is_string($k) ? $k : (string) $k, array_keys($statesFiltered));
            /** @var array<int|string> $statesValues */
            $statesValues = array_map(fn($v) => is_string($v) ? $v : (string) $v, array_values($statesFiltered));
            $combined = array_combine($statesKeys, $statesValues);
            /** @var array<int|string, int|string> $combinedTyped */
            $combinedTyped = $combined ?: [];
=======
=======
>>>>>>> 161e28f (Lint)

            /** @var array<int|string> $statesKeys */
            $statesKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($statesFiltered));
            /** @var array<int|string> $statesValues */
            $statesValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($statesFiltered));
            $combined = array_combine($statesKeys, $statesValues);
            /** @var array<int|string, int|string> $combinedTyped */
            $combinedTyped = $combined ?: [];

<<<<<<< HEAD
>>>>>>> 359d970 (.)
=======
>>>>>>> 161e28f (Lint)
            return $combinedTyped;
        });

        $this->beforeStateUpdated(function (Model&HasStatesContract $record, mixed $stateRaw): void {
            // Type narrowing per $state: deve essere State|string
<<<<<<< HEAD
<<<<<<< HEAD
            if (!is_string($stateRaw) && !($stateRaw instanceof State)) {
                return;
            }
            
            $state = is_string($stateRaw) ? $stateRaw : $stateRaw;
            $message = '';
            
            if (!isset($record->state) || !is_object($record->state)) {
                return;
            }
            
            if (!($record->state instanceof State)) {
                return;
            }
            
=======
=======
>>>>>>> 161e28f (Lint)
            if (! is_string($stateRaw) && ! ($stateRaw instanceof State)) {
                return;
            }

            $state = is_string($stateRaw) ? $stateRaw : $stateRaw;
            $message = '';

            if (! isset($record->state) || ! is_object($record->state)) {
                return;
            }

            if (! ($record->state instanceof State)) {
                return;
            }

<<<<<<< HEAD
>>>>>>> 359d970 (.)
=======
>>>>>>> 161e28f (Lint)
            /** @var State $stateObj */
            $stateObj = $record->state;
            $stateObj->transitionTo($state, $message);
        });
    }
}
