<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class HeroWidget extends BaseWidget
{
    protected ?string $heading = 'Hero Widget';

    // PHPStan L10: Protected per type safety - public properties sono viste come mixed
    protected string $title = '';

<<<<<<< HEAD
    protected string $icon = '';
=======
    public string $title = 'no-set';

    public string $icon = '';

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
=======
    protected static ?string $pollingInterval = null;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)

    public function getColumns(): int
    {
        return 8;
    }

    protected function getStats(): array
    {
        return [
<<<<<<< HEAD
            Stat::make('', $this->title ?? '')->icon($this->icon ?? ''),
=======
<<<<<<< HEAD
            Stat::make('', $this->title)->icon($this->icon),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Stat::make('', $this->title)->icon($this->icon),
=======
            Stat::make('', $this->title)
                ->icon($this->icon),
>>>>>>> a12f125f4a (.)
=======
            Stat::make('', $this->title)->icon($this->icon),
>>>>>>> b93ef594b4 (.)
=======
            Stat::make('', $this->title)
                ->icon($this->icon),
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
        ];
    }
}
