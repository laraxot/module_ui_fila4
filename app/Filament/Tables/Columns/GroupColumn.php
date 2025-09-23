<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
<<<<<<< HEAD
use Filament\Tables\Table;

class GroupColumn extends Column
{
    public array $form = [];

    /**
     * @var array<Column>
     */
    protected array $schema = [];
=======

class GroupColumn extends Column
{
    public array $schema = [];
>>>>>>> e3274ea (.)

    protected string $view = 'ui::filament.tables.columns.group';

    public function getFields(): array
    {
        return $this->schema;
    }

<<<<<<< HEAD
    public function schema(array $form): self
    {
        $this->schema = $form;

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
=======
    public function schema(array $schema): self
    {
        $this->schema = $schema;
>>>>>>> e3274ea (.)

        return $this;
    }
}
