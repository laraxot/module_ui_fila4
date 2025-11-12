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
        $this->icon(function ($state): ?string {
            if (is_object($state) && method_exists($state, 'icon')) {
                return $state->icon();
            }
            return null;
        });
        $this->color(function ($state): ?string {
            if (is_object($state) && method_exists($state, 'color')) {
                return $state->color();
            }
            return null;
        });
        $this->tooltip(function ($state): ?string {
            if (is_object($state) && method_exists($state, 'label')) {
                return $state->label();
            }
            return null;
        });
        // $this->label('aaa');

        $this->action(
            Action::make('change-state')
                ->schema([
                    Select::make('state')
                        ->options(function (Model&HasStatesContract $record, string $_state): array {
                            $name = $this->getName();
                            $state = $record->getAttribute($name);
                            if ($state === null) {
                                $defaultStates = $record->getDefaultStateFor($name);
                                $states = Arr::wrap($defaultStates);

                                /** @phpstan-ignore argument.type */
                                return is_array($states) ? array_combine($states, $states) : [];
                            }
                            Assert::isInstanceOf($state, State::class);

                            try {
                                $states = $state->transitionableStates();
                            } catch (Exception $e) {
                                $states = $record->getStatesFor($name)->toArray();
                            }
                            /** @phpstan-ignore-next-line */
                            $states = Arr::mapWithKeys($states, function ($state) use ($record) {
                                $model = Str::of(class_basename($record))->slug()->toString();
                                /** @phpstan-ignore binaryOp.invalid */
                                Assert::string($label = __('pub_theme::'.$model.'_states.'.$state.'.label'));

                                /* @phpstan-ignore-next-line array.invalidKey */
                                return [$state => $label];
                            });

                            return $states;
                        })
                        ->required()
                        ->reactive(),
                    Textarea::make('message')->required(function (\Filament\Schemas\Components\Utilities\Get $get, $record) {
                        $newState = $get('state');
                        $name = $this->getName();
                        $state = $record->getAttribute($name);
                        if (is_object($state) && method_exists($state, 'getStateMapping')) {
                            $states = $state::getStateMapping();
                            /** @var class-string<State> $newStateClass */
                            $newStateClass = Arr::get($states, (string) $newState);
                            if (! is_string($newStateClass) || ! class_exists($newStateClass)) {
                                return false;
                            }
                            $newStateInstance = new $newStateClass($record);

                            return method_exists($newStateInstance, 'isMessageRequired')
                                ? $newStateInstance->isMessageRequired()
                                : false;
                        }
                        return false;
                    }),
                ])
                ->fillForm(function ($record) {
                    $name = $this->getName();
                    $state = $record->getAttribute($name);
                    
                    return [
                        'state' => is_object($state) ? get_class($state) : null,
                    ];
                })
                ->action(function ($record, $data) {
                    $state = $data['state'];
                    $model = Str::of(class_basename($record))->slug()->toString();
                    $label = __('pub_theme::'.$model.'_states.'.$state.'.label');
                    if (!is_object($record->state) || !method_exists($record->state, 'transitionTo')) {
                        throw new Exception('State property does not support transitions');
                    }
                    $record->state->transitionTo($data['state'], $data['message']);
                    Notification::make()
                        ->title('Stato aggiornato a '.$label)
                        ->success()
                        ->send();
                }),
        );
    }
}
