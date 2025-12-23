<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Notify\Filament\Forms\Components;
=======
namespace Modules\UI\Filament\Forms\Components;
>>>>>>> 24eb066 (Lint)

use Filament\Forms\Components\ViewField;

// use Filament\Support\Components\ViewComponent;

final class Children extends ViewField
{
    protected string $view = 'ui::filament.forms.components.navigation-builder';

    /*
<<<<<<< HEAD
     * public static function make($livewire): static
     * {
     * $result = app(static::class, ['livewire' => $livewire]);
     * $result->configure();
     * return $result;
     * }
     */
=======
    public static function make($livewire): static
    {
        $result = app(static::class, ['livewire' => $livewire]);
        $result->configure();
        return $result;
    }
    */
>>>>>>> 727968c (.)
}
