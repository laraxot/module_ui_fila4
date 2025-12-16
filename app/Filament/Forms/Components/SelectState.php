<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

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
                            if (! is_array($statesRaw)) {
=======
                            if (!is_array($statesRaw)) {
                            if (! is_array($statesRaw)) {
                            if (! is_array($statesRaw)) {
>>>>>>> d7dfa0b6 (.)
                                $statesRaw = Arr::wrap($statesRaw);
                            }
                            /** @var array<int|string, mixed> $statesRaw */
                            $states = $statesRaw;
<<<<<<< HEAD
                            $statesKeys = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($states));
                            $statesValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($states));

=======
                            $statesKeys = array_map(fn($v) => is_string($v) ? $v : (string) $v, array_values($states));
                            $statesValues = array_map(fn($v) => is_string($v) ? $v : (string) $v, array_values($states));
                            
>>>>>>> d7dfa0b6 (.)
                            $combined = array_combine($statesKeys, $statesValues);
                            /** @var array<int|string, int|string> $combinedTyped */
                            $combinedTyped = $combined ?: [];
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

=======
                


>>>>>>> d7dfa0b6 (.)
                return [];
            }

            // Record implements HasStatesContract which provides getStatesFor()
            $statesCollection = $record->getStatesFor($name);
            // getStatesFor() returns Collection which has toArray()
            $statesRaw = $statesCollection->toArray();
            /** @var array<int|string, mixed> $states */
            $states = $statesRaw;
<<<<<<< HEAD
=======
            $statesKeys = array_map(fn($v) => is_string($v) ? $v : (string) $v, array_values($states));
            $statesValues = array_map(fn($v) => is_string($v) ? $v : (string) $v, array_values($states));
            
            $combined = array_combine($statesKeys, $statesValues);
            /** @var array<int|string, int|string> $combinedTyped */
            $combinedTyped = $combined ?: [];
>>>>>>> d7dfa0b6 (.)
            $statesKeys = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($states));
            $statesValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($states));

            $combined = array_combine($statesKeys, $statesValues);
            /** @var array<int|string, int|string> $combinedTyped */
            $combinedTyped = $combined ?: [];

            return $combinedTyped;
        });
        $this->required();
    }
}
