<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
// use Modules\Xot\Actions\View\GetViewsSiblingsAndSelfAction;
use \Filament\Forms\Forms\Components\RadioImage;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;

class Paragraph
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    public static function make(string $name = 'paragraph', string $_context = 'form'): Block
    {
        // $view = 'ui::components.blocks.paragraph.v1';
        // $views = app(GetViewsSiblingsAndSelfAction::class)->execute($view);

        $options = app(GetViewBlocksOptionsByTypeAction::class)->execute('paragraph', false);

        return Block::make($name)->schema([
            TextInput::make('title'),
            RichEditor::make('text'),
            Select::make('view')->options($options),
            // RadioImage::make('view')
            //    ->options($options),
        ]);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public static function make(
        string $name = 'paragraph',
        string $context = 'form',
    ): Block {
<<<<<<< HEAD
=======
    public static function make(string $name = 'paragraph', string $_context = 'form'): Block
    {
>>>>>>> b93ef594b4 (.)
        // $view = 'ui::components.blocks.paragraph.v1';
        // $views = app(GetViewsSiblingsAndSelfAction::class)->execute($view);

        $options = app(GetViewBlocksOptionsByTypeAction::class)->execute('paragraph', false);

<<<<<<< HEAD
=======
        // $view = 'ui::components.blocks.paragraph.v1';
        // $views = app(GetViewsSiblingsAndSelfAction::class)->execute($view);

        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('paragraph', false);

>>>>>>> origin/develop
        return Block::make($name)
            ->schema(
                [
                    TextInput::make('title'),
                    RichEditor::make('text'),
                    Select::make('view')
                        ->options($options),
                    // RadioImage::make('view')
                    //    ->options($options),
                ]
            );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        return Block::make($name)->schema([
            TextInput::make('title'),
            RichEditor::make('text'),
            Select::make('view')->options($options),
            // RadioImage::make('view')
            //    ->options($options),
        ]);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }
}
