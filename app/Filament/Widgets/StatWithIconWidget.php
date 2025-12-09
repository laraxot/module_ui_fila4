<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
use Closure;
=======
<<<<<<< HEAD
use Closure;
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use Filament\Widgets\Widget as BaseWidget;
use Illuminate\Contracts\Support\Htmlable;

class StatWithIconWidget extends BaseWidget
{
<<<<<<< HEAD
    protected string $view = 'ui::filament.widgets.stat-with-icon';
=======
<<<<<<< HEAD
    protected string $view = 'ui::filament.widgets.stat-with-icon';
=======
    protected static string $view = 'ui::filament.widgets.stat-with-icon';
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

    protected string|Htmlable $label;

    /**
<<<<<<< HEAD
     * @var scalar|Htmlable|Closure
=======
<<<<<<< HEAD
     * @var scalar|Htmlable|Closure
=======
     * @var scalar|Htmlable|\Closure
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     */
    protected $value;

    protected function getData(): array
    {
        dddx($this->label);

        return [];
    }
}
