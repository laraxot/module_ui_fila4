<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
 * RedirectWidget - Widget per gestire redirect verso URL specifici.
 *
<<<<<<< HEAD
 * Questo widget è progettato per creare elementi UI (bottoni, link)
 * che reindirizzano l'utente verso URL specifici.
 *
=======
<<<<<<< HEAD
 * Questo widget è progettato per creare elementi UI (bottoni, link)
 * che reindirizzano l'utente verso URL specifici.
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * Questo widget è progettato per creare elementi UI (bottoni, link)
 * che reindirizzano l'utente verso URL specifici.
 *
=======
 * Questo widget è progettato per creare elementi UI (bottoni, link) 
 * che reindirizzano l'utente verso URL specifici.
 * 
>>>>>>> a12f125f4a (.)
=======
 * Questo widget è progettato per creare elementi UI (bottoni, link)
 * che reindirizzano l'utente verso URL specifici.
 *
>>>>>>> b93ef594b4 (.)
=======
 * Questo widget è progettato per creare elementi UI (bottoni, link) 
 * che reindirizzano l'utente verso URL specifici.
 * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
 * Utilizzo tipico in configurazioni JSON:
 * {
 *     "type": "widget",
 *     "data": {
 *         "view": "pub_theme::components.blocks.widget.simple",
 *         "to": "/admin",
 *         "widget": "Modules\\UI\\Filament\\Widgets\\RedirectWidget"
 *     }
 * }
 */
final class RedirectWidget extends XotBaseWidget
{
    public ?string $url = null;

    /**
     * Testo del link/button (opzionale).
     */
    public string $label = '';

    /**
     * Icona da mostrare (opzionale).
     */
    public string $icon = '';

    /**
     * Destinazione del redirect.
<<<<<<< HEAD
=======
     *
     * @SuppressWarnings("PHPMD.ShortVariable")
>>>>>>> laraxot/develop
     */
    public ?string $to = null;

    /**
     * Classe CSS per styling (opzionale).
     */
    public string $class = '';

    /**
     * Determina se aprire in una nuova tab.
     */
    public bool $external = false;

    /**
     * Vista di default per il widget.
     * Può essere sovrascritta dalla configurazione con la chiave 'view'.
     */
<<<<<<< HEAD
    protected string $view = 'ui::filament.widgets.redirect-widget';
=======
<<<<<<< HEAD
    protected string $view = 'ui::filament.widgets.redirect-widget';
=======
<<<<<<< HEAD
    protected string $view = 'ui::filament.widgets.redirect-widget';
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
    
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    protected static string $view = 'ui::filament.widgets.redirect-widget';
    
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop

    /**
     * Implementazione richiesta da XotBaseWidget.
     * Per questo widget non abbiamo form, quindi restituiamo array vuoto.
     *
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    #[\Override]
=======
<<<<<<< HEAD
    #[\Override]
=======
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
    public function getFormSchema(): array
    {
        return [];
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
     * Dati da passare alla vista.
     *
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        return [
            'to' => $this->to,
            'label' => $this->label ?: 'Vai',
            'icon' => $this->icon,
            'class' => $this->class,
            'external' => $this->external,
        ];
    }

    /**
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
     * Determina se il widget può essere visualizzato.
     * Per il redirect widget, sempre visibile se ha una destinazione.
     */
    public static function canView(): bool
    {
        return true;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/develop

    /**
     * Dati da passare alla vista.
     *
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [
            'to' => $this->to ?? $this->url,
            'label' => $this->label ?: 'Vai',
            'icon' => $this->icon,
            'class' => $this->class,
            'external' => $this->external,
        ];
    }
<<<<<<< HEAD
}
=======
=======
<<<<<<< HEAD
>>>>>>> 6c0b3515 (.)
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
