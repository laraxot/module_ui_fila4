<?php

declare(strict_types=1);

/**
 * @see https://github.com/awcodes/overlook/blob/2.x/src/Widgets/OverlookWidget.php
 */

namespace Modules\UI\Filament\Widgets;

use Modules\Xot\Filament\Widgets\XotBaseWidget;

final class RowWidget extends XotBaseWidget
{
    public array $grid = [];

    public array $widgets = [];

    protected string $view = 'ui::filament.widgets.row';

    protected int|string|array $columnSpan = 'full';

    public function getFormSchema(): array
    {
        return [];
    }

    protected function getColumns(): int
    {
        return 3;
    }
}
