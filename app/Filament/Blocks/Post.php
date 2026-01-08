<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
use Modules\Xot\Filament\Blocks\XotBaseBlock;
=======
<<<<<<< HEAD
>>>>>>> 6c0b3515 (.)

final class Post extends XotBaseBlock
=======
=======
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
namespace Modules\UI\Filament\Blocks;

use Modules\Xot\Filament\Blocks\XotBaseBlock;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
use Filament\Forms\Components\FileUpload;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)

final class Post extends XotBaseBlock
=======
namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

final class Post extends \Modules\Xot\Filament\Blocks\XotBaseBlock
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
            RichEditor::make('content')
                ->required()
                ->label(__('ui::blocks.post.fields.content.label'))
                ->helperText(__('ui::blocks.post.fields.content.helper_text')),
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
