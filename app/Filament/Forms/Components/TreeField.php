<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Notify\Filament\Forms\Components;
=======
namespace Modules\UI\Filament\Forms\Components;
>>>>>>> 24eb066 (Lint)
=======
namespace Modules\UI\Filament\Forms\Components;
>>>>>>> laraxot/develop

use Filament\Forms\Components\Field;

class TreeField extends Field
{
    /**
     * Setup iniziale del componente.
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @var view-string $viewString */
        $viewString = 'ui::filament.forms.components.tree';
        $this->view($viewString);
    }
}
