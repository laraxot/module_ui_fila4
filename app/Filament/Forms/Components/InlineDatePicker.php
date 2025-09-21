<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
use Exception;
use Throwable;
=======
<<<<<<< HEAD
use Exception;
use Throwable;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Carbon\Carbon;
use Closure;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\DatePicker;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;

<<<<<<< HEAD
=======
=======
use Closure;
=======
>>>>>>> b93ef594b4 (.)
use Carbon\Carbon;
use Closure;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\DatePicker;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
<<<<<<< HEAD
use Filament\Forms\Components\DatePicker;
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\Concerns\InteractsWithActions;
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
use Closure;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Filament\Forms\Components\DatePicker;
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\Concerns\InteractsWithActions;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use function Safe\preg_match;

/**
 * InlineDatePicker - Calendario inline minimalista e multilingua
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
 * Principi:
 * - DRY: Don't Repeat Yourself - Codice senza duplicazioni
 * - KISS: Keep It Simple, Stupid - Semplicità sopra tutto
 * - Carbon First: Localizzazione automatica tramite Carbon
 * - Design One Theme: UI/UX conforme al tema standard
 */
class InlineDatePicker extends DatePicker
{
<<<<<<< HEAD
    /**
     * Date abilitate per la selezione.
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * Date abilitate per la selezione.
     *
=======
=======
>>>>>>> origin/develop
    
    /**
     * Date abilitate per la selezione.
     * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    /**
     * Date abilitate per la selezione.
     *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @var array<string>|Closure|null
     */
    protected array|Closure|null $enabledDates = null;

    /**
     * Mese attualmente visualizzato (formato Y-m).
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
            if ($state) {
                $date = Carbon::parse($state);
                $component->currentViewMonth = $date->format('Y-m');
            }
        });

<<<<<<< HEAD
        $this->dehydrateStateUsing(static fn(self $_component, $state) => $state
            ? Carbon::parse($state)->format('Y-m-d')
            : null);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->dehydrateStateUsing(static fn(self $_component, $state) => $state
            ? Carbon::parse($state)->format('Y-m-d')
            : null);
=======
=======
>>>>>>> origin/develop
        $this->dehydrateStateUsing(static function (self $component, $state) {
            
            return $state ? Carbon::parse($state)->format('Y-m-d') : null;
        });
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $this->dehydrateStateUsing(static fn(self $_component, $state) => $state
            ? Carbon::parse($state)->format('Y-m-d')
            : null);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    /**
     * Naviga al mese precedente.
     */
    public function previousMonth(): void
    {
        $currentMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth);
<<<<<<< HEAD
        if (!$currentMonth) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$currentMonth) {
=======
        if(!$currentMonth){
>>>>>>> a12f125f4a (.)
=======
        if (!$currentMonth) {
>>>>>>> b93ef594b4 (.)
=======
        if(!$currentMonth){
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
        if (!$currentMonth) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$currentMonth) {
=======
        if(!$currentMonth){
>>>>>>> a12f125f4a (.)
=======
        if (!$currentMonth) {
>>>>>>> b93ef594b4 (.)
=======
        if(!$currentMonth){
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            return;
        }
        $this->currentViewMonth = $currentMonth->addMonthNoOverflow()->format('Y-m');
    }

    /**
     * Imposta le date abilitate.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
            } catch (Exception $e) {
                $this->currentViewMonth = now()->format('Y-m');
            }
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

        return $this;
    }

    /**
     * Ottiene le date abilitate risolte.
     *
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        return $this;
    }

    /**
     * Ottiene le date abilitate risolte.
<<<<<<< HEAD
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
            } catch (\Exception $e) {
                $this->currentViewMonth = now()->format('Y-m');
            }
        }
        
        return $this;
    }

    

    /**
     * Ottiene le date abilitate risolte.
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @return Collection<int, string>
     */
    public function getEnabledDates(): Collection
    {
        $dates = $this->evaluate($this->enabledDates) ?? [];
        /** @phpstan-ignore return.type, argument.templateType, argument.templateType */
<<<<<<< HEAD
        return collect($dates)->map(fn($date): string => Carbon::parse($date)->format('Y-m-d'));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return collect($dates)->map(fn($date): string => Carbon::parse($date)->format('Y-m-d'));
=======
        return collect($dates)->map(function ($date): string {
            return Carbon::parse($date)->format('Y-m-d');
        });
>>>>>>> a12f125f4a (.)
=======
        return collect($dates)->map(fn($date): string => Carbon::parse($date)->format('Y-m-d'));
>>>>>>> b93ef594b4 (.)
=======
        return collect($dates)->map(function ($date): string {
            return Carbon::parse($date)->format('Y-m-d');
        });
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }

    /**
     * Verifica se una data è abilitata.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @return array<string, mixed>
     */
    public function generateCalendarData(): array
    {
        // ✅ Validazione di sicurezza - assicura che currentViewMonth sia valido
        if (empty($this->currentViewMonth) || !preg_match('/^\d{4}-\d{2}$/', $this->currentViewMonth)) {
            $this->currentViewMonth = now()->format('Y-m');
        }
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
        /** @phpstan-ignore method.nonObject */
        $targetMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth)->startOfMonth();
        /** @phpstan-ignore-next-line */
        $firstDay = $targetMonth->copy()->startOfWeek(Carbon::MONDAY);
        $lastDay = $targetMonth->copy()->endOfMonth()->endOfWeek(Carbon::SUNDAY);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

        $weeks = collect();
        $currentDay = $firstDay->copy();

        while ($currentDay->lte($lastDay)) {
            $week = collect();

            for ($i = 0; $i < 7; $i++) {
                $isCurrentMonth = $currentDay->month === $targetMonth->month;
                $isToday = $currentDay->isToday();

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $weeks = collect();
        $currentDay = $firstDay->copy();

        while ($currentDay->lte($lastDay)) {
            $week = collect();

            for ($i = 0; $i < 7; $i++) {
                $isCurrentMonth = $currentDay->month === $targetMonth->month;
                $isToday = $currentDay->isToday();
<<<<<<< HEAD
                
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $weeks = collect();
        $currentDay = $firstDay->copy();
        
        while ($currentDay->lte($lastDay)) {
            $week = collect();
            
            for ($i = 0; $i < 7; $i++) {
                $isCurrentMonth = $currentDay->month === $targetMonth->month;
                $isToday = $currentDay->isToday();
                
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                // Gestione sicura del controllo selezione
                $isSelected = false;
                try {
                    $state = $this->getState();
                    /** @phpstan-ignore argument.type */
                    $isSelected = $state && $currentDay->isSameDay(Carbon::parse($state));
<<<<<<< HEAD
                } catch (Throwable $e) {
                    $isSelected = false;
                }

                $isEnabled = $this->isDateEnabled($currentDay->format('Y-m-d')) && $isCurrentMonth;

=======
<<<<<<< HEAD
                } catch (Throwable $e) {
                    $isSelected = false;
                }
<<<<<<< HEAD
<<<<<<< HEAD

                $isEnabled = $this->isDateEnabled($currentDay->format('Y-m-d')) && $isCurrentMonth;

=======
                
                $isEnabled = $this->isDateEnabled($currentDay->format('Y-m-d')) && $isCurrentMonth;
                
>>>>>>> a12f125f4a (.)
=======

                $isEnabled = $this->isDateEnabled($currentDay->format('Y-m-d')) && $isCurrentMonth;

>>>>>>> b93ef594b4 (.)
=======
                } catch (\Throwable $e) {
                    $isSelected = false;
                }
                
                $isEnabled = $this->isDateEnabled($currentDay->format('Y-m-d')) && $isCurrentMonth;
                
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

                $currentDay->addDay();
            }

            $weeks->push($week->toArray());
        }

<<<<<<< HEAD
=======
=======
                
=======

>>>>>>> b93ef594b4 (.)
                $currentDay->addDay();
            }

            $weeks->push($week->toArray());
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
                
                $currentDay->addDay();
            }
            
            $weeks->push($week->toArray());
        }
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @return array<string>
     */
    protected function getLocalizedWeekdays(): array
    {
        $weekdays = [];
        $monday = Carbon::now()->startOfWeek(Carbon::MONDAY);
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
        for ($i = 0; $i < 7; $i++) {
            /** @phpstan-ignore property.nonObject */
            $weekdays[] = $monday->copy()->addDays($i)->locale(App::getLocale())->shortLocaleDayOfWeek[0];
        }
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
        return $weekdays;
    }

    /**
     * Ottiene i dati per la vista.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @return array<string, mixed>
     */
    public function getViewData(): array
    {
        $calendarData = $this->generateCalendarData();
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
