<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Tables\Table;
>>>>>>> 19f3650 (.)
=======
use Filament\Tables\Table;
>>>>>>> 2dcb12a (.)

class GroupColumn extends Column
{
    public array $form = [];
<<<<<<< HEAD
=======

    /**
     * @var array<Column>
     */
    protected array $schema = [];
>>>>>>> 2dcb12a (.)

    protected string $view = 'ui::filament.tables.columns.group';

    public function getFields(): array
    {
        return $this->schema;
    }

    public function schema(array $form): self
    {
        $this->schema = $form;
<<<<<<< HEAD
=======

        return $this;
    }

    /**
     * Initialize the component.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Component initialization logic
    }

    /**
     * Ensure child columns are set to the same table to avoid
     * "The column [x] is not mounted to a table".
     */
    public function table(?Table $table): static
    {
        parent::table($table);

        if ($table !== null) {
            foreach ($this->schema as $child) {
                if ($child instanceof Column && $child->getTable() !== $table) {
                    $child->table($table);
                }
            }
        }
>>>>>>> 2dcb12a (.)

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
