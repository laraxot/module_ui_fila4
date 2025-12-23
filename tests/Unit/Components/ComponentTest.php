<?php

declare(strict_types=1);

use Illuminate\View\Component;

test('ui components can be rendered', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $component = new class() extends Component
    {
=======
    $component = new class extends Component {
>>>>>>> 161e28f (Lint)
=======
    $component = new class extends Component {
>>>>>>> a8fbb3e (.)
=======
    $component = new class extends Component {
>>>>>>> 24eb066 (Lint)
=======
    $component = new class extends Component {
>>>>>>> 61831e43 (.)
        public function render()
        {
            return view('ui::components.ui.button');
        }
    };

    expect($component)->toBeInstanceOf(Component::class);
});

test('ui button component has correct attributes', function () {
    $view = view('ui::components.ui.button', [
        'type' => 'primary',
        'size' => 'md',
        'disabled' => false,
    ]);

    expect($view->render())->toContain('btn')->toContain('btn-primary');
});

test('ui card component renders content', function () {
    $view = view('ui::components.ui.card', [
        'title' => 'Test Card',
        'content' => 'Test Content',
    ]);

    expect($view->render())->toContain('Test Card')->toContain('Test Content');
});
