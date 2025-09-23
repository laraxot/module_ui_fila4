<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
<<<<<<< HEAD
=======
use Filament\Tables\Table;
>>>>>>> 19f3650 (.)

class GroupColumn extends Column
{
    public array $form = [];

    protected string $view = 'ui::filament.tables.columns.group';

    public function getFields(): array
    {
        return $this->schema;
    }

    public function schema(array $form): self
    {
        $this->schema = $form;

        return $this;
    }
<<<<<<< HEAD
=======

    /**
     * Ensure child columns are mounted to the same table to avoid
     * "The column [x] is not mounted to a table".
     */
    public function mount(Table $table): void
    {
        parent::mount($table);

        foreach ($this->schema as $child) {
            if ($child instanceof Column && null === $child->getTable()) {
                $child->mount($table);
            }
        }
    }
>>>>>>> 19f3650 (.)
}
