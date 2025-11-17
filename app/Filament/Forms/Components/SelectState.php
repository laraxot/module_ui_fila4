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

        $this->options(function (?Model $record): array {
            $name = $this->getName();

            if ($record instanceof HasStatesContract) {
                return $this->buildOptionsFromValues($record->getStatesFor($name)->toArray());
            }

            $model = $this->getModel();
            if (! is_string($model) || ! class_exists($model)) {
                return [];
            }

            $modelInstance = app($model);
            if (! $modelInstance instanceof Model || ! $modelInstance instanceof HasStatesContract) {
                return [];
            }

            return $this->buildOptionsFromValues(Arr::wrap($modelInstance->getDefaultStateFor($name)));
        });

        $this->required();
    }

    /**
     * @param  array<int|string, mixed>  $values
     *
     * @return array<string, string>
     */
    private function buildOptionsFromValues(array $values): array
    {
        $normalized = array_values(array_filter(
            array_map(
                static function (mixed $value): string {
                    if (is_string($value) && $value !== '') {
                        return $value;
                    }

                    if (is_int($value)) {
                        return (string) $value;
                    }

                    return '';
                },
                $values
            ),
            static fn (string $value): bool => $value !== ''
        ));

        if ($normalized === []) {
            return [];
        }

        /** @var array<string, string> $mapped */
        $mapped = array_combine($normalized, $normalized) ?: [];

        return $mapped;
    }
}
