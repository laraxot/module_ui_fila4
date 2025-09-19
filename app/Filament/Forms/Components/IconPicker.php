<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Filament\Actions\Action;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
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
            Action::make('icon')
<<<<<<< HEAD
<<<<<<< HEAD
                ->icon(fn(null|string $state) => $state)
                // ->modalContent(fn ($record) => view('ui::filament.forms.components.icon-picker', ['record' => $record]))
=======
                ->icon(fn (?string $state) => $state)
            // ->modalContent(fn ($record) => view('ui::filament.forms.components.icon-picker', ['record' => $record]))
>>>>>>> 727968c (.)
=======
                ->icon(fn(null|string $state) => $state)
                // ->modalContent(fn ($record) => view('ui::filament.forms.components.icon-picker', ['record' => $record]))
>>>>>>> ef3c5fa (.)
                ->schema([
                    Select::make('pack')
                        ->options($packs)
                        ->reactive()
                        ->live(),
                    RadioIcon::make('newstate')
                        ->options(function (Get $get) use ($icons): array {
                            $pack = $get('pack');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
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
                            if (! is_string($pack)) {
                                return [];
                            }
                            $key = $pack.'.icons';
                            Assert::isArray($opts = Arr::get($icons, $key, []), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
                            $opts = array_combine($opts, $opts);

                            return $opts;
                        })
                        ->inline()
                        ->inlineLabel(false),
                ])
                ->action(function (array $data, Set $set) {
                    $set('icon', $data['newstate']);
<<<<<<< HEAD
<<<<<<< HEAD
                }),
=======
                })
>>>>>>> 727968c (.)
=======
                }),
>>>>>>> ef3c5fa (.)
        );
    }
}
