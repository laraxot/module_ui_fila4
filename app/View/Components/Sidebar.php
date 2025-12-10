<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
<<<<<<< HEAD
    public function __construct() {}
=======
    public function __construct()
    {
    }
>>>>>>> 161e28f (Lint)

    public function render(): View
    {
        /** @var view-string $view */
        $view = 'ui::components.sidebar';

        return view($view);
    }
}
