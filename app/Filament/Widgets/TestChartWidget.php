<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Support\RawJs;
use Filament\Widgets\ChartWidget;

class TestChartWidget extends ChartWidget
{
    public int $qid = 0;

    public string $max_height = '200px';

    public string $type = 'line';

    // protected static ?string $heading = 'Blog Posts';
<<<<<<< HEAD
    protected null|string $pollingInterval = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $pollingInterval = null;
=======
    protected ?string $pollingInterval = null;
>>>>>>> a12f125f4a (.)
=======
    protected null|string $pollingInterval = null;
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)

    // danger, gray, info, primary, success or warning
    protected string $color = 'info';

<<<<<<< HEAD
    public function getDescription(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function getDescription(): null|string
=======
    public function getDescription(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function getDescription(): null|string
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $pollingInterval = null;

    // danger, gray, info, primary, success or warning
    protected static string $color = 'info';

    public function getDescription(): ?string
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    {
        return 'The number of blog posts published per month.';
    }

    // protected static ?string $maxHeight = '20px';

    protected function getData(): array
    {
<<<<<<< HEAD
        $this->maxHeight = $this->max_height;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->maxHeight = $this->max_height;
=======
        static::$maxHeight = $this->max_height;
>>>>>>> a12f125f4a (.)
=======
        $this->maxHeight = $this->max_height;
>>>>>>> b93ef594b4 (.)
=======
        static::$maxHeight = $this->max_height;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

        return [
            'datasets' => [
                [
<<<<<<< HEAD
                    'label' => 'Blog posts created ' . $this->qid,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    'label' => 'Blog posts created ' . $this->qid,
=======
                    'label' => 'Blog posts created '.$this->qid,
>>>>>>> a12f125f4a (.)
=======
                    'label' => 'Blog posts created ' . $this->qid,
>>>>>>> b93ef594b4 (.)
=======
                    'label' => 'Blog posts created '.$this->qid,
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return $this->type;
    }

    protected function getOptions(): RawJs
    {
        return RawJs::make(<<<'JS'
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
            {
                scales: {
                    y: {
                        ticks: {
                            callback: (value) => '€' + value,
                        },
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
                    },
                },
            }
        JS);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        {
            scales: {
                y: {
                    ticks: {
                        callback: (value) => '€' + value,
                    },
                },
            },
        }
    JS);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                    },
                },
            }
        JS);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }
}
