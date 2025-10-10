<?php

<<<<<<< HEAD
declare(strict_types=1);


namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
=======
namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
>>>>>>> 727968c (.)
use Modules\Xot\Filament\Blocks\XotBaseBlock;

final class Contact extends XotBaseBlock
{
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->required()
                ->label(__('ui::blocks.contact.fields.name.label'))
                ->helperText(__('ui::blocks.contact.fields.name.helper_text')),
<<<<<<< HEAD
=======

>>>>>>> 727968c (.)
            TextInput::make('email')
                ->email()
                ->required()
                ->label(__('ui::blocks.contact.fields.email.label'))
                ->helperText(__('ui::blocks.contact.fields.email.helper_text')),
<<<<<<< HEAD
=======

>>>>>>> 727968c (.)
            TextInput::make('phone')
                ->tel()
                ->label(__('ui::blocks.contact.fields.phone.label'))
                ->helperText(__('ui::blocks.contact.fields.phone.helper_text')),
<<<<<<< HEAD
=======

>>>>>>> 727968c (.)
            Textarea::make('message')
                ->required()
                ->label(__('ui::blocks.contact.fields.message.label'))
                ->helperText(__('ui::blocks.contact.fields.message.helper_text')),
        ];
    }

    public static function getTitle(): string
    {
        return __('ui::blocks.contact.title');
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> 727968c (.)
