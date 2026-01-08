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
<<<<<<< HEAD
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }
=======
    public function __construct(
        // public Post $article,
        // public bool $showAuthor = false,
        // public string $tpl = 'v1'
<<<<<<< HEAD
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
>>>>>>> a12f125f4a (.)
=======
    ) {}
>>>>>>> b93ef594b4 (.)
=======
    ) {
    }
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)

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
