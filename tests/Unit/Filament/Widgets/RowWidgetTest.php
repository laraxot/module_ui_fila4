<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;
use Modules\UI\Filament\Widgets\RowWidget;
use Tests\TestCase;
<<<<<<< HEAD
=======
=======
namespace Modules\UI\Tests\Unit\Filament\Widgets\RowWidgetTest;

=======
>>>>>>> b93ef594b4 (.)
namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Illuminate\Contracts\View\View;
use Filament\Widgets\Widget;
use Modules\UI\Filament\Widgets\RowWidget;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Tests\TestCase;
>>>>>>> b93ef594b4 (.)
=======
namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Modules\UI\Filament\Widgets\RowWidget;
use Tests\TestCase;
use Filament\Widgets\Widget;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

uses(TestCase::class);

beforeEach(function () {
    $this->widget = new RowWidget;
});

test('row widget extends filament widget', function () {
    expect($this->widget)->toBeInstanceOf(Widget::class);
});

test('row widget can be instantiated', function () {
    expect($this->widget)->toBeInstanceOf(RowWidget::class);
});

test('row widget has correct view', function () {
    expect($this->widget->getViewName())->toBe('ui::filament.widgets.row-widget');
});

test('row widget has proper properties', function () {
    expect($this->widget)->toHaveProperty('heading');
    expect($this->widget)->toHaveProperty('description');
});

test('row widget can render', function () {
    $view = $this->widget->render();
<<<<<<< HEAD

    expect($view)->toBeInstanceOf(View::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    expect($view)->toBeInstanceOf(View::class);
=======
    expect($view)->toBeInstanceOf(\Illuminate\Contracts\View\View::class);
>>>>>>> a12f125f4a (.)
=======

    expect($view)->toBeInstanceOf(View::class);
>>>>>>> b93ef594b4 (.)
=======
    
    expect($view)->toBeInstanceOf(\Illuminate\Contracts\View\View::class);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
});
