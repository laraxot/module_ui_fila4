<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use BackedEnum;
use Filament\Forms\Components\Radio;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
>>>>>>> laraxot/develop

class RadioBadge extends Radio
{
    protected string $view = 'ui::filament.forms.components.radio-badge';

    protected string $defaultColor = 'gray-200'; // gray-200

    protected string $selectedColor = 'blue-500'; // '#3b82f6'; // blue-500

    /**
     * Get enum value from string value.
     *
     * @return (\BackedEnum&HasColor&HasIcon)|null
     */
    public function getEnumValue(string $value): ?\BackedEnum
    {
<<<<<<< HEAD
        if (! is_string($this->options)) {
=======
        if (! \is_string($this->options)) {
>>>>>>> laraxot/develop
            return null;
        }
        if (! enum_exists($this->options)) {
            return null;
        }
        /** @var class-string<\UnitEnum> $enumClass */
        $enumClass = $this->options;

        // Verifica che sia un BackedEnum
        if (! is_subclass_of($enumClass, \BackedEnum::class)) {
            return null;
        }

        // Verifica che implementi le interfacce richieste
        if (! is_subclass_of($enumClass, HasColor::class) || ! is_subclass_of($enumClass, HasIcon::class)) {
            return null;
        }

        /** @var class-string<\BackedEnum&HasColor&HasIcon> $enumClass */
        $res = $enumClass::tryFrom($value);

        return $res;
    }

    public function getColorForOption(string $value): string
    {
<<<<<<< HEAD
        Assert::nullOrString($color = $this->getEnumValue($value)?->getColor());

        return $color ?? $this->selectedColor;
=======
        $enum = $this->getEnumValue($value);
        if ($enum instanceof HasColor) {
            $color = $enum->getColor();
            if (null === $color) {
                return $this->selectedColor;
            }

            if (is_array($color)) {
                $first = reset($color);

                return is_string($first) && '' !== $first ? $first : $this->selectedColor;
            }

            // PHPStan L10: $color è già verificato come non-array e non-null, quindi è string
            if ('' !== $color) {
                return $color;
            }

            return $this->selectedColor;
        }

        return $this->selectedColor;
>>>>>>> laraxot/develop
    }

    public function getIconForOption(string $value): ?string
    {
<<<<<<< HEAD
        $icon = $this->getEnumValue($value)?->getIcon();
=======
        $enum = $this->getEnumValue($value);
        if (! ($enum instanceof HasIcon)) {
            return null;
        }
        $icon = $enum->getIcon();
>>>>>>> laraxot/develop

        // getIcon() può restituire Htmlable|string|null, ma dobbiamo restituire solo string|null
        if (null === $icon) {
            return null;
        }

<<<<<<< HEAD
        if (is_string($icon)) {
            return $icon;
        }

        // Se è Htmlable, convertilo a string
        if (is_object($icon) && method_exists($icon, '__toString')) {
=======
        if (\is_string($icon)) {
            return $icon;
        }

        // PHPStan L10: $icon è BackedEnum|Htmlable dopo is_string(), quindi è sempre object
        // Se è Htmlable, convertilo a string
        if (method_exists($icon, '__toString')) {
>>>>>>> laraxot/develop
            return (string) $icon;
        }

        return null;
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
}
