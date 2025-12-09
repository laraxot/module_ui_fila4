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
<<<<<<< HEAD
    protected null|string $pollingInterval = null;
=======
    protected ?string $pollingInterval = null;
>>>>>>> 727968c (.)
=======
    protected null|string $pollingInterval = null;
>>>>>>> ef3c5fa (.)

    // danger, gray, info, primary, success or warning
    protected string $color = 'info';

<<<<<<< HEAD
<<<<<<< HEAD
    public function getDescription(): null|string
=======
    public function getDescription(): ?string
>>>>>>> 727968c (.)
=======
    public function getDescription(): null|string
>>>>>>> ef3c5fa (.)
    {
        return 'The number of blog posts published per month.';
    }

    // protected static ?string $maxHeight = '20px';

    protected function getData(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->maxHeight = $this->max_height;
=======
        static::$maxHeight = $this->max_height;
>>>>>>> 727968c (.)
=======
        $this->maxHeight = $this->max_height;
>>>>>>> ef3c5fa (.)

        return [
            'datasets' => [
                [
<<<<<<< HEAD
<<<<<<< HEAD
                    'label' => 'Blog posts created ' . $this->qid,
=======
                    'label' => 'Blog posts created '.$this->qid,
>>>>>>> 727968c (.)
=======
                    'label' => 'Blog posts created ' . $this->qid,
>>>>>>> ef3c5fa (.)
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
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
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
=======
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
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    }
}
