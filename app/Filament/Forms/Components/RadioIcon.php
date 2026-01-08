<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\UI\Filament\Forms\Components;

use Filament\Forms\Components\Radio;

final class RadioIcon extends Radio
=======

namespace Modules\UI\Filament\Forms\Components;

use Modules\Xot\Filament\Forms\Components\XotBaseRadio;

final class RadioIcon extends XotBaseRadio
>>>>>>> laraxot/develop
{
    /**
     * @var view-string
     */
    protected string $view = 'ui::filament.forms.components.radio-icon';
}
