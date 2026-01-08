<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\UI\Filament\Widgets\TestChartWidget;
>>>>>>> 6c0b3515 (.)
use Modules\UI\Filament\Widgets\StatWithIconWidget;
use Modules\UI\Filament\Widgets\TestChartWidget;
use Modules\UI\Filament\Widgets\TestWidget;
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
use Modules\UI\Filament\Widgets\TestChartWidget;
use Modules\UI\Filament\Widgets\StatWithIconWidget;
use Modules\UI\Filament\Widgets\TestWidget;
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use Filament\Pages\Page;
use Modules\UI\Filament\Widgets;
>>>>>>> 6c0b3515 (.)
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'ui::filament.pages.dashboard';
=======
<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'ui::filament.pages.dashboard';
=======
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'ui::filament.pages.dashboard';
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

>>>>>>> 6c0b3515 (.)
    protected function getHeaderWidgets(): array
    {
        $widgets = [
            [
<<<<<<< HEAD
                'class' => TestChartWidget::class,
=======
<<<<<<< HEAD
                'class' => TestChartWidget::class,
=======
                'class' => Widgets\TestChartWidget::class,
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                'properties' => [
                    'qid' => 5,
                    'max_height' => '900px',
                    'type' => 'pie',
                ],
            ],
            [
<<<<<<< HEAD
                'class' => TestChartWidget::class,
=======
<<<<<<< HEAD
                'class' => TestChartWidget::class,
=======
                'class' => Widgets\TestChartWidget::class,
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                'properties' => [
                    'qid' => 7,
                    'type' => 'bar',
                ],
            ],
            [
<<<<<<< HEAD
                'class' => TestChartWidget::class,
=======
<<<<<<< HEAD
                'class' => TestChartWidget::class,
=======
                'class' => Widgets\TestChartWidget::class,
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                'properties' => [
                    'qid' => 9,
                    'type' => 'bar',
                ],
            ],
        ];

        return [
            // Widgets\TestChartWidget::make(['qid' => 5]),
            // Widgets\TestChartWidget::make(['qid' => 6]),
            // Widgets\StatsOverviewWidget::class,

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
            StatWithIconWidget::make(['label' => 'Unique views', 'value' => '192.1k']),
            TestWidget::make(['widgets' => $widgets]),
            TestWidget::make(['widgets' => $widgets]),
            TestWidget::make(['widgets' => $widgets]),
            TestWidget::make(['widgets' => $widgets]),
<<<<<<< HEAD
=======
=======
            Widgets\StatWithIconWidget::make(['label' => 'Unique views', 'value' => '192.1k']),
            Widgets\TestWidget::make(['widgets' => $widgets]),
            Widgets\TestWidget::make(['widgets' => $widgets]),
            Widgets\TestWidget::make(['widgets' => $widgets]),
            Widgets\TestWidget::make(['widgets' => $widgets]),
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        ];
    }
}
