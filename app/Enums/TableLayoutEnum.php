<?php

declare(strict_types=1);

namespace Modules\UI\Enums;

use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\Layout\Component;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
=======
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
>>>>>>> 727968c (.)
=======
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> ef3c5fa (.)
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum for managing table layout types in Filament UI components.
 *
 * This enum provides standardized layout options for tables and data grids,
 * allowing users to toggle between list and grid views with appropriate
 * styling and column configurations.
 *
 * @see \Modules\UI\docs\table-layout-enum-usage.md
 */
enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 727968c (.)
=======

>>>>>>> ef3c5fa (.)
    case LIST = 'list';
    case GRID = 'grid';

    public static function init(): self
    {
        return self::LIST;
    }

    public function getLabel(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.label');
=======
        return $this->transClass(self::class, $this->value.'.label');
>>>>>>> 727968c (.)
=======
        return $this->transClass(self::class, $this->value . '.label');
>>>>>>> ef3c5fa (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class, $this->value.'.color');
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
        return $this->transClass(self::class, $this->value.'.icon');
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
=======
        return $this->transClass(self::class, $this->value.'.description');
>>>>>>> 727968c (.)
=======
        return $this->transClass(self::class, $this->value . '.description');
>>>>>>> ef3c5fa (.)
    }

    public function getTooltip(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.tooltip');
=======
        return $this->transClass(self::class, $this->value.'.tooltip');
>>>>>>> 727968c (.)
=======
        return $this->transClass(self::class, $this->value . '.tooltip');
>>>>>>> ef3c5fa (.)
    }

    public function getHelperText(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.helper_text');
=======
        return $this->transClass(self::class, $this->value.'.helper_text');
>>>>>>> 727968c (.)
=======
        return $this->transClass(self::class, $this->value . '.helper_text');
>>>>>>> ef3c5fa (.)
    }

    public function toggle(): self
    {
        return match ($this) {
            self::LIST => self::GRID,
            self::GRID => self::LIST,
        };
    }

    public function isGridLayout(): bool
    {
        return self::GRID === $this;
    }

    public function isListLayout(): bool
    {
        return self::LIST === $this;
    }

    /**
     * Get the responsive grid configuration for table content.
     *
     * Returns the number of columns for different screen sizes when using
     * grid layout, or null for list layout.
     *
     * @return array<string, int>|null Grid configuration or null for list layout
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTableContentGrid(): null|array
=======
    public function getTableContentGrid(): ?array
>>>>>>> 727968c (.)
=======
    public function getTableContentGrid(): null|array
>>>>>>> ef3c5fa (.)
    {
        return $this->isGridLayout()
            ? [
                'sm' => 1,
                'md' => 2,
                'lg' => 3,
                'xl' => 4,
                '2xl' => 5,
            ]
            : null;
    }

    /**
     * Get the appropriate table columns for this layout type.
     *
     * This method replaces the old debug_backtrace approach with explicit
     * parameter passing for better type safety and testability.
     *
     * @param array<Column|ColumnGroup|Component> $listColumns Columns for list layout
     * @param array<Column|ColumnGroup|Component> $gridColumns Columns for grid layout
     *
     * @return array<Column|ColumnGroup|Component>
     */
    public function getTableColumns(array $listColumns, array $gridColumns): array
    {
        return $this->isGridLayout() ? $gridColumns : $listColumns;
    }

    public static function getOptions(): array
    {
        return [
            self::LIST->value => self::LIST->getLabel(),
            self::GRID->value => self::GRID->getLabel(),
        ];
    }

    public function getContainerClasses(): string
    {
        return match ($this) {
            self::LIST => 'table-layout-list',
            self::GRID => 'table-layout-grid',
        };
    }
}
