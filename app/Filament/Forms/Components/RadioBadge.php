<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use BackedEnum;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Filament\Forms\Components\Radio;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
use Webmozart\Assert\Assert;
use Filament\Forms\Components\Radio;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Filament\Forms\Components\Radio;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

class RadioBadge extends Radio
{
    protected string $view = 'ui::filament.forms.components.radio-badge';
    protected string $defaultColor = 'gray-200'; // gray-200
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    protected string $selectedColor = 'blue-500'; //'#3b82f6'; // blue-500

    /**
     * Get enum value from string value
     *
     * @param string $value
     * @return (BackedEnum&HasColor&HasIcon)|null
     */
    public function getEnumValue(string $value): null|BackedEnum
    {
        if (!is_string($this->options)) {
            return null;
        }
        if (!enum_exists($this->options)) {
            return null;
        }
        $enumClass = $this->options;
        Assert::isInstanceOf($enumClass, BackedEnum::class);
        Assert::implementsInterface($enumClass, HasColor::class);
        Assert::implementsInterface($enumClass, HasIcon::class);
        $res = $enumClass::tryFrom($value);
        return $res;
    }

    public function getColorForOption(string $value): string
    {
        Assert::nullOrString($color = $this->getEnumValue($value)?->getColor());
        return $color ?? $this->selectedColor;
    }

    public function getIconForOption(string $value): null|string
    {
        $icon = $this->getEnumValue($value)?->getIcon();
        return $icon instanceof BackedEnum ? (string) $icon->value : $icon;
<<<<<<< HEAD
=======
=======
    protected string $selectedColor = 'blue-500';//'#3b82f6'; // blue-500
=======
    protected string $selectedColor = 'blue-500'; //'#3b82f6'; // blue-500
>>>>>>> b93ef594b4 (.)

    /**
     * Get enum value from string value
     *
     * @param string $value
     * @return (BackedEnum&HasColor&HasIcon)|null
     */
    public function getEnumValue(string $value): null|BackedEnum
    {
        if (!is_string($this->options)) {
            return null;
        }
        if (!enum_exists($this->options)) {
=======
    protected string $selectedColor = 'blue-500';//'#3b82f6'; // blue-500

    /**
     * Get enum value from string value
     * 
     * @param string $value
     * @return (BackedEnum&HasColor&HasIcon)|null
     */
    public function getEnumValue(string $value): ?BackedEnum
    {
        if (!is_string($this->options)){
            return null;
        }
        if (! enum_exists($this->options)) {
>>>>>>> origin/develop
            return null;
        }
        $enumClass = $this->options;
        Assert::isInstanceOf($enumClass, BackedEnum::class);
<<<<<<< HEAD
        Assert::implementsInterface($enumClass, HasColor::class);
        Assert::implementsInterface($enumClass, HasIcon::class);
        $res = $enumClass::tryFrom($value);
        return $res;
    }

    public function getColorForOption(string $value): string
    {
        Assert::nullOrString($color = $this->getEnumValue($value)?->getColor());
        return $color ?? $this->selectedColor;
    }

    public function getIconForOption(string $value): null|string
    {
<<<<<<< HEAD
        return $this->getEnumValue($value)?->getIcon();
>>>>>>> a12f125f4a (.)
=======
        $icon = $this->getEnumValue($value)?->getIcon();
        return $icon instanceof BackedEnum ? (string) $icon->value : $icon;
>>>>>>> b93ef594b4 (.)
=======
        Assert::implementsInterface($enumClass,HasColor::class);
        Assert::implementsInterface($enumClass,HasIcon::class);
        $res = $enumClass::tryFrom($value);
        return $res;
    }
   
    public function getColorForOption(string $value): string
    {
        Assert::nullOrString($color=$this->getEnumValue($value)?->getColor());
        return $color ?? $this->selectedColor;
    
    }

    
    public function getIconForOption(string $value): ?string
    {
        return $this->getEnumValue($value)?->getIcon();
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    public function defaultColor(string $color): static
    {
        $this->defaultColor = $color;
        return $this;
    }

    public function selectedColor(string $color): static
    {
        $this->selectedColor = $color;
        return $this;
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
