<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\UI\Filament\Widgets\DarkModeSwitcherWidget;

/**
 * Componente Blade per il Dark Mode Switcher.
 *
 * Wrappa il DarkModeSwitcherWidget per l'uso nei temi tramite sintassi Blade.
 */
class DarkModeSwitcher extends Component
{
    /**
     * Widget associato al componente.
     */
    protected DarkModeSwitcherWidget $widget;

    /**
     * Crea una nuova istanza del componente.
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->widget = new DarkModeSwitcherWidget();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->widget = new DarkModeSwitcherWidget();
=======
        $this->widget = new DarkModeSwitcherWidget;
>>>>>>> a12f125f4a (.)
=======
        $this->widget = new DarkModeSwitcherWidget();
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
    }

    /**
     * Renderizza il componente.
     */
    public function render(): View
    {
        // Verifica se il widget può essere visualizzato
<<<<<<< HEAD
        if (!DarkModeSwitcherWidget::canView()) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!DarkModeSwitcherWidget::canView()) {
=======
        if (! DarkModeSwitcherWidget::canView()) {
>>>>>>> a12f125f4a (.)
=======
        if (!DarkModeSwitcherWidget::canView()) {
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
            return view('ui::components.empty');
        }

        // Ottiene i dati dal widget
<<<<<<< HEAD
        $viewData = ['darkMode' => $this->widget->darkMode];
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $viewData = ['darkMode' => $this->widget->darkMode];
=======
        $viewData = $this->widget->getViewData();
>>>>>>> a12f125f4a (.)
=======
        $viewData = ['darkMode' => $this->widget->darkMode];
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)

        return view('ui::filament.widgets.dark-mode-switcher', $viewData);
    }
}
