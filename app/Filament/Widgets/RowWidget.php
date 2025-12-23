<?php

declare(strict_types=1);

/**
 * @see https://github.com/awcodes/overlook/blob/2.x/src/Widgets/OverlookWidget.php
 */

namespace Modules\UI\Filament\Widgets;

use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

abstract class RowWidget extends XotBaseWidget
{
    public array $grid = [];

    public array $widgets = [];

<<<<<<< HEAD
    protected string $view = 'ui::filament.widgets.row';
=======
<<<<<<< HEAD
    protected string $view = 'ui::filament.widgets.row';
=======
<<<<<<< HEAD
    protected string $view = 'ui::filament.widgets.row';
=======
    protected static string $view = 'ui::filament.widgets.row';
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop

    protected int|string|array $columnSpan = 'full';

    /**
     * @return array<int|string, Component>
     */
    public function getFormSchema(): array
    {
        return [];
    }

    protected function getColumns(): int
    {
        return 3;
    }
<<<<<<< HEAD
<<<<<<< HEAD

    public function getFormSchema(): array
    {
        return [];
    }
=======
>>>>>>> 24eb066 (Lint)
=======
>>>>>>> laraxot/develop
}
