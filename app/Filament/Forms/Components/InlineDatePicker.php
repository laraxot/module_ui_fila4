<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Exception;
use Throwable;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
use Carbon\Carbon;
use Closure;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\DatePicker;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;

<<<<<<< HEAD
=======
use Closure;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Filament\Forms\Components\DatePicker;
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\Concerns\InteractsWithActions;
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
use function Safe\preg_match;

/**
 * InlineDatePicker - Calendario inline minimalista e multilingua
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 727968c (.)
=======
 *
>>>>>>> ef3c5fa (.)
 * Principi:
 * - DRY: Don't Repeat Yourself - Codice senza duplicazioni
 * - KISS: Keep It Simple, Stupid - Semplicità sopra tutto
 * - Carbon First: Localizzazione automatica tramite Carbon
 * - Design One Theme: UI/UX conforme al tema standard
 */
class InlineDatePicker extends DatePicker
{
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * Date abilitate per la selezione.
     *
=======
    
    /**
     * Date abilitate per la selezione.
     * 
>>>>>>> 727968c (.)
=======
    /**
     * Date abilitate per la selezione.
     *
>>>>>>> ef3c5fa (.)
     * @var array<string>|Closure|null
     */
    protected array|Closure|null $enabledDates = null;

    /**
     * Mese attualmente visualizzato (formato Y-m).
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 727968c (.)
=======
     *
>>>>>>> ef3c5fa (.)
     * @var string
     */
    public string $currentViewMonth;

    /**
     * Vista Blade per il rendering.
     */
    protected string $view = 'ui::filament.forms.components.inline-date-picker';

    /**
     * Setup iniziale del componente.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Inizializzazione con localizzazione Carbon
        Carbon::setLocale(App::getLocale());
        $this->currentViewMonth = now()->format('Y-m');

        // Hydration/Dehydration del valore
        $this->afterStateHydrated(static function (self $component, $state): void {
<<<<<<< HEAD
<<<<<<< HEAD
=======
            
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
            if ($state) {
                $date = Carbon::parse($state);
                $component->currentViewMonth = $date->format('Y-m');
            }
        });

<<<<<<< HEAD
<<<<<<< HEAD
        $this->dehydrateStateUsing(static fn(self $_component, $state) => $state
            ? Carbon::parse($state)->format('Y-m-d')
            : null);
=======
        $this->dehydrateStateUsing(static function (self $component, $state) {
            
            return $state ? Carbon::parse($state)->format('Y-m-d') : null;
        });
>>>>>>> 727968c (.)
=======
        $this->dehydrateStateUsing(static fn(self $_component, $state) => $state
            ? Carbon::parse($state)->format('Y-m-d')
            : null);
>>>>>>> ef3c5fa (.)
    }

    /**
     * Naviga al mese precedente.
     */
    public function previousMonth(): void
    {
        $currentMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth);
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$currentMonth) {
=======
        if(!$currentMonth){
>>>>>>> 727968c (.)
=======
        if (!$currentMonth) {
>>>>>>> ef3c5fa (.)
            return;
        }
        $this->currentViewMonth = $currentMonth->subMonthNoOverflow()->format('Y-m');
    }

    /**
     * Naviga al mese successivo.
     */
    public function nextMonth(): void
    {
        $currentMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth);
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$currentMonth) {
=======
        if(!$currentMonth){
>>>>>>> 727968c (.)
=======
        if (!$currentMonth) {
>>>>>>> ef3c5fa (.)
            return;
        }
        $this->currentViewMonth = $currentMonth->addMonthNoOverflow()->format('Y-m');
    }

    /**
     * Imposta le date abilitate.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 727968c (.)
=======
     *
>>>>>>> ef3c5fa (.)
     * @param array<string>|Closure $dates
     * @return static
     */
    public function enabledDates(array|Closure $dates): static
    {
        $this->enabledDates = $dates;
        return $this;
    }

    /**
     * Imposta il mese corrente di visualizzazione.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 727968c (.)
=======
     *
>>>>>>> ef3c5fa (.)
     * @param string $month Formato Y-m (es. '2025-06')
     * @return static
     */
    public function currentViewMonth(string $month): static
    {
        // ✅ Validazione robusta - fallback se vuoto o invalido
        if (empty($month) || !preg_match('/^\d{4}-\d{2}$/', $month)) {
            $this->currentViewMonth = now()->format('Y-m');
        } else {
            // Verifica che sia una data valida
            try {
                Carbon::createFromFormat('Y-m', $month);
                $this->currentViewMonth = $month;
            } catch (Exception $e) {
                $this->currentViewMonth = now()->format('Y-m');
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)

        return $this;
    }

    /**
     * Ottiene le date abilitate risolte.
     *
<<<<<<< HEAD
=======
        
        return $this;
    }

    

    /**
     * Ottiene le date abilitate risolte.
     * 
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
     * @return Collection<int, string>
     */
    public function getEnabledDates(): Collection
    {
        $dates = $this->evaluate($this->enabledDates) ?? [];
        /** @phpstan-ignore return.type, argument.templateType, argument.templateType */
<<<<<<< HEAD
<<<<<<< HEAD
        return collect($dates)->map(fn($date): string => Carbon::parse($date)->format('Y-m-d'));
=======
        return collect($dates)->map(function ($date): string {
            return Carbon::parse($date)->format('Y-m-d');
        });
>>>>>>> 727968c (.)
=======
        return collect($dates)->map(fn($date): string => Carbon::parse($date)->format('Y-m-d'));
>>>>>>> ef3c5fa (.)
    }

    /**
     * Verifica se una data è abilitata.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 727968c (.)
=======
     *
>>>>>>> ef3c5fa (.)
     * @param string $date
     * @return bool
     */
    public function isDateEnabled(string $date): bool
    {
        return $this->getEnabledDates()->isEmpty() || $this->getEnabledDates()->contains($date);
    }

    /**
     * Genera i dati del calendario per il mese corrente.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 727968c (.)
=======
     *
>>>>>>> ef3c5fa (.)
     * @return array<string, mixed>
     */
    public function generateCalendarData(): array
    {
        // ✅ Validazione di sicurezza - assicura che currentViewMonth sia valido
        if (empty($this->currentViewMonth) || !preg_match('/^\d{4}-\d{2}$/', $this->currentViewMonth)) {
            $this->currentViewMonth = now()->format('Y-m');
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 727968c (.)
=======

>>>>>>> ef3c5fa (.)
        /** @phpstan-ignore method.nonObject */
        $targetMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth)->startOfMonth();
        /** @phpstan-ignore-next-line */
        $firstDay = $targetMonth->copy()->startOfWeek(Carbon::MONDAY);
        $lastDay = $targetMonth->copy()->endOfMonth()->endOfWeek(Carbon::SUNDAY);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)

        $weeks = collect();
        $currentDay = $firstDay->copy();

        while ($currentDay->lte($lastDay)) {
            $week = collect();

            for ($i = 0; $i < 7; $i++) {
                $isCurrentMonth = $currentDay->month === $targetMonth->month;
                $isToday = $currentDay->isToday();

<<<<<<< HEAD
=======
        
        $weeks = collect();
        $currentDay = $firstDay->copy();
        
        while ($currentDay->lte($lastDay)) {
            $week = collect();
            
            for ($i = 0; $i < 7; $i++) {
                $isCurrentMonth = $currentDay->month === $targetMonth->month;
                $isToday = $currentDay->isToday();
                
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
                // Gestione sicura del controllo selezione
                $isSelected = false;
                try {
                    $state = $this->getState();
                    /** @phpstan-ignore argument.type */
                    $isSelected = $state && $currentDay->isSameDay(Carbon::parse($state));
                } catch (Throwable $e) {
                    $isSelected = false;
                }
<<<<<<< HEAD
<<<<<<< HEAD

                $isEnabled = $this->isDateEnabled($currentDay->format('Y-m-d')) && $isCurrentMonth;

=======
                
                $isEnabled = $this->isDateEnabled($currentDay->format('Y-m-d')) && $isCurrentMonth;
                
>>>>>>> 727968c (.)
=======

                $isEnabled = $this->isDateEnabled($currentDay->format('Y-m-d')) && $isCurrentMonth;

>>>>>>> ef3c5fa (.)
                $week->push([
                    'dateString' => $currentDay->format('Y-m-d'),
                    'datetime' => $currentDay->format('Y-m-d'),
                    'day' => $currentDay->day,
                    'isCurrentMonth' => $isCurrentMonth,
                    'isToday' => $isToday,
                    'isSelected' => $isSelected,
                    'isEnabled' => $isEnabled,
                ]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)

                $currentDay->addDay();
            }

            $weeks->push($week->toArray());
        }

<<<<<<< HEAD
=======
                
                $currentDay->addDay();
            }
            
            $weeks->push($week->toArray());
        }
        
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
        return [
            'weeks' => $weeks->toArray(),
            'month' => $targetMonth,
            'monthName' => $targetMonth->translatedFormat('F'),
            'year' => $targetMonth->year,
            'weekdays' => $this->getLocalizedWeekdays(),
        ];
    }

    /**
     * Ottiene i giorni della settimana localizzati da Carbon.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 727968c (.)
=======
     *
>>>>>>> ef3c5fa (.)
     * @return array<string>
     */
    protected function getLocalizedWeekdays(): array
    {
        $weekdays = [];
        $monday = Carbon::now()->startOfWeek(Carbon::MONDAY);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 727968c (.)
=======

>>>>>>> ef3c5fa (.)
        for ($i = 0; $i < 7; $i++) {
            /** @phpstan-ignore property.nonObject */
            $weekdays[] = $monday->copy()->addDays($i)->locale(App::getLocale())->shortLocaleDayOfWeek[0];
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 727968c (.)
=======

>>>>>>> ef3c5fa (.)
        return $weekdays;
    }

    /**
     * Ottiene i dati per la vista.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 727968c (.)
=======
     *
>>>>>>> ef3c5fa (.)
     * @return array<string, mixed>
     */
    public function getViewData(): array
    {
        $calendarData = $this->generateCalendarData();
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 727968c (.)
=======

>>>>>>> ef3c5fa (.)
        return array_merge(parent::getViewData(), [
            'calendarData' => $calendarData,
            'currentViewMonth' => $this->currentViewMonth,
            'currentValue' => $this->getState(),
            'enabledDates' => $this->getEnabledDates(),
            'statePath' => $this->getStatePath(),
            'monthName' => $calendarData['monthName'],
            'year' => $calendarData['year'],
            'weekdays' => $calendarData['weekdays'],
        ]);
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> 727968c (.)
=======
}
>>>>>>> ef3c5fa (.)
