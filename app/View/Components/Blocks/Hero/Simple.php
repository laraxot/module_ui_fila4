<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Blocks\Hero;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component as ViewComponent;

class Simple extends ViewComponent
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
>>>>>>> 61831e43 (.)

    public function render(): View
    {
        /**
         * @phpstan-var view-string $view
         */
        $view = 'ui::components.blocks.hero.simple';

        return view($view);
    }
}
