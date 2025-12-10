<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;

final class ImagesGallery
{
<<<<<<< HEAD
<<<<<<< HEAD
    public static function make(string $name = 'images_gallery', string $context = 'form'): Block
    {
=======
    public static function make(
        string $name = 'images_gallery',
        string $context = 'form',
    ): Block {
>>>>>>> 727968c (.)
=======
    public static function make(string $name = 'images_gallery', string $context = 'form'): Block
    {
>>>>>>> ef3c5fa (.)
        return Block::make($name)
            ->schema([
                Repeater::make('gallery')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('image')
<<<<<<< HEAD
<<<<<<< HEAD
                            // ->image()
                            // ->maxSize(5000)
=======
                        // ->image()
                        // ->maxSize(5000)
>>>>>>> 727968c (.)
=======
                            // ->image()
                            // ->maxSize(5000)
>>>>>>> ef3c5fa (.)
                            ->multiple()
                            ->enableReordering()
                            ->openable()
                            ->downloadable()
                            ->columnSpanFull()
                            // ->collection('avatars')
                            // ->conversion('thumbnail')
                            ->disk('uploads')
                            ->directory('photos'),
<<<<<<< HEAD
<<<<<<< HEAD
                        TextInput::make('title')->columnSpanFull(),
                        TextInput::make('subtitle')->columnSpanFull(),
                        Select::make('version')
=======

                        TextInput::make('title')
                            ->columnSpanFull(),

                        TextInput::make('subtitle')
                            ->columnSpanFull(),

                        Select::make('version')

>>>>>>> 727968c (.)
=======
                        TextInput::make('title')->columnSpanFull(),
                        TextInput::make('subtitle')->columnSpanFull(),
                        Select::make('version')
>>>>>>> ef3c5fa (.)
                            ->required()
                            ->options([
                                'v1' => 'versione 1',
                                'v2' => 'versione 2',
                            ]),
<<<<<<< HEAD
<<<<<<< HEAD
                    ])
                    ->columnSpanFull(),
=======
                    ])->columnSpanFull(),

>>>>>>> 727968c (.)
=======
                    ])
                    ->columnSpanFull(),
>>>>>>> ef3c5fa (.)
                // FileUpload::make('image')
                //     ,
                // SpatieMediaLibraryFileUpload::make('image')
                //         // ->image()
                //         // ->maxSize(5000)
                //     ->multiple()
                //     ->enableReordering()
                //     ->openable()
                //     ->downloadable()
                //     ->columnSpanFull()
                //         // ->collection('avatars')
                //         // ->conversion('thumbnail')
                //     ->disk('uploads')
                //     ->directory('photos'),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
                // TextInput::make('url')
                //     ,
                // Select::make('ratio')
                //     ->options(static::getRatios())
                //     ->afterStateHydrated(static fn ($state, $set) => $state || $set('ratio', '4-3')),
                // TextInput::make('alt')
                //     ->columnSpanFull(),
<<<<<<< HEAD
=======

                // TextInput::make('url')
                //     ,

                // Select::make('ratio')
                //     ->options(static::getRatios())
                //     ->afterStateHydrated(static fn ($state, $set) => $state || $set('ratio', '4-3')),

                // TextInput::make('alt')
                //     ->columnSpanFull(),

>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
                // TextInput::make('caption')
                //     ->columnSpanFull(),
            ])
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
}
