<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Page;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

final class WithSidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
<<<<<<< HEAD
        public string $tpl = '',
    ) {
    }
=======
        // public Post $article,
        // public bool $showAuthor = false,
        public string $tpl = 'v1',
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
        $view = app(GetViewAction::class)->execute($this->tpl);

        $view_params = [];

        return view($view, $view_params);
    }
}
