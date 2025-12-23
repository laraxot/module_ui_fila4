<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Notify\Filament\Forms\Components;
=======
namespace Modules\UI\Filament\Forms\Components;
>>>>>>> 24eb066 (Lint)
=======
namespace Modules\UI\Filament\Forms\Components;
>>>>>>> laraxot/develop

use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
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
        /** @var list<int|string> $packsKeys */
        $packsKeys = $packs;
        $packsCombined = array_combine($packsKeys, $packsKeys);
        /** @var array<string, string> $packs */
        $packs = $packsCombined ?: [];
        // dddx($icons->toCollection()->get('heroicons')->toArray());

        $this->suffixAction(
            Action::make('icon')
                ->icon(fn (?string $state) => $state)
                // ->modalContent(fn ($record) => view('ui::filament.forms.components.icon-picker', ['record' => $record]))
                ->schema([
                    Select::make('pack')
                        ->options(function () use ($packs): array {
                            /** @var array<string, string> $packsOptions */
                            $packsOptions = $packs;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 359d970 (.)
=======

>>>>>>> 161e28f (Lint)
=======

>>>>>>> a8fbb3e (.)
=======

>>>>>>> 24eb066 (Lint)
=======

>>>>>>> laraxot/develop
                            return $packsOptions;
                        })
                        ->reactive()
                        ->live(),
                    RadioIcon::make('newstate')
<<<<<<< HEAD
<<<<<<< HEAD
                        ->options(function (\Filament\Schemas\Components\Utilities\Get $get) use ($icons): array {
=======
                        ->options(function (Get $get) use ($icons): array {
>>>>>>> 24eb066 (Lint)
=======
                        ->options(function (Get $get) use ($icons): array {
>>>>>>> laraxot/develop
                            $pack = $get('pack');
                            if (! is_string($pack)) {
                                return [];
                            }
                            $key = $pack.'.icons';
                            $optsRaw = Arr::get($icons, $key, []);
                            Assert::isArray(
                                $optsRaw,
                                '['.__LINE__.']['.class_basename($this).']',
                            );
                            /** @var array<int|string, mixed> $optsRaw */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                            $optsValues = array_map(fn($v) => is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(fn($k) => is_string($k) ? $k : (string) $k, array_keys($optsRaw));
=======
                            $optsValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($optsRaw));
>>>>>>> 359d970 (.)
=======
                            $optsValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($optsRaw));
>>>>>>> 161e28f (Lint)
=======
=======
>>>>>>> 24eb066 (Lint)
=======
>>>>>>> laraxot/develop
                            $optsValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($optsRaw));
                            $optsValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($optsRaw));
                            $optsValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($optsRaw));
                            $optsValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($optsRaw));
                            $optsValues = array_map(fn ($v) => is_string($v) ? $v : (string) $v, array_values($optsRaw));
                            /** @var array<int|string> $optsKeys */
                            $optsKeys = array_map(fn ($k) => is_string($k) ? $k : (string) $k, array_keys($optsRaw));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
=======
>>>>>>> laraxot/develop
                            $optsCombined = array_combine($optsKeys, $optsValues);

                            return $optsCombined ?: [];
                        })
                        ->inline()
                        ->inlineLabel(false),
                ])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->action(function (array $data, \Filament\Schemas\Components\Utilities\Set $set) {
=======
                ->action(function (array $data, Set $set) {
>>>>>>> a8fbb3e (.)
=======
                ->action(function (array $data, Set $set) {
>>>>>>> 24eb066 (Lint)
=======
                ->action(function (array $data, Set $set) {
>>>>>>> laraxot/develop
                    $set('icon', $data['newstate']);
                }),
        );
    }
}
