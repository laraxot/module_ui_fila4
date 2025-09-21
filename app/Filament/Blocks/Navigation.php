<?php
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
declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Override;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Blocks\XotBaseBlock;
<<<<<<< HEAD
=======
=======
=======
use Override;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Forms;
>>>>>>> b93ef594b4 (.)
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Blocks\XotBaseBlock;
<<<<<<< HEAD
use Filament\Forms\Components\Forms;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Modules\Xot\Filament\Blocks\XotBaseBlock;
use Filament\Forms\Components\Forms;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use Modules\Xot\Filament\Traits\TransTrait;

class Navigation extends XotBaseBlock
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
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
=======
=======
>>>>>>> origin/develop
    

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
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        ];
    }

    public function getFormSchema(): array
    {
        return [
            Repeater::make('items')
                ->label(static::trans('blocks.navigation.fields.items.label'))
                ->schema([
<<<<<<< HEAD
                    TextInput::make('text')->label(static::trans('blocks.navigation.fields.text.label')),
                    TextInput::make('url')->label(static::trans('blocks.navigation.fields.url.label')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    TextInput::make('text')->label(static::trans('blocks.navigation.fields.text.label')),
                    TextInput::make('url')->label(static::trans('blocks.navigation.fields.url.label')),
=======
=======
>>>>>>> origin/develop
                    TextInput::make('text')
                        ->label(static::trans('blocks.navigation.fields.text.label')),
                    TextInput::make('url')
                        ->label(static::trans('blocks.navigation.fields.url.label')),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                    TextInput::make('text')->label(static::trans('blocks.navigation.fields.text.label')),
                    TextInput::make('url')->label(static::trans('blocks.navigation.fields.url.label')),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                ]),
        ];
    }
}
