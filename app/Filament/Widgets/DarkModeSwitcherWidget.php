<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
=======
>>>>>>> 760ce09 (.)
<<<<<<< HEAD
use Filament\Forms\Components\Component;
use Override;
use Filament\Forms\Form;
use Filament\Forms\Form;
=======
use Filament\Schemas\Components\Component;
use Override;
use Filament\Forms\Form;
>>>>>>> e6782b2 (.)
<<<<<<< HEAD
>>>>>>> 9567487 (.)
=======
=======
use Filament\Schemas\Components\Component;
use Override;
use Filament\Forms\Form;
>>>>>>> b55470f (.)
>>>>>>> 760ce09 (.)
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

final class DarkModeSwitcherWidget extends XotBaseWidget
{
    public ?array $data = [];

    public bool $darkMode = false;

    protected string $view = 'ui::filament.widgets.dark-mode-switcher';

    public function mount(): void
    {
        $this->darkMode = filter_var(request()->cookie('dark_mode', 'false'), FILTER_VALIDATE_BOOLEAN);
    }

    public function toggleDarkMode(): void
    {
        $this->darkMode = ! $this->darkMode;

        // Set cookie for persistence
        Cookie::queue('dark_mode', $this->darkMode ? 'true' : 'false', 60 * 24 * 30);

        // Dispatch event for frontend to handle theme switching
        $this->dispatch('darkModeUpdated', ['darkMode' => $this->darkMode]);
    }

    /**
     * Schema del form per la configurazione del widget.
     *
     * @return array<int, Component>
     */
<<<<<<< HEAD
    #[\Override]
=======
    #[Override]
>>>>>>> 4f1ecbf (.)
    public function getFormSchema(): array
    {
        return [];
    }

    public function render(): View
    {
        return view($this->view, [
            'darkMode' => $this->darkMode,
        ]);
    }
}
