<?php

declare(strict_types=1);

/**
 * @see https://github.com/awcodes/overlook/blob/2.x/src/Widgets/OverlookWidget.php
 */

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

abstract class RowWidget extends XotBaseWidget
=======
use Filament\Widgets\Widget;

class RowWidget extends Widget
>>>>>>> d7dfa0b6 (.)
{
    public array $grid = [];

    public array $widgets = [];

    protected string $view = 'ui::filament.widgets.row';

    protected int|string|array $columnSpan = 'full';

<<<<<<< HEAD
    /**
     * @return array<int|string, Component>
     */
    public function getFormSchema(): array
    {
        return [];
    }

=======
>>>>>>> d7dfa0b6 (.)
    protected function getColumns(): int
    {
        return 3;
    }
}
