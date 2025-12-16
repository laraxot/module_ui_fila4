<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Modules\Xot\Filament\Widgets\XotBaseWidget;

final class GroupWidget extends XotBaseWidget
{
    protected static ?string $heading = 'Group Widget';

<<<<<<< HEAD
    #[\Override]
=======
    protected static ?string $pollingInterval = null;

    #[Override]
>>>>>>> 4f1ecbf (.)
    public function getFormSchema(): array
    {
        return [];
    }
}
