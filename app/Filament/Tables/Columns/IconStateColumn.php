<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Exception;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Spatie\ModelStates\HasStatesContract;
use Spatie\ModelStates\State;
use Webmozart\Assert\Assert;

class IconStateColumn extends IconColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        // $this->getStateUsing(fn() => true); // the column requires a state to be passed to it
        $this->icon(fn (mixed $state): ?string => $this->callStateMethod($state, 'icon'));
        $this->color(fn (mixed $state): ?string => $this->callStateMethod($state, 'color'));
        $this->tooltip(fn (mixed $state): ?string => $this->callStateMethod($state, 'label'));
        // $this->label('aaa');

        $this->action(
            Action::make('change-state')
                ->schema([
                    Select::make('state')
                        ->options(function (?Model $record): array {
                            if (! $record instanceof HasStatesContract) {
                                return [];
                            }

                            $name = $this->getName();
                            $currentState = $record->getAttribute($name);

                            if (! $currentState instanceof State) {
                                $defaultStates = Arr::wrap($record->getDefaultStateFor($name));

                                return $this->buildStateOptions($record, $this->normalizeStateIdentifiers($defaultStates));
                            }

                            try {
                                $transitionableStates = $currentState->transitionableStates();
                            } catch (Exception) {
                                $transitionableStates = $record->getStatesFor($name)->toArray();
                            }

                            return $this->buildStateOptions($record, $this->normalizeStateIdentifiers($transitionableStates));
                        })
                        ->required()
                        ->reactive(),
                    Textarea::make('message')
                        ->required(function (Get $get, ?Model $record): bool {
                            if (! $record instanceof HasStatesContract) {
                                return false;
                            }

                            $newState = $get('state');
                            $name = $this->getName();
                            $state = $record->getAttribute($name);
                            if (! $state instanceof State) {
                                return false;
                            }

                            $stateMapping = $state::getStateMapping();
                            $newStateClass = Arr::get($stateMapping, (string) $newState);
                            if (! is_string($newStateClass) || ! class_exists($newStateClass)) {
                                return false;
                            }

                            /** @var State $newStateInstance */
                            $newStateInstance = new $newStateClass($record);

                            return method_exists($newStateInstance, 'isMessageRequired')
                                ? (bool) $newStateInstance->isMessageRequired()
                                : false;
                        }),
                ])
                ->fillForm(function (?Model $record): array {
                    $name = $this->getName();
                    if (! $record instanceof HasStatesContract) {
                        return ['state' => null];
                    }

                    $state = $record->getAttribute($name);

                    return [
                        'state' => $state instanceof State ? $state::class : null,
                    ];
                })
                ->action(function (Model $record, array $data): void {
                    Assert::isInstanceOf($record, HasStatesContract::class);
                    Assert::string($stateClass = $data['state'] ?? null);
                    $name = $this->getName();
                    $currentState = $record->getAttribute($name);
                    if (! $currentState instanceof State) {
                        throw new Exception('State property does not support transitions');
                    }

                    $message = isset($data['message']) && is_string($data['message']) ? $data['message'] : null;
                    $currentState->transitionTo($stateClass, $message);

                    $model = Str::of(class_basename($record))->slug()->toString();
                    $label = __('pub_theme::'.$model.'_states.'.$stateClass.'.label');
                    if (! is_string($label)) {
                        $label = Str::headline(class_basename($stateClass));
                    }

                    Notification::make()
                        ->title('Stato aggiornato a '.$label)
                        ->success()
                        ->send();
                }),
        );
    }

    private function callStateMethod(mixed $state, string $method): ?string
    {
        if ($state instanceof State && method_exists($state, $method)) {
            $result = $state->{$method}();

            return is_string($result) ? $result : null;
        }

        if (is_object($state) && method_exists($state, $method)) {
            $result = $state->{$method}();

            return is_string($result) ? $result : null;
        }

        return null;
    }

    /**
     * @param array<int|string, mixed> $states
     *
     * @return list<string>
     */
    private function normalizeStateIdentifiers(array $states): array
    {
        $normalized = [];

        foreach ($states as $key => $value) {
            $candidate = $this->stateValueToString($key);
            if ($candidate === null) {
                $candidate = $this->stateValueToString($value);
            }

            if ($candidate !== null) {
                $normalized[] = $candidate;
            }
        }

        return array_values(array_unique(array_filter($normalized)));
    }

    private function stateValueToString(mixed $value): ?string
    {
        if (is_string($value) && $value !== '') {
            return $value;
        }

        if ($value instanceof State) {
            return $value::class;
        }

        if (is_object($value)) {
            return $value::class;
        }

        return null;
    }

    /**
     * @param Model&HasStatesContract $record
     * @param list<string> $stateIdentifiers
     *
     * @return array<string, string>
     */
    private function buildStateOptions(Model $record, array $stateIdentifiers): array
    {
        if ($stateIdentifiers === []) {
            return [];
        }

        $modelSlug = Str::of(class_basename($record))->slug()->toString();
        $options = [];

        foreach ($stateIdentifiers as $stateIdentifier) {
            $label = __('pub_theme::'.$modelSlug.'_states.'.$stateIdentifier.'.label');
            if (! is_string($label)) {
                $label = Str::headline(class_basename($stateIdentifier));
            }

            $options[$stateIdentifier] = $label;
        }

        return $options;
    }
}
