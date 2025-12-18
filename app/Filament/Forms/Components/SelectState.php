<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Notify\Filament\Forms\Components;
=======
namespace Modules\UI\Filament\Forms\Components;
>>>>>>> 24eb066 (Lint)

use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Spatie\ModelStates\HasStatesContract;

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
                if (is_string($model) && class_exists($model)) {
                    $instance = app($model);
                    if (is_object($instance)) {
                        $methodExists = method_exists($instance, 'getDefaultStateFor');
                        if ($methodExists) {
                            $statesRaw = $instance->getDefaultStateFor($name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                            if (!is_array($statesRaw)) {
=======
                            if (! is_array($statesRaw)) {
>>>>>>> 359d970 (.)
=======
                            if (! is_array($statesRaw)) {
>>>>>>> 161e28f (Lint)
=======
                            if (! is_array($statesRaw)) {
>>>>>>> a8fbb3e (.)
=======
                            if (! is_array($statesRaw)) {
>>>>>>> 24eb066 (Lint)
                                $statesRaw = Arr::wrap($statesRaw);
                            }
                            /** @var array<int|string, mixed> $statesRaw */
                            $states = $statesRaw;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                            $statesKeys = array_map(fn($v) => is_string($v) ? $v : (string) $v, array_values($states));
                            $statesValues = array_map(fn($v) => is_string($v) ? $v : (string) $v, array_values($states));
                            
                            $combined = array_combine($statesKeys, $statesValues);
                            /** @var array<int|string, int|string> $combinedTyped */
                            $combinedTyped = $combined ?: [];
=======
=======
>>>>>>> 161e28f (Lint)
=======
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
                            $statesKeys = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($states));
                            $statesValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($states));

                            $combined = array_combine($statesKeys, $statesValues);
                            /** @var array<int|string, int|string> $combinedTyped */
                            $combinedTyped = $combined ?: [];
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
>>>>>>> 359d970 (.)
=======
>>>>>>> 161e28f (Lint)
                            return $combinedTyped;
                        }
                    }
                }
<<<<<<< HEAD
<<<<<<< HEAD
                
=======

>>>>>>> 359d970 (.)
=======

>>>>>>> 161e28f (Lint)
=======
=======
>>>>>>> 24eb066 (Lint)
                            $statesKeys = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($states));
                            $statesValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($states));

                            $combined = array_combine($statesKeys, $statesValues);
                            /** @var array<int|string, int|string> $combinedTyped */
                            $combinedTyped = $combined ?: [];

                            return $combinedTyped;
                        }
                    }
                }

<<<<<<< HEAD
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
                return [];
            }

            // Record implements HasStatesContract which provides getStatesFor()
            $statesCollection = $record->getStatesFor($name);
            // getStatesFor() returns Collection which has toArray()
            $statesRaw = $statesCollection->toArray();
            /** @var array<int|string, mixed> $states */
            $states = $statesRaw;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $statesKeys = array_map(fn($v) => is_string($v) ? $v : (string) $v, array_values($states));
            $statesValues = array_map(fn($v) => is_string($v) ? $v : (string) $v, array_values($states));
            
            $combined = array_combine($statesKeys, $statesValues);
            /** @var array<int|string, int|string> $combinedTyped */
            $combinedTyped = $combined ?: [];
=======
=======
>>>>>>> 161e28f (Lint)
=======
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
            $statesKeys = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($states));
            $statesValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($states));

            $combined = array_combine($statesKeys, $statesValues);
            /** @var array<int|string, int|string> $combinedTyped */
            $combinedTyped = $combined ?: [];

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
            return $combinedTyped;
        });
        $this->required();
    }
}
