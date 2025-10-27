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
<<<<<<< HEAD
        $this->icon(fn ($state): ?string => is_object($state) && method_exists($state, 'icon') ? (string) $state->icon() : null);
        $this->color(fn ($state): ?string => is_object($state) && method_exists($state, 'color') ? (string) $state->color() : null);
        $this->tooltip(fn ($state): ?string => is_object($state) && method_exists($state, 'label') ? (string) $state->label() : null);
=======
        $this->icon(fn ($state): ?string => $state?->icon());
        $this->color(fn ($state): ?string => $state?->color());
        $this->tooltip(fn ($state): ?string => $state?->label());
>>>>>>> 3b732b6 (.)
        // $this->label('aaa');

        $this->action(
            Action::make('change-state')
                ->schema([
                    Select::make('state')
                        ->options(function (Model&HasStatesContract $record, string $_state): array {
                            $name = $this->getName();
                            $state = $record->getAttribute($name);
                            if ($state === null) {
                                $states = Arr::wrap($record->getDefaultStateFor($name));

<<<<<<< HEAD
                                /** @var array<int|string, mixed> $statesArray */
                                $statesArray = (array) $states;

                                return array_combine(array_keys($statesArray), array_values($statesArray));
=======
                                return array_combine($states, $states);
>>>>>>> 3b732b6 (.)
                            }
                            Assert::isInstanceOf($state, State::class);

                            try {
                                $states = $state->transitionableStates();
                            } catch (Exception $e) {
                                $states = $record->getStatesFor($name)->toArray();
<<<<<<< HEAD

=======
>>>>>>> 3b732b6 (.)
                            }
                            /** @phpstan-ignore-next-line */
                            $states = Arr::mapWithKeys($states, function ($state) use ($record) {
                                $model = Str::of(class_basename($record))->slug()->toString();
                                /** @phpstan-ignore binaryOp.invalid */
                                Assert::string($label = __('pub_theme::'.$model.'_states.'.$state.'.label'));

<<<<<<< HEAD
                                /* @phpstan-ignore-next-line array.invalidKey */
=======
>>>>>>> 3b732b6 (.)
                                return [$state => $label];
                            });

                            return $states;
                        })
                        ->required()
                        ->reactive(),
                    Textarea::make('message')->required(function (Get $get, $record) {
                        $newState = $get('state');
                        $name = $this->getName();
<<<<<<< HEAD
                        if (is_object($record) && method_exists($record, 'getAttribute')) {
                            $state = $record->getAttribute($name);
                            if (is_object($state) && method_exists($state, 'getStateMapping')) {
                                $states = $state::getStateMapping();
                                /** @var class-string<State> $newStateClass */
                                $newStateClass = Arr::get((array) $states, (string) $newState);
                            } else {
                                return false;
                            }
                        } else {
                            return false;
                        }
=======
                        $state = $record->getAttribute($name);
                        $states = $state::getStateMapping();
                        /** @var class-string<State> $newStateClass */
                        $newStateClass = Arr::get($states, (string) $newState);
>>>>>>> 3b732b6 (.)
                        if (! is_string($newStateClass) || ! class_exists($newStateClass)) {
                            return false;
                        }
                        $newStateInstance = new $newStateClass($record);

                        return method_exists($newStateInstance, 'isMessageRequired')
                            ? $newStateInstance->isMessageRequired()
                            : false;
                    }),
                ])
                ->fillForm(fn ($record) => [
<<<<<<< HEAD
                    'state' => is_object($record) && property_exists($record, 'state') && is_object($record->state) && property_exists($record->state, $this->getName()) ? $record->state->{$this->getName()} : null,
                ])
                ->action(function ($record, $data): void {
                    if (! is_array($data) || ! isset($data['state']) || ! isset($data['message'])) {
                        return;
                    }
                    $state = (string) $data['state'];
                    $model = Str::of(class_basename(is_object($record) ? $record : ''))->slug()->toString();
                    Assert::string($label = __('pub_theme::'.$model.'_states.'.$state.'.label'));
                    if (is_object($record) && property_exists($record, 'state') && is_object($record->state) && method_exists($record->state, 'transitionTo')) {
                        $record->state->transitionTo($data['state'], $data['message']);
                    }
=======
                    'state' => $record->state::$name,
                ])
                ->action(function ($record, $data) {
                    $state = $data['state'];
                    $model = Str::of(class_basename($record))->slug()->toString();
                    Assert::string($label = __('pub_theme::'.$model.'_states.'.$state.'.label'));
                    $record->state->transitionTo($data['state'], $data['message']);
>>>>>>> 3b732b6 (.)
                    Notification::make()
                        ->title('Stato aggiornato a '.$label)
                        ->success()
                        ->send();
                }),
        );
    }
}
