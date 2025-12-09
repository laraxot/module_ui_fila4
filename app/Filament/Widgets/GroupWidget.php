<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Override;

class GroupWidget extends XotBaseWidget
{
    public array $widgets = [];

    protected static ?string $pollingInterval = null;

    #[Override]
    /**
     * @return array<string, mixed>
     */
    public function getFormSchema(): array
    {
        return [];
    }
}
