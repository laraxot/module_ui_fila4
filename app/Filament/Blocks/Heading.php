<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

final class Heading
{
<<<<<<< HEAD
    public static function make(string $name = 'heading', string $context = 'form'): Block
=======
<<<<<<< HEAD
    public static function make(string $name = 'heading', string $context = 'form'): Block
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    public static function make(string $name = 'heading', string $_context = 'form'): Block
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
    {
        return Block::make($name)
            ->schema([
                TextInput::make('content')->required(),
                Select::make('level')
                    ->options([
                        'h1' => 'Heading 1',
                        'h2' => 'Heading 2',
                        'h3' => 'Heading 3',
                        'h4' => 'Heading 4',
                        'h5' => 'Heading 5',
                        'h6' => 'Heading 6',
                    ])
                    ->required(),
            ])
            ->columns(2);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public static function make(
        string $name = 'heading',
        string $context = 'form',
    ): Block {
        return Block::make($name)
            ->schema(
                [
                    TextInput::make('content')

                        ->required(),
                    Select::make('level')
                        ->options([
                            'h1' => 'Heading 1',
                            'h2' => 'Heading 2',
                            'h3' => 'Heading 3',
                            'h4' => 'Heading 4',
                            'h5' => 'Heading 5',
                            'h6' => 'Heading 6',
                        ])
                        ->required(),
                ]
            )->columns(2);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public static function make(string $name = 'heading', string $_context = 'form'): Block
    {
        return Block::make($name)
            ->schema([
                TextInput::make('content')->required(),
                Select::make('level')
                    ->options([
                        'h1' => 'Heading 1',
                        'h2' => 'Heading 2',
                        'h3' => 'Heading 3',
                        'h4' => 'Heading 4',
                        'h5' => 'Heading 5',
                        'h6' => 'Heading 6',
                    ])
                    ->required(),
            ])
            ->columns(2);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
    }
}
