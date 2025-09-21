<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Table;

<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
=======
<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
=======
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\Action;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use Illuminate\Support\Facades\Session;
use Modules\UI\Enums\TableLayout;
use Modules\UI\Traits\TableLayoutTrait;

class TableLayoutToggleTableAction extends Action
{
    use TableLayoutTrait;

    protected function setUp(): void
    {
        parent::setUp();

        $current = $this->getCurrentLayout();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
        $this->label('Toggle Layout')
            ->tooltip($current->getLabel())
            ->color($current->getColor())
            ->icon($current->getIcon())
            ->action($this->toggleLayout(...));
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this
            ->label('Toggle Layout')
            ->tooltip($current->getLabel())
            ->color($current->getColor())
            ->icon($current->getIcon())
            ->action(fn ($livewire) => $this->toggleLayout($livewire));
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $this->label('Toggle Layout')
            ->tooltip($current->getLabel())
            ->color($current->getColor())
            ->icon($current->getIcon())
            ->action($this->toggleLayout(...));
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
    }

    /**
     * @param ListRecords|null $livewire
<<<<<<< HEAD
=======
=======
    }

    /**
     * @param \Filament\Resources\Pages\ListRecords|null $livewire
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     */
    protected function toggleLayout($livewire): void
    {
        $currentLayout = $this->getCurrentLayout();
        $newLayout = $currentLayout->toggle();
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
        $this->setTableLayout($newLayout);

        if ($livewire instanceof ListRecords) {
            $livewire->dispatch('$refresh');
        }
    }

    protected function getCurrentLayout(): TableLayout
    {
        return $this->getTableLayout();
    }

    public static function getDefaultName(): string
    {
        return 'table_layout_toggle';
    }
}
