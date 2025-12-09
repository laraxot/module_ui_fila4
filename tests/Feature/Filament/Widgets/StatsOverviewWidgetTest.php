<?php

declare(strict_types=1);

use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\UI\Filament\Widgets\StatsOverviewWidget;
use Tests\TestCase;

uses(TestCase::class);

beforeEach(function (): void {
    $this->widget = new StatsOverviewWidget;
});

test('stats overview widget extends correct base class', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget)->toBeInstanceOf(\Filament\Widgets\StatsOverviewWidget::class);
});

test('stats overview widget has correct namespace', function (): void {
    expect(StatsOverviewWidget::class)->toContain('Modules\UI\Filament\Widgets');
});

test('stats overview widget has getStats method', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget)->toHaveMethod('getStats');
});

test('stats overview widget returns correct stats', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $stats = $this->widget->getStats();

    expect($stats)->toBeArray();
    expect($stats)->toHaveCount(3);

    // Check first stat
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($stats[0])->toBeInstanceOf(Stat::class);
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($stats[0]->getLabel())->toBe('Unique views');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($stats[0]->getValue())->toBe('192.1k');

    // Check second stat
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($stats[1])->toBeInstanceOf(Stat::class);
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($stats[1]->getLabel())->toBe('Bounce rate');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($stats[1]->getValue())->toBe('21%');

    // Check third stat
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($stats[2])->toBeInstanceOf(Stat::class);
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($stats[2]->getLabel())->toBe('Average time on page');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($stats[2]->getValue())->toBe('3:12');
});

test('stats overview widget stats are instances of Stat class', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $stats = $this->widget->getStats();

    foreach ($stats as $stat) {
        expect($stat)->toBeInstanceOf(Stat::class);
    }
});

test('stats overview widget can be instantiated', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    expect($this->widget)->toBeInstanceOf(StatsOverviewWidget::class);
});

test('stats overview widget has correct strict types declaration', function (): void {
    $reflection = new ReflectionClass(StatsOverviewWidget::class);
    /** @phpstan-ignore-next-line method.nonObject */
    $filename = $reflection->getFileName();

    if ($filename) {
        $content = file_get_contents($filename);
        expect($content)->toContain('declare(strict_types=1);');
    }
});

test('stats overview widget getStats method is protected', function (): void {
    $reflection = new ReflectionClass(StatsOverviewWidget::class);
    /** @phpstan-ignore-next-line method.nonObject */
    $getStatsMethod = $reflection->getMethod('getStats');

    expect($getStatsMethod->isProtected())->toBeTrue();
});

test('stats overview widget getStats method has correct return type', function (): void {
    $reflection = new ReflectionClass(StatsOverviewWidget::class);
    /** @phpstan-ignore-next-line method.nonObject */
    $getStatsMethod = $reflection->getMethod('getStats');

    expect($getStatsMethod->getReturnType()->getName())->toBe('array');
});

test('stats overview widget has correct use statements', function (): void {
    $reflection = new ReflectionClass(StatsOverviewWidget::class);
    /** @phpstan-ignore-next-line method.nonObject */
    $filename = $reflection->getFileName();

    if ($filename) {
        $content = file_get_contents($filename);
        expect($content)->toContain('use Filament\Widgets\StatsOverviewWidget as BaseWidget;');
        expect($content)->toContain('use Filament\Widgets\StatsOverviewWidget\Stat;');
    }
});
