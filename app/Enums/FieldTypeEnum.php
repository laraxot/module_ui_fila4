<?php

declare(strict_types=1);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 727968c (.)
=======

>>>>>>> ef3c5fa (.)
/**
 * @see https://filamentphp.com/docs/3.x/forms/fields/types
 * @see https://github.com/Valourite/form-builder/blob/v1.x/src/Filament/Enums/FieldType.php
 */

namespace Modules\UI\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Defines the different types of appointments in the system.
 *
<<<<<<< HEAD
=======
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;


/**
 * Defines the different types of appointments in the system.
 * 
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
 * @method static self fromName(string $name)
 * @method static self fromValue(string $value)
 * @method static self tryFromName(string $name)
 * @method static self tryFromValue(string $value)
 * @method static self[] cases()
 */
enum FieldTypeEnum: string implements HasLabel, HasIcon, HasColor
{
    use TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)

    case TEXT = 'text';
    //case NUMBER   = 'number';
    case EMAIL = 'email';
    //case PASSWORD = 'password';
    case TEXTAREA = 'textarea';
    case SELECT = 'select';
    case RADIO = 'radio';
    case CHECKBOX = 'checkbox';
    case DATE = 'date';
    case TIME = 'time';
    case DATETIME = 'datetime';

    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
<<<<<<< HEAD
=======
    case TEXT     = 'text';
    //case NUMBER   = 'number';
    case EMAIL    = 'email';
    //case PASSWORD = 'password';
    case TEXTAREA = 'textarea';
    case SELECT   = 'select';
    case RADIO    = 'radio';
    case CHECKBOX = 'checkbox';
    case DATE     = 'date';
    case TIME     = 'time';
    case DATETIME = 'datetime';


    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class,$this->value.'.color');

>>>>>>> 727968c (.)
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> ef3c5fa (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.icon');
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> 727968c (.)
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> ef3c5fa (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.description');
    }
}
=======
        return $this->transClass(self::class,$this->value.'.description');
    }
    

}
>>>>>>> 727968c (.)
=======
        return $this->transClass(self::class, $this->value . '.description');
    }
}
>>>>>>> ef3c5fa (.)
