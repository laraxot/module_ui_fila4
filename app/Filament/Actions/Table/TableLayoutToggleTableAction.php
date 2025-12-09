<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Table;

use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class TableLayoutToggleTableAction extends Action implements HasTableLayout
{
    use TableLayoutTrait;

    protected function setUp(): void
    {
        parent::setUp();

        $current = $this->getCurrentLayout();

<<<<<<< HEAD
        $this->label('Toggle Layout')
            ->tooltip($current->getLabel())
            ->color($current->getColor())
            ->icon($current->getIcon())
            ->action($this->toggleLayout(...));
=======
        $this
            ->label('Toggle Layout')
            ->tooltip($current->getLabel())
            ->color($current->getColor())
            ->icon($current->getIcon())
            ->action(fn ($livewire) => $this->toggleLayout($livewire));
>>>>>>> 727968c (.)
    }

    /**
     * @param  ListRecords|null  $livewire
     */
    protected function toggleLayout($livewire): void
    {
        $currentLayout = $this->getCurrentLayout();
        $newLayout = $currentLayout->toggle();
<<<<<<< HEAD

=======
        
>>>>>>> 727968c (.)
        $this->setTableLayout($newLayout);

        if ($livewire instanceof ListRecords) {
            $livewire->dispatch('$refresh');
        }
    }

    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
    }
}
