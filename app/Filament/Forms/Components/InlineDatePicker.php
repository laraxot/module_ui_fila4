<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Carbon\Carbon;
use Closure;
use Filament\Forms\Components\DatePicker;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Throwable;

use function Safe\preg_match;

/**
 * InlineDatePicker - Calendario inline minimalista e multilingua
 *
 * Principi:
 * - DRY: Don't Repeat Yourself - Codice senza duplicazioni
 * - KISS: Keep It Simple, Stupid - Semplicità sopra tutto
 * - Carbon First: Localizzazione automatica tramite Carbon
 * - Design One Theme: UI/UX conforme al tema standard
 */
final class InlineDatePicker extends DatePicker
{
    /**
     * Mese attualmente visualizzato (formato Y-m).
     */
    public string $currentViewMonth = '';

    /**
     * Date abilitate per la selezione.
     *
     * @var array<string>|Closure|null
     */
    protected array|Closure|null $enabledDates = null;

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
            if ($state && is_string($state)) {
                $date = Carbon::parse($state);
                $component->currentViewMonth = $date->format('Y-m');
            }
        });

        $this->dehydrateStateUsing(static function (self $component, $state): ?string {
            if ($state && is_string($state)) {
                return Carbon::parse($state)->format('Y-m-d');
            }

            return null;
        });
    }

    /**
     * Naviga al mese precedente.
     */
    public function previousMonth(): void
    {
        $currentMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth);
        if ($currentMonth === null) {
            $this->currentViewMonth = now()->format('Y-m');

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
        if ($currentMonth === null) {
            $this->currentViewMonth = now()->format('Y-m');

            return;
        }
        $this->currentViewMonth = $currentMonth->addMonthNoOverflow()->format('Y-m');
    }

    /**
     * Imposta le date abilitate.
     *
     * @param  array<string>|Closure  $dates
     */
    public function enabledDates(array|Closure $dates): static
    {
        $this->enabledDates = $dates;

        return $this;
    }

    /**
     * Imposta il mese corrente di visualizzazione.
     *
     * @param  string  $month  Formato Y-m (es. '2025-06')
     */
    public function currentViewMonth(string $month): static
    {
        // ✅ Validazione robusta - fallback se vuoto o invalido
        if (empty($month) || ! preg_match('/^\d{4}-\d{2}$/', $month)) {
            $this->currentViewMonth = now()->format('Y-m');

            return $this;
        }

        // Verifica che sia una data valida
        $parsedMonth = Carbon::createFromFormat('Y-m', $month);
        if ($parsedMonth === null) {
            $this->currentViewMonth = now()->format('Y-m');

            return $this;
        }

        $this->currentViewMonth = $month;

        return $this;
    }

    /**
     * Ottiene le date abilitate risolte.
     *
     * @return Collection<int, string>
     */
    public function getEnabledDates(): Collection
    {
        $dates = $this->evaluate($this->enabledDates) ?? [];

        if (! is_iterable($dates)) {
            $dates = [];
        }

        // PHPStan L10: Safe conversion iterable to array
        if (is_array($dates)) {
            $datesArray = $dates;
        } else {
            try {
                /** @var array<array-key, mixed> $datesArray */
                $datesArray = iterator_to_array($dates);
            } catch (\Throwable $e) {
                $datesArray = [];
            }
        }

        // Re-index array to ensure integer keys only
        /** @var array<int, mixed> $indexedDates */
        $indexedDates = array_values($datesArray);

        return collect($indexedDates)->map(function ($date): string {
            if (is_string($date) || is_numeric($date)) {
                return Carbon::parse($date)->format('Y-m-d');
            }

            return '';
        });
    }

    /**
     * Verifica se una data è abilitata.
     */
    public function isDateEnabled(string $date): bool
    {
        // PHPStan L10: Evita doppia chiamata al metodo
        $enabledDates = $this->getEnabledDates();

        return $enabledDates->isEmpty() || $enabledDates->contains($date);
    }

    /**
     * Genera i dati del calendario per il mese corrente.
     *
     * @return array<string, mixed>
     */
    public function generateCalendarData(): array
    {
        // ✅ Validazione di sicurezza - assicura che currentViewMonth sia valido
        if (empty($this->currentViewMonth) || ! preg_match('/^\d{4}-\d{2}$/', $this->currentViewMonth)) {
            $this->currentViewMonth = now()->format('Y-m');
        }

        // PHPStan L10: createFromFormat gestito correttamente dopo validazione
        $targetMonthRaw = Carbon::createFromFormat('Y-m', $this->currentViewMonth);
        if ($targetMonthRaw === null) {
            $targetMonth = now()->startOfMonth();
        } else {
            $targetMonth = $targetMonthRaw->startOfMonth();
        }
        $firstDay = $targetMonth->copy()->startOfWeek(Carbon::MONDAY);
        $lastDay = $targetMonth->copy()->endOfMonth()->endOfWeek(Carbon::SUNDAY);

        $weeks = $this->generateWeeks($firstDay, $lastDay, $targetMonth);

        return [
            'weeks' => $weeks,
            'month' => $targetMonth,
            'monthName' => $targetMonth->translatedFormat('F'),
            'year' => $targetMonth->year,
            'weekdays' => $this->getLocalizedWeekdays(),
        ];
    }

    /**
     * Ottiene i dati per la vista.
     *
     * @return array<string, mixed>
     */
    public function getViewData(): array
    {
        $calendarData = $this->generateCalendarData();

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

    /**
     * Ottiene i giorni della settimana localizzati da Carbon.
     *
     * @return array<string>
     */
    protected function getLocalizedWeekdays(): array
    {
        $weekdays = [];
        $monday = Carbon::now()->startOfWeek(Carbon::MONDAY);

        for ($i = 0; $i < 7; $i++) {
            // PHPStan L10: locale() può restituire Carbon|string, gestiamo il caso
            $dayCarbonRaw = $monday->copy()->addDays($i)->locale(App::getLocale());
            // Assicuriamoci che sia sempre Carbon
            if (! ($dayCarbonRaw instanceof Carbon)) {
                $dayCarbon = Carbon::now()->startOfWeek(Carbon::MONDAY)->addDays($i)->locale(App::getLocale());
                if (! ($dayCarbon instanceof Carbon)) {
                    $dayCarbon = Carbon::now()->startOfWeek(Carbon::MONDAY)->addDays($i);
                }
            } else {
                $dayCarbon = $dayCarbonRaw;
            }
            $shortDayName = $dayCarbon->shortLocaleDayOfWeek;
            if (is_array($shortDayName) && isset($shortDayName[0]) && is_string($shortDayName[0])) {
                $weekdays[] = $shortDayName[0];
            } else {
                $dayName = $dayCarbon->dayName;
                $weekdays[] = is_string($dayName) ? substr($dayName, 0, 1) : '';
            }
        }

        /** @var array<string> $weekdays */
        return $weekdays;
    }

    /**
     * Genera le settimane del calendario.
     *
     * @return array<int, array<int, array<string, mixed>>>
     */
    private function generateWeeks(Carbon $firstDay, Carbon $lastDay, Carbon $targetMonth): array
    {
        $weeks = [];
        $currentDay = $firstDay->copy();

        while ($currentDay->lte($lastDay)) {
            $week = $this->generateWeek($currentDay, $targetMonth);
            $weeks[] = $week;
            $currentDay->addWeek();
        }

        /** @var array<int, array<int, array<string, mixed>>> $weeks */
        return $weeks;
    }

    /**
     * Genera una singola settimana del calendario.
     *
     * @return array<int, array<string, mixed>>
     */
    private function generateWeek(Carbon $currentDay, Carbon $targetMonth): array
    {
        $week = [];
        $weekStart = $currentDay->copy()->startOfWeek(Carbon::MONDAY);

        for ($i = 0; $i < 7; $i++) {
            $day = $weekStart->copy()->addDays($i);
            $dayData = $this->generateDayData($day, $targetMonth);
            $week[$i] = $dayData;
        }

        /** @var array<int, array<string, mixed>> $week */
        return $week;
    }

    /**
     * Genera i dati per un singolo giorno.
     *
     * @return array<string, mixed>
     */
    private function generateDayData(Carbon $day, Carbon $targetMonth): array
    {
        $isCurrentMonth = $day->month === $targetMonth->month;
        $isToday = $day->isToday();
        $isSelected = $this->isDaySelected($day);
        $isEnabled = $this->isDateEnabled($day->format('Y-m-d')) && $isCurrentMonth;

        return [
            'dateString' => $day->format('Y-m-d'),
            'datetime' => $day->format('Y-m-d'),
            'day' => $day->day,
            'isCurrentMonth' => $isCurrentMonth,
            'isToday' => $isToday,
            'isSelected' => $isSelected,
            'isEnabled' => $isEnabled,
        ];
    }

    /**
     * Verifica se un giorno è selezionato.
     */
    private function isDaySelected(Carbon $day): bool
    {
        try {
            $state = $this->getState();
            if (! $state || (! is_string($state) && ! is_numeric($state))) {
                return false;
            }

            // PHPStan L10: State già verificato come string|numeric
            $stateString = (string) $state;
            $parsedState = Carbon::parse($stateString);

            return $day->isSameDay($parsedState);
        } catch (Throwable $e) {
            return false;
        }
    }
}
