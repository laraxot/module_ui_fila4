<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Illuminate\Contracts\View\View;
use Filament\Widgets\Widget;
use Modules\UI\Filament\Widgets\StatWithIconWidget;
use Tests\TestCase;
<<<<<<< HEAD
=======
=======
namespace Modules\UI\Tests\Unit\Filament\Widgets\StatWithIconWidgetTest;

namespace Modules\UI\Tests\Unit\Filament\Widgets;


>>>>>>> a12f125f4a (.)
=======
namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Illuminate\Contracts\View\View;
use Filament\Widgets\Widget;
use Modules\UI\Filament\Widgets\StatWithIconWidget;
use Tests\TestCase;
>>>>>>> b93ef594b4 (.)
=======
namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Modules\UI\Filament\Widgets\StatWithIconWidget;
use Tests\TestCase;
use Filament\Widgets\Widget;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

uses(TestCase::class);

beforeEach(function () {
<<<<<<< HEAD
    $this->widget = new StatWithIconWidget();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $this->widget = new StatWithIconWidget();
=======
$this->widget = new StatWithIconWidget();
>>>>>>> a12f125f4a (.)
=======
    $this->widget = new StatWithIconWidget();
>>>>>>> b93ef594b4 (.)
=======
    $this->widget = new StatWithIconWidget();
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
});

test('stat with icon widget extends filament widget', function () {
    expect($this->widget)->toBeInstanceOf(Widget::class);
});

test('stat with icon widget can be instantiated', function () {
    expect($this->widget)->toBeInstanceOf(StatWithIconWidget::class);
});

test('stat with icon widget has correct view', function () {
    expect($this->widget->getViewName())->toBe('ui::filament.widgets.stat-with-icon-widget');
});

test('stat with icon widget has proper properties', function () {
    expect($this->widget)->toHaveProperty('stat');
    expect($this->widget)->toHaveProperty('icon');
    expect($this->widget)->toHaveProperty('description');
});

test('stat with icon widget can render', function () {
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

test('stat with icon widget has default values', function () {
    expect($this->widget->stat)->toBe('0');
    expect($this->widget->icon)->toBe('heroicon-o-chart-bar');
    expect($this->widget->description)->toBe('Statistica');
});
