<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class Image
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    public static function make(string $name = 'image', string $context = 'form'): Block
    {
        return Block::make($name)
            ->schema([
                FileUpload::make('image'),
                TextInput::make('url'),
                Select::make('ratio')
                    ->options(static::getRatios())
                    ->afterStateHydrated(static fn($state, $set) => $state || $set('ratio', '4-3')),
                TextInput::make('alt')->columnSpanFull(),
                TextInput::make('caption')->columnSpanFull(),
            ])
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public static function make(
        string $name = 'image',
        string $context = 'form',
    ): Block {
        return Block::make($name)
            ->schema(
                [
                    FileUpload::make('image'),

                    TextInput::make('url'),

                    Select::make('ratio')
                        ->options(static::getRatios())
                        ->afterStateHydrated(static fn ($state, $set) => $state || $set('ratio', '4-3')),

                    TextInput::make('alt')
                        ->columnSpanFull(),

                    TextInput::make('caption')
                        ->columnSpanFull(),
                ]
            )
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public static function make(string $name = 'image', string $context = 'form'): Block
    {
        return Block::make($name)
            ->schema([
                FileUpload::make('image'),
                TextInput::make('url'),
                Select::make('ratio')
                    ->options(static::getRatios())
                    ->afterStateHydrated(static fn($state, $set) => $state || $set('ratio', '4-3')),
                TextInput::make('alt')->columnSpanFull(),
                TextInput::make('caption')->columnSpanFull(),
            ])
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            ->columns('form' === $context ? 2 : 1);
    }

    public static function getRatios(): array
    {
        return [
            '4-3' => '4/3',
            '3-4' => '3/4',
            'free' => 'free',
        ];
    }

    public static function getRatioClass(string $ratio): string
    {
        return match ($ratio) {
            '4-3' => 'aspect-[4/3]',
            '3-4' => 'aspect-[3/4]',
            default => '',
        };
    }

    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
            FileUpload::make('image')
                ->required()
                ->image()
                ->maxSize(5120),
<<<<<<< HEAD
            TextInput::make('url')->url()->maxLength(255),
=======
<<<<<<< HEAD
<<<<<<< HEAD
            TextInput::make('url')->url()->maxLength(255),
=======
            TextInput::make('url')
                ->url()
                ->maxLength(255),
>>>>>>> a12f125f4a (.)
=======
            TextInput::make('url')->url()->maxLength(255),
>>>>>>> b93ef594b4 (.)
=======
            \Filament\Forms\Components\FileUpload::make('image')
                ->required()
                ->image()
                ->maxSize(5120),
            \Filament\Forms\Components\TextInput::make('url')
                ->url()
                ->maxLength(255),
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        ];
    }
}
