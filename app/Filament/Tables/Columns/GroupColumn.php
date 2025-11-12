<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;

class GroupColumn extends Column
{
    public array $form = [];

    /**
     * @var array<Column>
     */
    protected array $schema = [];

    protected string $view = 'ui::filament.tables.columns.group';

    /**
     * @return array<string, mixed>
     */
    public function getFields(): array
    {
        return $this->schema;
    }

    /**
     * @param array<int, Column> $form
     */
    public function schema(array $form): self
    {
        $this->schema = array_filter($form, function ($item) {
            return $item instanceof Column;
        });

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
}
