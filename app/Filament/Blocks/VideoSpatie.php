<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

<<<<<<< HEAD
use Filament\Schemas\Components\Utilities\Get;
=======
<<<<<<< HEAD
use Filament\Schemas\Components\Utilities\Get;
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use Filament\Forms;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Contracts\HasForms;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Forms\Get;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Spatie\MediaLibrary\HasMedia;
use Webmozart\Assert\Assert;

class VideoSpatie
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    public static function make(string $name = 'video_spatie', string $context = 'form'): Block
    {
        return Block::make($name)
            ->schema([
                Hidden::make('img_uuid')
                    ->default(Str::uuid()->toString(...))
                    ->formatStateUsing(fn($state) => $state ?? Str::uuid()->toString())
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public static function make(
        string $name = 'video_spatie',
        string $context = 'form',
    ): Block {
<<<<<<< HEAD
=======
    public static function make(string $name = 'video_spatie', string $context = 'form'): Block
    {
>>>>>>> b93ef594b4 (.)
        return Block::make($name)
            ->schema([
                Hidden::make('img_uuid')
<<<<<<< HEAD
                    ->default(fn () => Str::uuid()->toString())
                    ->formatStateUsing(fn ($state) => $state ?? Str::uuid()->toString())
>>>>>>> a12f125f4a (.)
=======
                    ->default(Str::uuid()->toString(...))
                    ->formatStateUsing(fn($state) => $state ?? Str::uuid()->toString())
>>>>>>> b93ef594b4 (.)
=======
        return Block::make($name)

            ->schema([
                Hidden::make('img_uuid')
                    ->default(fn () => Str::uuid()->toString())
                    ->formatStateUsing(fn ($state) => $state ?? Str::uuid()->toString())
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                    ->live(),
                // ->required(),

                SpatieMediaLibraryFileUpload::make('video')
                    ->live()
                    ->hiddenLabel()
                    // ->imagePreviewHeight('250')
                    // ->panelLayout('integrated')
                    ->imageResizeMode('cover')
                    ->panelAspectRatio('2:1')
                    ->maxSize(502400)
                    ->disk('local')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                    ->preserveFilenames()
                    ->openable()
                    ->previewable()
                    ->downloadable()
                    // ->rules(Rule::dimensions()->maxWidth(600)->maxHeight(800))
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
                    ->collection(fn(Get $get) => $get('img_uuid'))
                    ->afterStateUpdated(function (
                        HasForms $_livewire,
                        SpatieMediaLibraryFileUpload $_component,
                        TemporaryUploadedFile $state,
                        Get $get,
                        HasMedia $record,
                    ) {
                        // Call to an undefined method Filament\Forms\Contracts\HasForms::validateOnly().
                        // $livewire->validateOnly($component->getStatePath());
                        Assert::string(
                            $collection_name = $get('img_uuid'),
                            '[' . __LINE__ . '][' . class_basename(__CLASS__) . ']',
                        );
                        $res = $record->addMedia($state)->withResponsiveImages()->toMediaCollection($collection_name);
                    }),
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
                /*
                 * Select::make('ratio')
                 * ->options(static::getRatios())
                 * ->afterStateHydrated(static fn ($state, $set) => $state || $set('ratio', '4-3')),
                 *
                 * TextInput::make('alt')
                 * ->columnSpanFull(),
                 */
                TextInput::make('caption'),
                // ->columnSpanFull()
                // Filament\Forms\Components\SpatieMediaLibraryFileUpload::whereCustomProperties does not exist.
                // ->whereCustomProperties(fn(Forms\Get $get) => ['gallery_id' => $get('gallery_id')])
                // ->customProperties(fn(Forms\Get $get) => ['gallery_id' => $get('gallery_id')]),
<<<<<<< HEAD
=======
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
=======
>>>>>>> b93ef594b4 (.)
                /*
                 * Select::make('ratio')
                 * ->options(static::getRatios())
                 * ->afterStateHydrated(static fn ($state, $set) => $state || $set('ratio', '4-3')),
                 *
                 * TextInput::make('alt')
                 * ->columnSpanFull(),
                 */
                TextInput::make('caption'),
                // ->columnSpanFull()
                // Filament\Forms\Components\SpatieMediaLibraryFileUpload::whereCustomProperties does not exist.
                // ->whereCustomProperties(fn(Forms\Get $get) => ['gallery_id' => $get('gallery_id')])
                // ->customProperties(fn(Forms\Get $get) => ['gallery_id' => $get('gallery_id')]),
<<<<<<< HEAD

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                /*
                Select::make('ratio')
                    ->options(static::getRatios())
                    ->afterStateHydrated(static fn ($state, $set) => $state || $set('ratio', '4-3')),

                TextInput::make('alt')
                    ->columnSpanFull(),
                */
                TextInput::make('caption')

                // ->columnSpanFull()
                ,

                // Filament\Forms\Components\SpatieMediaLibraryFileUpload::whereCustomProperties does not exist.
                // ->whereCustomProperties(fn(Forms\Get $get) => ['gallery_id' => $get('gallery_id')])

                // ->customProperties(fn(Forms\Get $get) => ['gallery_id' => $get('gallery_id')]),

>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                // Forms\Components\SpatieMediaLibraryFileUpload::make('media_id')
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
