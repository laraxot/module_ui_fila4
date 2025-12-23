<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class BreadLink extends Component
{
    /**
     * Create a new component instance.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct() {}
=======
    public function __construct()
    {
    }
>>>>>>> 161e28f (Lint)
=======
    public function __construct()
    {
    }
>>>>>>> a8fbb3e (.)
=======
    public function __construct()
    {
    }
>>>>>>> 24eb066 (Lint)
=======
    public function __construct()
    {
    }
>>>>>>> laraxot/develop

    public function render(): View
    {
        /** @var view-string $view */
        $view = 'ui::components.bread-link';

        return view($view);
    }
}
