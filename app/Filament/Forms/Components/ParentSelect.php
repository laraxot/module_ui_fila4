<?php

declare(strict_types=1);

/**
 * @see RyanChandler\FilamentNavigation\Filament\Fields\NavigationSelect;
 * @see https://github.com/ryangjchandler/filament-navigation
 */

namespace Modules\UI\Filament\Forms\Components;

use Filament\Forms\Components\Select;

// use RyanChandler\FilamentNavigation\Models\Navigation;

class ParentSelect extends Select
{
    protected string $optionValueProperty = 'id';

    protected function setUp(): void
    {
        parent::setUp();

        // dddx($this->getModel());
<<<<<<< HEAD
        $this->options(static fn(ParentSelect $_component): array => ['a' => 'a', 'b' => 'b']);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->options(static fn(ParentSelect $_component): array => ['a' => 'a', 'b' => 'b']);
=======
        $this->options(static fn (ParentSelect $component): array => ['a' => 'a', 'b' => 'b']);
>>>>>>> a12f125f4a (.)
=======
        $this->options(static fn(ParentSelect $_component): array => ['a' => 'a', 'b' => 'b']);
>>>>>>> b93ef594b4 (.)
=======
        $this->options(static fn (ParentSelect $component): array => ['a' => 'a', 'b' => 'b']);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    public function getOptionValueProperty(): string
    {
        return $this->optionValueProperty;
    }
}
