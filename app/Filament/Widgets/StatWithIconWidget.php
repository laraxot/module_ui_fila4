<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Closure;
=======
<<<<<<< HEAD
use Closure;
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use Filament\Widgets\Widget as BaseWidget;
>>>>>>> 6c0b3515 (.)
use Illuminate\Contracts\Support\Htmlable;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

final class StatWithIconWidget extends XotBaseWidget
{
<<<<<<< HEAD
    protected ?string $heading = 'Stat With Icon';
=======
<<<<<<< HEAD
    protected string $view = 'ui::filament.widgets.stat-with-icon';
=======
<<<<<<< HEAD
    protected string $view = 'ui::filament.widgets.stat-with-icon';
=======
    protected static string $view = 'ui::filament.widgets.stat-with-icon';
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)

    protected string|Htmlable $label;

    /**
<<<<<<< HEAD
     * @var scalar|Htmlable|\Closure
=======
<<<<<<< HEAD
     * @var scalar|Htmlable|Closure
=======
<<<<<<< HEAD
     * @var scalar|Htmlable|Closure
=======
     * @var scalar|Htmlable|\Closure
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
     */
    protected $value;

    public function getFormSchema(): array
    {
        return [];
    }

    protected function getData(): array
    {
        dddx($this->label);

        return [];
    }
}
