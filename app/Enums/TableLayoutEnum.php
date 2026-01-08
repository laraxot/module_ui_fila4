<?php

declare(strict_types=1);

namespace Modules\UI\Enums;

<<<<<<< HEAD
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\Layout\Component;
>>>>>>> 6c0b3515 (.)
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
=======
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
=======
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD

=======
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
>>>>>>> laraxot/develop
    case LIST = 'list';
    case GRID = 'grid';

    public static function init(): self
    {
        return self::LIST;
    }

    public function getLabel(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.label');
=======
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.label');
=======
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.label');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.label');
=======
        return $this->transClass(self::class, $this->value.'.label');
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.label');
>>>>>>> b93ef594b4 (.)
=======
        return $this->transClass(self::class, $this->value.'.label');
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
    }

    public function getColor(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.color');
=======
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.color');
=======
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.color');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class, $this->value.'.color');
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> b93ef594b4 (.)
=======
        return $this->transClass(self::class, $this->value.'.color');
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.icon');
=======
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.icon');
=======
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.icon');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.icon');
=======
        return $this->transClass(self::class, $this->value.'.icon');
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> b93ef594b4 (.)
=======
        return $this->transClass(self::class, $this->value.'.icon');
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.description');
=======
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.description');
=======
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.description');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.description');
=======
        return $this->transClass(self::class, $this->value.'.description');
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.description');
>>>>>>> b93ef594b4 (.)
=======
        return $this->transClass(self::class, $this->value.'.description');
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
    }

    public function getTooltip(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.tooltip');
=======
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.tooltip');
=======
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.tooltip');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.tooltip');
=======
        return $this->transClass(self::class, $this->value.'.tooltip');
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.tooltip');
>>>>>>> b93ef594b4 (.)
=======
        return $this->transClass(self::class, $this->value.'.tooltip');
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
    }

    public function getHelperText(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.helper_text');
=======
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.helper_text');
=======
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.helper_text');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.helper_text');
=======
        return $this->transClass(self::class, $this->value.'.helper_text');
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.helper_text');
>>>>>>> b93ef594b4 (.)
=======
        return $this->transClass(self::class, $this->value.'.helper_text');
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
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
    public function getTableContentGrid(): ?array
=======
<<<<<<< HEAD
    public function getTableContentGrid(): ?array
=======
<<<<<<< HEAD
    public function getTableContentGrid(): null|array
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTableContentGrid(): null|array
=======
    public function getTableContentGrid(): ?array
>>>>>>> a12f125f4a (.)
=======
    public function getTableContentGrid(): null|array
>>>>>>> b93ef594b4 (.)
=======
    public function getTableContentGrid(): ?array
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
     * @param array<Column|ColumnGroup|Component> $listColumns Columns for list layout
     * @param array<Column|ColumnGroup|Component> $gridColumns Columns for grid layout
     * @param array<Column|ColumnGroup|Component> $listColumns Columns for list layout
     * @param array<Column|ColumnGroup|Component> $gridColumns Columns for grid layout
     *
     * @return array<Column|ColumnGroup|Component>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
     * @param array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component> $listColumns Columns for list layout
     * @param array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component> $gridColumns Columns for grid layout
     *
     * @return array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component>
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
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
