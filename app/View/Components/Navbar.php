<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * .
 */
final class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
<<<<<<< HEAD
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
=======
    public function __construct()
    {
    }
>>>>>>> laraxot/develop

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();
        dddx($view);
        $view_params = [];

        return view($view, $view_params);
    }
}
