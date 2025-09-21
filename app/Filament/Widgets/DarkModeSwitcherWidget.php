<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class DarkModeSwitcherWidget extends XotBaseWidget
{
<<<<<<< HEAD
    public null|array $data = [];
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $data = [];
=======
    public ?array $data = [];
>>>>>>> a12f125f4a (.)
=======
    public null|array $data = [];
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)

    protected string $view = 'ui::filament.widgets.dark-mode-switcher';

    public bool $darkMode = false;

    public function mount(): void
    {
        $this->darkMode = filter_var(request()->cookie('dark_mode', 'false'), FILTER_VALIDATE_BOOLEAN);
    }

    public function toggleDarkMode(): void
    {
<<<<<<< HEAD
        $this->darkMode = !$this->darkMode;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->darkMode = !$this->darkMode;
=======
        $this->darkMode = ! $this->darkMode;
>>>>>>> a12f125f4a (.)
=======
        $this->darkMode = !$this->darkMode;
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)

        // Set cookie for persistence
        Cookie::queue('dark_mode', $this->darkMode ? 'true' : 'false', 60 * 24 * 30);

        // Dispatch event for frontend to handle theme switching
        $this->dispatch('darkModeUpdated', ['darkMode' => $this->darkMode]);
    }

    /**
     * Schema del form per la configurazione del widget.
     *
<<<<<<< HEAD
     * @return array<int, Component>
     */
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<int, Component>
     */
    #[Override]
=======
     * @return array<int, \Filament\Schemas\Components\Component>
     */
>>>>>>> a12f125f4a (.)
=======
     * @return array<int, Component>
     */
    #[Override]
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
    public function getFormSchema(): array
    {
        return [];
    }

    public function render(): View
    {
<<<<<<< HEAD
        return view($this->view, [
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return view($this->view, [
=======
        return view(static::$view, [
>>>>>>> a12f125f4a (.)
=======
        return view($this->view, [
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
            'darkMode' => $this->darkMode,
        ]);
    }
}
