<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class HeroWidget extends BaseWidget
{
    // use InteractsWithPageFilters;

    // protected static ?int $sort = 0;

    public string $title = 'no-set';

    public string $icon = '';

<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $pollingInterval = null;
=======
    protected ?string $pollingInterval = null;
>>>>>>> 727968c (.)
=======
    protected null|string $pollingInterval = null;
>>>>>>> ef3c5fa (.)

    public function getColumns(): int
    {
        return 8;
    }

    protected function getStats(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            Stat::make('', $this->title)->icon($this->icon),
=======
            Stat::make('', $this->title)
                ->icon($this->icon),
>>>>>>> 727968c (.)
=======
            Stat::make('', $this->title)->icon($this->icon),
>>>>>>> ef3c5fa (.)
        ];
    }
}
