<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Filament\Actions\Action;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
=======
=======
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Forms\Set;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use Illuminate\Support\Arr;
use Modules\UI\Actions\Icon\GetAllIconsAction;
use Webmozart\Assert\Assert;

class IconPicker extends TextInput
{
    protected function setUp(): void
    {
        parent::setUp();

        $icons = app(GetAllIconsAction::class)->execute();

        $packs = array_keys($icons);
        // $packs = $icons->toCollection()->keys()->toArray();
        $packs = array_combine($packs, $packs);
        // dddx($icons->toCollection()->get('heroicons')->toArray());

        $this->suffixAction(
<<<<<<< HEAD
            Action::make('icon')
                ->icon(fn(null|string $state) => $state)
                // ->modalContent(fn ($record) => view('ui::filament.forms.components.icon-picker', ['record' => $record]))
                ->schema([
=======
<<<<<<< HEAD
            Action::make('icon')
<<<<<<< HEAD
<<<<<<< HEAD
                ->icon(fn(null|string $state) => $state)
                // ->modalContent(fn ($record) => view('ui::filament.forms.components.icon-picker', ['record' => $record]))
=======
                ->icon(fn (?string $state) => $state)
            // ->modalContent(fn ($record) => view('ui::filament.forms.components.icon-picker', ['record' => $record]))
>>>>>>> a12f125f4a (.)
=======
                ->icon(fn(null|string $state) => $state)
                // ->modalContent(fn ($record) => view('ui::filament.forms.components.icon-picker', ['record' => $record]))
>>>>>>> b93ef594b4 (.)
                ->schema([
=======
            \Filament\Forms\Components\Actions\Action::make('icon')
                ->icon(fn (?string $state) => $state)
            // ->modalContent(fn ($record) => view('ui::filament.forms.components.icon-picker', ['record' => $record]))
                ->form([
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                    Select::make('pack')
                        ->options($packs)
                        ->reactive()
                        ->live(),
                    RadioIcon::make('newstate')
                        ->options(function (Get $get) use ($icons): array {
                            $pack = $get('pack');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
                            if (!is_string($pack)) {
                                return [];
                            }
                            $key = $pack . '.icons';
                            Assert::isArray(
                                $opts = Arr::get($icons, $key, []),
                                '[' . __LINE__ . '][' . class_basename($this) . ']',
                            );
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                            if (! is_string($pack)) {
                                return [];
                            }
                            $key = $pack.'.icons';
                            Assert::isArray($opts = Arr::get($icons, $key, []), '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                            if (!is_string($pack)) {
                                return [];
                            }
                            $key = $pack . '.icons';
                            Assert::isArray(
                                $opts = Arr::get($icons, $key, []),
                                '[' . __LINE__ . '][' . class_basename($this) . ']',
                            );
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                            $opts = array_combine($opts, $opts);

                            return $opts;
                        })
                        ->inline()
                        ->inlineLabel(false),
                ])
                ->action(function (array $data, Set $set) {
                    $set('icon', $data['newstate']);
<<<<<<< HEAD
                }),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                }),
=======
                })
>>>>>>> a12f125f4a (.)
=======
                }),
>>>>>>> b93ef594b4 (.)
=======
                })
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        );
    }
}
