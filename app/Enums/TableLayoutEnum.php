<?php

declare(strict_types=1);

namespace Modules\UI\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\Layout\Component;
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

    case LIST = 'list';
    case GRID = 'grid';

    public static function init(): self
    {
        return self::LIST;
    }

    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value.'.label');
    }

    public function getColor(): string
    {
        return $this->transClass(self::class, $this->value.'.color');
    }

    public function getIcon(): string
    {
        return $this->transClass(self::class, $this->value.'.icon');
    }

    public function getDescription(): string
    {
        return $this->transClass(self::class, $this->value.'.description');
    }

    public function getTooltip(): string
    {
        return $this->transClass(self::class, $this->value.'.tooltip');
    }

    public function getHelperText(): string
    {
        return $this->transClass(self::class, $this->value.'.helper_text');
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this === self::GRID;
=======
        return self::GRID === $this;
>>>>>>> 161e28f (Lint)
=======
        return self::GRID === $this;
>>>>>>> a8fbb3e (.)
=======
        return self::GRID === $this;
>>>>>>> 24eb066 (Lint)
=======
        return self::GRID === $this;
>>>>>>> 61831e43 (.)
=======
        return self::GRID === $this;
>>>>>>> laraxot/develop
    }

    public function isListLayout(): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this === self::LIST;
=======
        return self::LIST === $this;
>>>>>>> 161e28f (Lint)
=======
        return self::LIST === $this;
>>>>>>> a8fbb3e (.)
=======
        return self::LIST === $this;
>>>>>>> 24eb066 (Lint)
=======
        return self::LIST === $this;
>>>>>>> 61831e43 (.)
=======
        return self::LIST === $this;
>>>>>>> laraxot/develop
    }

    /**
     * Get the responsive grid configuration for table content.
     *
     * Returns the number of columns for different screen sizes when using
     * grid layout, or null for list layout.
     *
     * @return array<string, int>|null Grid configuration or null for list layout
     */
    public function getTableContentGrid(): ?array
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<Column|ColumnGroup|Component>  $listColumns  Columns for list layout
     * @param  array<Column|ColumnGroup|Component>  $gridColumns  Columns for grid layout
=======
     * @param array<Column|ColumnGroup|Component> $listColumns Columns for list layout
     * @param array<Column|ColumnGroup|Component> $gridColumns Columns for grid layout
     *
>>>>>>> 161e28f (Lint)
=======
=======
>>>>>>> 24eb066 (Lint)
=======
>>>>>>> 61831e43 (.)
=======
>>>>>>> laraxot/develop
     * @param array<Column|ColumnGroup|Component> $listColumns Columns for list layout
     * @param array<Column|ColumnGroup|Component> $gridColumns Columns for grid layout
     * @param array<Column|ColumnGroup|Component> $listColumns Columns for list layout
     * @param array<Column|ColumnGroup|Component> $gridColumns Columns for grid layout
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
=======
>>>>>>> 61831e43 (.)
=======
>>>>>>> laraxot/develop
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
