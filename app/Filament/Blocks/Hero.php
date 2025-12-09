<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use \Filament\Forms\Forms\Components\RadioImage;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;

class Hero
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    public static function make(string $name = 'hero', string $_context = 'form'): Block
    {
        $options = app(GetViewBlocksOptionsByTypeAction::class)->execute('hero', true);

        // ---------------
        return Block::make($name)->schema([
            TextInput::make('title'),
            RichEditor::make('text'),
            FileUpload::make('background')
                // ->acceptedFileTypes(['application/pdf'])
                // ->image()
                ->directory('blocks')
                ->preserveFilenames(),
            /*
             * RadioImage::make('view')
             * ->options($options),
             * // */
            /*
             * Select::make('_tpl')
             * ->options($views),
             * //*/
            Repeater::make('buttons')
                ->schema([
                    TextInput::make('label')->required(),
                    TextInput::make('class'),
                    TextInput::make('link'),
                ])
                ->columns(3),
        ]);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public static function make(
        string $name = 'hero',
        string $context = 'form',
    ): Block {
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('hero', true);

        // ---------------
        return Block::make($name)
            ->schema(
                [
                    TextInput::make('title'),
                    RichEditor::make('text'),
                    FileUpload::make('background')
                        // ->acceptedFileTypes(['application/pdf'])
                        // ->image()
                        ->directory('blocks')
                        ->preserveFilenames(),
                    /*
                    RadioImage::make('view')
                        ->options($options),
                    // */
                    /*
                    Select::make('_tpl')
                        ->options($views),
                    //*/
                    Repeater::make('buttons')
                        ->schema([
                            TextInput::make('label')->required(),
                            TextInput::make('class'),
                            TextInput::make('link'),
                        ])
                        ->columns(3),
                ]
            );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public static function make(string $name = 'hero', string $_context = 'form'): Block
    {
        $options = app(GetViewBlocksOptionsByTypeAction::class)->execute('hero', true);

        // ---------------
        return Block::make($name)->schema([
            TextInput::make('title'),
            RichEditor::make('text'),
            FileUpload::make('background')
                // ->acceptedFileTypes(['application/pdf'])
                // ->image()
                ->directory('blocks')
                ->preserveFilenames(),
            /*
             * RadioImage::make('view')
             * ->options($options),
             * // */
            /*
             * Select::make('_tpl')
             * ->options($views),
             * //*/
            Repeater::make('buttons')
                ->schema([
                    TextInput::make('label')->required(),
                    TextInput::make('class'),
                    TextInput::make('link'),
                ])
                ->columns(3),
        ]);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }
}
