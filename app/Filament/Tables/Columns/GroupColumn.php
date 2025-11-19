<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
use Modules\Xot\Filament\Tables\Columns\XotBaseColumn;

/**
 * Group Column - Display multiple table columns in a single grouped cell.
 *
 * This component allows grouping multiple columns into a single table cell,
 * rendering them vertically with labels. Useful for displaying related data
 * in a compact format.
 *
 * @example
 * ```php
 * GroupColumn::make('user_info')
 *     ->schema([
 *         TextColumn::make('name'),
 *         TextColumn::make('email'),
 *     ])
 * ```
 *
 * @see \Modules\Quaeris\Filament\Widgets\CompleteAnswers
 * @see \Modules\Quaeris\Filament\Widgets\OptOutWidget
 */
final class GroupColumn extends XotBaseColumn
{
    /**
     * Columns to display in the group.
     *
     * @var list<Column>
     */
    protected array $schema = [];

    protected string $view = 'ui::filament.tables.columns.group';

    /**
     * Get the columns to display in the group.
     *
     * @return list<Column>
     */
    public function getFields(): array
    {
        return $this->schema;
    }

    /**
     * Set the columns to display in the group.
     *
     * @param  array<Column>  $columns
     */
    public function schema(array $columns): static
    {
        // Filter and accept only Column instances (includes both Filament and XotBase columns)
        // $filtered = array_filter($columns, static fn (mixed $item): bool => $item instanceof Column);
        // $this->schema = array_values($filtered);
        $this->schema = $columns;

        return $this;
    }
}
