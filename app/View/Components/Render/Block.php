<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Render;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\View\Component;
use Illuminate\View\View;

/**
 * .
 */
final class Block extends Component
{
    /**
     * @param  array<string, mixed>  $block
     */
    public function __construct(
        public string $view,
        public array $block = [],
    ) {
    }

    public function render(): ViewFactory|View
    {
        if (! isset($this->block['type'])) {
            return view('ui::empty');
        }

        $view = $this->view;
        // PHPStan L10: $view è già string, no need for is_string check
        if (! view()->exists($view)) {
            $message = 'view not exists ['.$view.'] ! <pre>'.print_r($this->block, true).'</pre>';
            $view_params = [
                'title' => 'deprecated',
                'message' => $message,
            ];

            return view('ui::alert', $view_params);
        }
        $view_params = $this->block['data'] ?? [];

        // PHPStan L10: Type narrowing for view params
        if (! is_array($view_params)) {
            $view_params = [];
        }

        /** @var array<string, mixed> $view_params */
        return view($view, $view_params);
    }
}
