<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;
use Modules\UI\Filament\Widgets\RowWidget;
use Tests\TestCase;

uses(TestCase::class);

beforeEach(function (): void {
    $this->widget = new RowWidget;
});

test('row widget extends filament widget', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget)->toBeInstanceOf(Widget::class);
});

test('row widget can be instantiated', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget)->toBeInstanceOf(RowWidget::class);
});

test('row widget has correct view', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget->getViewName())->toBe('ui::filament.widgets.row-widget');
});

test('row widget has proper properties', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget)->toHaveProperty('heading');
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget)->toHaveProperty('description');
});

test('row widget can render', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $view = $this->widget->render();

    expect($view)->toBeInstanceOf(View::class);
});
