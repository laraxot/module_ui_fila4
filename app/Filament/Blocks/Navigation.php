<?php
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 727968c (.)
=======

>>>>>>> ef3c5fa (.)
declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
use Override;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Blocks\XotBaseBlock;
<<<<<<< HEAD
=======
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Modules\Xot\Filament\Blocks\XotBaseBlock;
use Filament\Forms\Components\Forms;
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
use Modules\Xot\Filament\Traits\TransTrait;

class Navigation extends XotBaseBlock
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
    #[Override]
    public static function getBlockSchema(): array
    {
        return [
            Repeater::make('items')
                ->label('Voci di navigazione')
                ->schema([
                    TextInput::make('label')->label('Testo link')->required(),
                    TextInput::make('url')
                        ->label('URL link')
                        ->url()
                        ->required(),
                ])
                ->columns(2)
                ->minItems(1),
<<<<<<< HEAD
=======
    

    public static function getBlockSchema(): array
    {
        return [
                Repeater::make('items')
                    ->label('Voci di navigazione')
                    ->schema([
                        TextInput::make('label')
                            ->label('Testo link')
                            ->required(),
                        TextInput::make('url')
                            ->label('URL link')
                            ->url()
                            ->required(),
                    ])
                    ->columns(2)
                    ->minItems(1),
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
        ];
    }

    public function getFormSchema(): array
    {
        return [
            Repeater::make('items')
                ->label(static::trans('blocks.navigation.fields.items.label'))
                ->schema([
<<<<<<< HEAD
<<<<<<< HEAD
                    TextInput::make('text')->label(static::trans('blocks.navigation.fields.text.label')),
                    TextInput::make('url')->label(static::trans('blocks.navigation.fields.url.label')),
=======
                    TextInput::make('text')
                        ->label(static::trans('blocks.navigation.fields.text.label')),
                    TextInput::make('url')
                        ->label(static::trans('blocks.navigation.fields.url.label')),
>>>>>>> 727968c (.)
=======
                    TextInput::make('text')->label(static::trans('blocks.navigation.fields.text.label')),
                    TextInput::make('url')->label(static::trans('blocks.navigation.fields.url.label')),
>>>>>>> ef3c5fa (.)
                ]),
        ];
    }
}
