<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
use Filament\Forms\Components\Radio;

final class RadioImage extends Radio
=======
use Modules\Xot\Filament\Forms\Components\XotBaseRadio;

final class RadioImage extends XotBaseRadio
>>>>>>> laraxot/develop
{
    /**
     * @var view-string
     */
    protected string $view = 'ui::filament.forms.components.radio-image';
}
