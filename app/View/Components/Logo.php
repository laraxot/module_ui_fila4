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
    ) {}
=======
    ) {
    }
>>>>>>> 161e28f (Lint)

    public function render(): View
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        return view($view);
    }
}
