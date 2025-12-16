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
    ) {
    }
>>>>>>> 727968c (.)
>>>>>>> 8d182bf (.)

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
