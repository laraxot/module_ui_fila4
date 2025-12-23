<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * .
 */
final class Logo extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $tpl = '',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
>>>>>>> 161e28f (Lint)
=======
    ) {
    }
>>>>>>> a8fbb3e (.)
=======
    ) {
    }
>>>>>>> 24eb066 (Lint)
=======
    ) {
    }
>>>>>>> 61831e43 (.)

    public function render(): View
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        return view($view);
    }
}
