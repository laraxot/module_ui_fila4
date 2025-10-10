<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> 727968c (.)
=======
declare(strict_types=1);


>>>>>>> ef3c5fa (.)
namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\RichEditor;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

final class Page extends XotBaseBlock
{
    public static function getFormSchema(): array
    {
        return [
            RichEditor::make('content')
                ->required()
                ->label(__('ui::blocks.page.fields.content.label'))
                ->helperText(__('ui::blocks.page.fields.content.helper_text')),
        ];
    }

    public static function getTitle(): string
    {
        return __('ui::blocks.page.title');
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> 727968c (.)
=======
}
>>>>>>> ef3c5fa (.)
