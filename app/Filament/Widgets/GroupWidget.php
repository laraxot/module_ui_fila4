<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> 727968c (.)
=======
use Override;
>>>>>>> ef3c5fa (.)
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class GroupWidget extends XotBaseWidget
{
    public array $widgets = [];

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
    protected static null|string $pollingInterval = null;

    #[Override]
    public function getFormSchema(): array
    {
        return [];
    }
<<<<<<< HEAD
=======
    protected static ?string $pollingInterval = null;

    public function getFormSchema() :array {
        return [];
    }

>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
}
