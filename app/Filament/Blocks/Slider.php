<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

<<<<<<< HEAD
use Filament\Forms\Components\Select;
=======
<<<<<<< HEAD
use Filament\Forms\Components\Select;
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Modules\UI\Filament\Forms\Components\RadioImage;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
use Modules\Xot\Actions\View\GetViewsSiblingsAndSelfAction;

class Slider
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    public static function make(string $name = 'slider', string $_context = 'form'): Block
    {
        // $view = 'ui::components.blocks.slider.v1';
        // $views = app(GetViewsSiblingsAndSelfAction::class)->execute($view);
        // dddx('a');
        $options = app(GetViewBlocksOptionsByTypeAction::class)->execute('slider', true);

        // dddx($options);
        return Block::make($name)
            ->schema([
                TextInput::make('method')->hint('Inserisci il nome del metodo da richiamare nel tema')->required(),
                // Select::make('_tpl')
                //     ->label('layout')
                //     ->options($options),
                // ->afterStateHydrated(static fn ($state, $set) => $state || $set('level', 'h2')),

                RadioImage::make('view')->options($options),
            ])
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public static function make(
        string $name = 'slider',
        string $context = 'form',
    ): Block {
<<<<<<< HEAD
=======
    public static function make(string $name = 'slider', string $_context = 'form'): Block
    {
>>>>>>> b93ef594b4 (.)
        // $view = 'ui::components.blocks.slider.v1';
        // $views = app(GetViewsSiblingsAndSelfAction::class)->execute($view);
        // dddx('a');
        $options = app(GetViewBlocksOptionsByTypeAction::class)->execute('slider', true);

        // dddx($options);
        return Block::make($name)
            ->schema([
                TextInput::make('method')->hint('Inserisci il nome del metodo da richiamare nel tema')->required(),
                // Select::make('_tpl')
                //     ->label('layout')
                //     ->options($options),
                // ->afterStateHydrated(static fn ($state, $set) => $state || $set('level', 'h2')),

<<<<<<< HEAD
=======
        // $view = 'ui::components.blocks.slider.v1';
        // $views = app(GetViewsSiblingsAndSelfAction::class)->execute($view);
        // dddx('a');
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('slider', true);

        // dddx($options);
        return Block::make($name)
            ->schema(
                [
                    TextInput::make('method')

>>>>>>> origin/develop
                        ->hint('Inserisci il nome del metodo da richiamare nel tema')
                        ->required(),

                    // Select::make('_tpl')
                    //     ->label('layout')
                    //     ->options($options),
                    // ->afterStateHydrated(static fn ($state, $set) => $state || $set('level', 'h2')),

                    RadioImage::make('view')
                        ->options($options),
                ]
            )
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                RadioImage::make('view')->options($options),
            ])
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            ->columns(1);
    }

    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            Select::make('layout')
=======
<<<<<<< HEAD
            Select::make('layout')
=======
            \Filament\Forms\Components\Select::make('layout')
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                ->options([
                    'default' => 'Default',
                    'fullscreen' => 'Fullscreen',
                    'minimal' => 'Minimal',
                ])
                ->required(),
        ];
    }
}
