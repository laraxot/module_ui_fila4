<?php

declare(strict_types=1);

use Illuminate\View\Component;

<<<<<<< HEAD
test('ui components can be rendered', function (): void {
=======
test('ui components can be rendered', function () {
>>>>>>> 3b732b6 (.)
    $component = new class extends Component
    {
        public function render()
        {
            return view('ui::components.ui.button');
        }
    };

    expect($component)->toBeInstanceOf(Component::class);
});

test('ui button component has correct attributes', function (): void {
    $view = view('ui::components.ui.button', [
        'type' => 'primary',
        'size' => 'md',
        'disabled' => false,
    ]);

    expect($view->render())->toContain('btn')->toContain('btn-primary');
});

test('ui card component renders content', function (): void {
    $view = view('ui::components.ui.card', [
        'title' => 'Test Card',
        'content' => 'Test Content',
    ]);

    expect($view->render())->toContain('Test Card')->toContain('Test Content');
});
