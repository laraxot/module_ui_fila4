<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;
use Modules\UI\Filament\Widgets\RowWidget;
use Tests\TestCase;
<<<<<<< HEAD
=======
namespace Modules\UI\Tests\Unit\Filament\Widgets\RowWidgetTest;

namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Filament\Widgets\Widget;
use Modules\UI\Filament\Widgets\RowWidget;
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)

uses(TestCase::class);

beforeEach(function () {
<<<<<<< HEAD
    $this->widget = new RowWidget();
=======
    $this->widget = new RowWidget;
>>>>>>> 4f1ecbf (.)
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
<<<<<<< HEAD

    expect($view)->toBeInstanceOf(View::class);
=======
    expect($view)->toBeInstanceOf(\Illuminate\Contracts\View\View::class);
>>>>>>> 727968c (.)
=======

    expect($view)->toBeInstanceOf(View::class);
>>>>>>> ef3c5fa (.)
});
