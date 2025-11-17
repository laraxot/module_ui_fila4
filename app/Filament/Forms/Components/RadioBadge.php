<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use BackedEnum;
use Filament\Forms\Components\Radio;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Webmozart\Assert\Assert;

final class RadioBadge extends Radio
{
    protected string $view = 'ui::filament.forms.components.radio-badge';

    protected string $defaultColor = 'gray-200'; // gray-200

    protected string $selectedColor = 'blue-500'; // '#3b82f6'; // blue-500

    /**
     * Get enum value from string value
     *
     * @return (BackedEnum&HasColor&HasIcon)|null
     */
    public function getEnumValue(string $value): ?BackedEnum
    {
        if (! is_string($this->options)) {
            return null;
        }
        if (! enum_exists($this->options)) {
            return null;
        }
        $enumClass = $this->options;

        // Check if the class is a BackedEnum
        if (! is_subclass_of($enumClass, BackedEnum::class)) {
            return null;
        }

        // Check if the class implements the required interfaces
        if (! is_subclass_of($enumClass, HasColor::class) || ! is_subclass_of($enumClass, HasIcon::class)) {
            return null;
        }

        $res = $enumClass::tryFrom($value);

        // Ensure the result implements the required interfaces
        if ($res instanceof BackedEnum && $res instanceof HasColor && $res instanceof HasIcon) {
            return $res;
        }

        return null;
    }

    public function getColorForOption(string $value): string
    {
        Assert::nullOrString($color = $this->getEnumValue($value)?->getColor());

        return $color ?? $this->selectedColor;
    }

    public function getIconForOption(string $value): \Illuminate\Contracts\Support\Htmlable|string|null
    {
        $icon = $this->getEnumValue($value)?->getIcon();

        return $icon instanceof BackedEnum ? (string) $icon->value : $icon;
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
