<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class BreadLink extends Component
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/develop
    /**
     * Create a new component instance.
     */
    public function __construct()
<<<<<<< HEAD
=======
=======
    public function __construct(
        // public Post $article,
        // public bool $showAuthor = false,
        public string $tpl = 'v1',
    ) {}

    public function render(): Renderable
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
    {
    }

    public function render(): View
    {
        /** @var view-string $view */
        $view = 'ui::components.bread-link';

        return view($view);
    }
}
