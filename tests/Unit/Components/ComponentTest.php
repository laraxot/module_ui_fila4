<?php

declare(strict_types=1);

use Illuminate\View\Component;

test('ui components can be rendered', function () {
    $component = new class extends Component {
        public function render()
        {
            return view('ui::components.ui.button');
        }
    };
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    expect($component)->toBeInstanceOf(Component::class);
});

test('ui button component has correct attributes', function () {
    $view = view('ui::components.ui.button', [
        'type' => 'primary',
        'size' => 'md',
        'disabled' => false,
    ]);
<<<<<<< HEAD

    expect($view->render())->toContain('btn')->toContain('btn-primary');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    expect($view->render())->toContain('btn')->toContain('btn-primary');
=======
=======
>>>>>>> origin/develop
    
    expect($view->render())
        ->toContain('btn')
        ->toContain('btn-primary');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    expect($view->render())->toContain('btn')->toContain('btn-primary');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
});

test('ui card component renders content', function () {
    $view = view('ui::components.ui.card', [
        'title' => 'Test Card',
        'content' => 'Test Content',
    ]);
<<<<<<< HEAD

    expect($view->render())->toContain('Test Card')->toContain('Test Content');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    expect($view->render())->toContain('Test Card')->toContain('Test Content');
=======
=======
>>>>>>> origin/develop
    
    expect($view->render())
        ->toContain('Test Card')
        ->toContain('Test Content');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    expect($view->render())->toContain('Test Card')->toContain('Test Content');
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
});
