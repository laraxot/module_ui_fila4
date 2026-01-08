<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Panel;

use Filament\Panel;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Modules\Xot\Datas\XotData;
use Modules\Xot\Datas\MetatagData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Config;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
use Illuminate\Support\Facades\Log;

/**
 * Action per applicare il calendario al panel Filament.
 * NOTA: Temporaneamente disabilitato per migrazione a Filament v4.
 * Il pacchetto Saade\FilamentFullCalendar non è ancora compatibile con Filament v4.
 */
<<<<<<< HEAD
final class ApplyCalendarToPanelAction
{
    public function execute(Panel $panel, string $calendar_class): Panel
    {
=======
<<<<<<< HEAD
final class ApplyCalendarToPanelAction
=======
<<<<<<< HEAD
=======
=======
=======
use Illuminate\Support\Facades\Log;
>>>>>>> b93ef594b4 (.)
use Spatie\QueueableAction\QueueableAction;
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
/**
 * Action per applicare il calendario al panel Filament.
 * NOTA: Temporaneamente disabilitato per migrazione a Filament v4.
 * Il pacchetto Saade\FilamentFullCalendar non è ancora compatibile con Filament v4.
 */
>>>>>>> b93ef594b4 (.)
=======
use Spatie\QueueableAction\QueueableAction;
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;

>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
class ApplyCalendarToPanelAction
>>>>>>> 6c0b3515 (.)
{
    public function execute(Panel $panel, string $calendar_class): Panel
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
        // TODO: Reimplementare quando sarà disponibile un pacchetto FullCalendar compatibile con Filament v4
        // Per ora ritorniamo il panel senza modifiche per evitare errori

        // Log per debug
        if (config('app.debug')) {
            Log::info('ApplyCalendarToPanelAction: FullCalendar temporaneamente disabilitato per Filament v4');
<<<<<<< HEAD
        }

=======
<<<<<<< HEAD
        }

=======
<<<<<<< HEAD
        }

=======
=======
>>>>>>> origin/develop
        $timezone = Config::string('fullcalendar.localization.timezone', 'Europe/Rome');
        $locale = Config::string('fullcalendar.localization.locale', 'it');
        $calendarPlugin = FilamentFullCalendarPlugin::make()
        ->selectable(true)
        ->editable(true)
        ->timezone($timezone)
        ->locale($locale)
        ->plugins([
            'dayGrid',
            'timeGrid',
            'list',
            'interaction',
            'multiMonth',
            //'scrollGrid',//premium
        ]);

        // Aggiungi licenza scheduler solo se presente e valida
        $licenseKey = config('fullcalendar.scheduler_license_key');
        if ($licenseKey && is_string($licenseKey) && !empty(trim($licenseKey))) {
            $calendarPlugin->schedulerLicenseKey($licenseKey);
        }

        $panel->plugin($calendarPlugin);

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
        return $panel;
    }
}
