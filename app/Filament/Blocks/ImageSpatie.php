<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Schemas\Components\Utilities\Get;
=======
<<<<<<< HEAD
use Filament\Schemas\Components\Utilities\Get;
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Contracts\HasForms;
<<<<<<< HEAD
use Filament\Schemas\Components\Utilities\Get;
=======
<<<<<<< HEAD
use Filament\Schemas\Components\Utilities\Get;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Forms\Get;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Spatie\MediaLibrary\HasMedia;
use Webmozart\Assert\Assert;

final class ImageSpatie
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
    public static function make(string $name = 'image_spatie', string $context = 'form'): Block
    {
        return Block::make($name)
            ->schema([
                Hidden::make('img_uuid')
                    ->default(Str::uuid()->toString(...))
                    ->formatStateUsing(fn ($state) => $state ?? Str::uuid()->toString()),
                // ->live()
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public static function make(
        string $name = 'image_spatie',
        string $context = 'form',
    ): Block {
<<<<<<< HEAD
=======
    public static function make(string $name = 'image_spatie', string $context = 'form'): Block
    {
>>>>>>> b93ef594b4 (.)
        return Block::make($name)
            ->schema([
                Hidden::make('img_uuid')
                    ->default(Str::uuid()->toString(...))
                    ->formatStateUsing(fn($state) => $state ?? Str::uuid()->toString()),
                // ->live()
<<<<<<< HEAD
                ,

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        return Block::make($name)

            ->schema([
                Hidden::make('img_uuid')
                    ->default(fn () => Str::uuid()->toString())
                    ->formatStateUsing(fn ($state) => $state ?? Str::uuid()->toString())
                // ->live()
                ,

>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
                SpatieMediaLibraryFileUpload::make('image')
                    ->live()
                    ->hiddenLabel()
                    ->imagePreviewHeight('666')
                    // ->panelLayout('integrated')
                    // ->imageResizeMode('cover')
                    // ->panelAspectRatio('2:1')
                    ->maxSize(102400)
                    ->disk('local')
                    ->image()
                    ->preserveFilenames()
                    ->openable()
                    ->downloadable()
                    // ->rules(Rule::dimensions()->maxWidth(600)->maxHeight(800))
<<<<<<< HEAD
                    ->collection(fn (Get $get) => $get('img_uuid'))
=======
<<<<<<< HEAD
                    ->collection(fn (Get $get) => $get('img_uuid'))
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
                    ->collection(fn(Get $get) => $get('img_uuid'))
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
                    ->afterStateUpdated(function (
                        HasForms $_livewire,
                        SpatieMediaLibraryFileUpload $_component,
                        TemporaryUploadedFile $state,
                        Get $get,
                        HasMedia $record,
<<<<<<< HEAD
                    ): void {
=======
                    ) {
>>>>>>> laraxot/develop
                        // Call to an undefined method Filament\Forms\Contracts\HasForms::validateOnly().
                        // $livewire->validateOnly($component->getStatePath());
                        Assert::string(
                            $collection_name = $get('img_uuid'),
                            '['.__LINE__.']['.class_basename(self::class).']',
                        );
                        $res = $record->addMedia($state)->withResponsiveImages()->toMediaCollection($collection_name);
                    }),
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
                    ->collection(fn (Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(
                        function (HasForms $livewire, SpatieMediaLibraryFileUpload $component, TemporaryUploadedFile $state, Get $get, HasMedia $record) {
                            // Call to an undefined method Filament\Forms\Contracts\HasForms::validateOnly().
                            // $livewire->validateOnly($component->getStatePath());
                            Assert::string($collection_name = $get('img_uuid'), '['.__LINE__.']['.class_basename(__CLASS__).']');
                            $res = $record
                                ->addMedia($state)
                                ->withResponsiveImages()
                                ->toMediaCollection($collection_name);
                        }
                    ),

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
                TextInput::make('caption'),
            ])
            ->columns('form' === $context ? 2 : 1);
    }
}
