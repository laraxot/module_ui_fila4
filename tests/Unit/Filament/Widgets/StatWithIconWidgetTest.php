<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;
use Modules\UI\Filament\Widgets\StatWithIconWidget;
use Tests\TestCase;

uses(TestCase::class);

beforeEach(function (): void {
    $this->widget = new StatWithIconWidget;
});

test('stat with icon widget extends filament widget', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget)->toBeInstanceOf(Widget::class);
});

test('stat with icon widget can be instantiated', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget)->toBeInstanceOf(StatWithIconWidget::class);
});

test('stat with icon widget has correct view', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget->getViewName())->toBe('ui::filament.widgets.stat-with-icon-widget');
});

test('stat with icon widget has proper properties', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget)->toHaveProperty('stat');
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget)->toHaveProperty('icon');
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget)->toHaveProperty('description');
});

test('stat with icon widget can render', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $view = $this->widget->render();

    expect($view)->toBeInstanceOf(View::class);
});

test('stat with icon widget has default values', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget->stat)->toBe('0');
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget->icon)->toBe('heroicon-o-chart-bar');
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget->description)->toBe('Statistica');
});
