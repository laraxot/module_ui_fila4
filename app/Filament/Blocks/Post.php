<?php

<<<<<<< HEAD
declare(strict_types=1);


namespace Modules\UI\Filament\Blocks;

use Modules\Xot\Filament\Blocks\XotBaseBlock;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
=======
namespace Modules\UI\Filament\Blocks;

use Modules\Xot\Filament\Blocks\XotBaseBlock;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
>>>>>>> 727968c (.)

final class Post extends XotBaseBlock
{
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->required()
                ->label(__('ui::blocks.post.fields.title.label'))
                ->helperText(__('ui::blocks.post.fields.title.helper_text')),
<<<<<<< HEAD
=======

>>>>>>> 727968c (.)
            RichEditor::make('content')
                ->required()
                ->label(__('ui::blocks.post.fields.content.label'))
                ->helperText(__('ui::blocks.post.fields.content.helper_text')),
<<<<<<< HEAD
=======

>>>>>>> 727968c (.)
            FileUpload::make('image')
                ->image()
                ->label(__('ui::blocks.post.fields.image.label'))
                ->helperText(__('ui::blocks.post.fields.image.helper_text')),
        ];
    }

    public static function getTitle(): string
    {
        return __('ui::blocks.post.title');
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> 727968c (.)
