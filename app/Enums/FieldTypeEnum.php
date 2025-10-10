<?php

declare(strict_types=1);
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
/**
 * @see https://filamentphp.com/docs/3.x/forms/fields/types
 * @see https://github.com/Valourite/form-builder/blob/v1.x/src/Filament/Enums/FieldType.php
 */

namespace Modules\UI\Enums;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Defines the different types of appointments in the system.
 *
<<<<<<< HEAD
=======
=======
use Filament\Support\Contracts\HasIcon;
=======
>>>>>>> b93ef594b4 (.)
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Defines the different types of appointments in the system.
<<<<<<< HEAD
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;


/**
 * Defines the different types of appointments in the system.
 * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

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
=======
    case TEXT     = 'text';
=======

    case TEXT = 'text';
>>>>>>> b93ef594b4 (.)
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
<<<<<<< HEAD
        return $this->transClass(self::class,$this->value.'.label');
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.label');
>>>>>>> b93ef594b4 (.)
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
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.color');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class,$this->value.'.color');

>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> b93ef594b4 (.)
=======
        return $this->transClass(self::class,$this->value.'.color');

>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.icon');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.icon');
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> b93ef594b4 (.)
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.description');
    }
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.description');
    }
}
=======
=======
>>>>>>> origin/develop
        return $this->transClass(self::class,$this->value.'.description');
    }
    

<<<<<<< HEAD
}
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.description');
    }
}
>>>>>>> b93ef594b4 (.)
=======
}
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
