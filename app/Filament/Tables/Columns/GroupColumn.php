<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;

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
}
