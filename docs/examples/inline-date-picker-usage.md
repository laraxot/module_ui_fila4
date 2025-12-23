# Esempi di Utilizzo di InlineDatePicker

## Esempio 1: Prenotazione Appuntamenti Medici
<<<<<<< HEAD
```php
<?php
declare(strict_types=1);
namespace Modules\<nome modulo>\Filament\Forms;
use Modules\UI\Filament\Forms\Components\InlineDatePicker;
use Modules\<nome modulo>\Models\Appointment;
namespace Modules\SaluteOra\Filament\Forms;
use Modules\SaluteOra\Models\Appointment;
use Carbon\Carbon;
=======

```php
<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Forms;

use Modules\UI\Filament\Forms\Components\InlineDatePicker;
use Modules\SaluteOra\Models\Appointment;
use Carbon\Carbon;

>>>>>>> laraxot/develop
class AppointmentBookingForm
{
    public function getDatePickerSchema(): array
    {
        return [
            InlineDatePicker::make('appointment_date')
                ->enabledDates(function () {
                    // Solo giorni feriali dei prossimi 30 giorni
                    $availableDates = [];
                    $start = Carbon::today();
                    $end = Carbon::today()->addDays(30);
                    
                    while ($start <= $end) {
                        if ($start->isWeekday()) {
                            $availableDates[] = $start->format('Y-m-d');
                        }
                        $start->addDay();
                    }
<<<<<<< HEAD
=======
                    
>>>>>>> laraxot/develop
                    return $availableDates;
                })
                ->calendarConfig([
                    'locale' => 'it',
                    'firstDayOfWeek' => 1,
                ])
                ->afterStateUpdated(function ($state, Set $set) {
                    // Reset orario quando cambia la data
                    $set('appointment_time', null);
<<<<<<< HEAD
                    // Carica orari disponibili per la data selezionata
                    $this->loadAvailableTimeSlots($state);
=======
                    
                    // Carica orari disponibili per la data selezionata
                    $this->loadAvailableTimeSlots($state);
                })
>>>>>>> laraxot/develop
                ->required(),
        ];
    }
}
```
<<<<<<< HEAD
## Esempio 2: Selezione Date Evento
namespace Modules\Events\Filament\Forms;
use Modules\Events\Models\Event;
class EventSchedulingForm
            InlineDatePicker::make('event_date')
=======

## Esempio 2: Selezione Date Evento

```php
<?php

declare(strict_types=1);

namespace Modules\Events\Filament\Forms;

use Modules\UI\Filament\Forms\Components\InlineDatePicker;
use Modules\Events\Models\Event;

class EventSchedulingForm
{
    public function getDatePickerSchema(): array
    {
        return [
            InlineDatePicker::make('event_date')
                ->enabledDates(function () {
>>>>>>> laraxot/develop
                    // Date specifiche configurate dall'amministratore
                    return Event::query()
                        ->where('is_available', true)
                        ->where('date', '>=', now())
                        ->pluck('date')
                        ->map(fn($date) => $date->format('Y-m-d'))
                        ->toArray();
<<<<<<< HEAD
                    'numberOfMonths' => 2, // Mostra due mesi
=======
                })
                ->calendarConfig([
                    'locale' => 'it',
                    'firstDayOfWeek' => 1,
                    'numberOfMonths' => 2, // Mostra due mesi
                ])
>>>>>>> laraxot/develop
                ->afterStateUpdated(function ($state) {
                    // Log della selezione per analytics
                    \Log::info('Event date selected', [
                        'date' => $state,
                        'user' => auth()->id(),
                        'timestamp' => now(),
                    ]);
<<<<<<< HEAD
## Esempio 3: Sistema di Prenotazione con Restrizioni Avanzate
namespace Modules\Bookings\Filament\Forms;
use Modules\Bookings\Services\AvailabilityService;
class AdvancedBookingForm
=======
                })
                ->required(),
        ];
    }
}
```

## Esempio 3: Sistema di Prenotazione con Restrizioni Avanzate

```php
<?php

declare(strict_types=1);

namespace Modules\Bookings\Filament\Forms;

use Modules\UI\Filament\Forms\Components\InlineDatePicker;
use Modules\Bookings\Services\AvailabilityService;
use Carbon\Carbon;

class AdvancedBookingForm
{
>>>>>>> laraxot/develop
    public function __construct(
        private AvailabilityService $availabilityService
    ) {}
    
<<<<<<< HEAD
=======
    public function getDatePickerSchema(): array
    {
        return [
>>>>>>> laraxot/develop
            InlineDatePicker::make('booking_date')
                ->enabledDates(function (Get $get) {
                    $serviceId = $get('service_id');
                    $locationId = $get('location_id');
<<<<<<< HEAD
                    if (!$serviceId || !$locationId) {
                        return [];
=======
                    
                    if (!$serviceId || !$locationId) {
                        return [];
                    }
                    
>>>>>>> laraxot/develop
                    // Logica avanzata per date disponibili
                    return $this->availabilityService->getAvailableDates(
                        serviceId: $serviceId,
                        locationId: $locationId,
                        startDate: Carbon::today(),
                        endDate: Carbon::today()->addMonths(3)
                    );
<<<<<<< HEAD
                ->afterStateUpdated(function ($state, Set $set, Get $get) {
                    if (!$state) return;
                    // Reset campi dipendenti
                    $set('booking_time', null);
                    $set('duration', null);
=======
                })
                ->calendarConfig([
                    'locale' => 'it',
                    'firstDayOfWeek' => 1,
                ])
                ->afterStateUpdated(function ($state, Set $set, Get $get) {
                    if (!$state) return;
                    
                    // Reset campi dipendenti
                    $set('booking_time', null);
                    $set('duration', null);
                    
>>>>>>> laraxot/develop
                    // Calcola durata massima per la data
                    $maxDuration = $this->availabilityService->getMaxDuration(
                        date: $state,
                        serviceId: $get('service_id'),
                        locationId: $get('location_id')
<<<<<<< HEAD
                    $set('max_duration', $maxDuration);
                ->visible(fn (Get $get) => $get('service_id') && $get('location_id'))
## Esempio 4: Integrazione con Wizard Multi-Step
namespace Modules\Wizards\Filament\Forms;
use Filament\Forms\Components\Wizard;
class MultiStepWizardForm
    public function getWizardSchema(): array
=======
                    );
                    
                    $set('max_duration', $maxDuration);
                })
                ->visible(fn (Get $get) => $get('service_id') && $get('location_id'))
                ->required(),
        ];
    }
}
```

## Esempio 4: Integrazione con Wizard Multi-Step

```php
<?php

declare(strict_types=1);

namespace Modules\Wizards\Filament\Forms;

use Modules\UI\Filament\Forms\Components\InlineDatePicker;
use Filament\Forms\Components\Wizard;

class MultiStepWizardForm
{
    public function getWizardSchema(): array
    {
        return [
>>>>>>> laraxot/develop
            Wizard::make([
                Wizard\Step::make('service_selection')
                    ->label('Selezione Servizio')
                    ->schema([
                        // ... altri componenti
                    ]),
<<<<<<< HEAD
                Wizard\Step::make('date_selection')
                    ->label('Selezione Data')
=======
                    
                Wizard\Step::make('date_selection')
                    ->label('Selezione Data')
                    ->schema([
>>>>>>> laraxot/develop
                        InlineDatePicker::make('appointment_date')
                            ->enabledDates(function (Get $get) {
                                $serviceType = $get('service_type');
                                
                                // Date diverse per tipologia di servizio
                                return match($serviceType) {
                                    'urgent' => $this->getUrgentDates(),
                                    'standard' => $this->getStandardDates(),
                                    'premium' => $this->getPremiumDates(),
                                    default => [],
                                };
                            })
                            ->calendarConfig([
                                'locale' => 'it',
                                'firstDayOfWeek' => 1,
                            ])
                            ->live()
                            ->required(),
<<<<<<< HEAD
                Wizard\Step::make('confirmation')
                    ->label('Conferma')
                        // ... conferma dettagli
            ])
    private function getUrgentDates(): array
=======
                    ]),
                    
                Wizard\Step::make('confirmation')
                    ->label('Conferma')
                    ->schema([
                        // ... conferma dettagli
                    ]),
            ])
        ];
    }
    
    private function getUrgentDates(): array
    {
>>>>>>> laraxot/develop
        // Solo i prossimi 7 giorni (giorni feriali)
        $dates = [];
        $start = Carbon::today();
        
        for ($i = 0; $i < 7; $i++) {
            if ($start->isWeekday()) {
                $dates[] = $start->format('Y-m-d');
            }
            $start->addDay();
        }
<<<<<<< HEAD
        return $dates;
    private function getStandardDates(): array
        // Prossime 4 settimane (solo giorni feriali)
        $end = Carbon::today()->addWeeks(4);
        while ($start <= $end) {
    private function getPremiumDates(): array
        // Tutti i giorni dei prossimi 3 mesi
        $end = Carbon::today()->addMonths(3);
            $dates[] = $start->format('Y-m-d');
## Esempio 5: Personalizzazione Avanzata con Stati Speciali
namespace Modules\CustomCalendar\Filament\Forms;
use Modules\CustomCalendar\Models\SpecialDate;
class CustomCalendarForm
    public function getAdvancedDatePickerSchema(): array
            InlineDatePicker::make('special_date')
                    // Date con stati speciali
                    return SpecialDate::query()
                        ->where('is_active', true)
=======
        
        return $dates;
    }
    
    private function getStandardDates(): array
    {
        // Prossime 4 settimane (solo giorni feriali)
        $dates = [];
        $start = Carbon::today();
        $end = Carbon::today()->addWeeks(4);
        
        while ($start <= $end) {
            if ($start->isWeekday()) {
                $dates[] = $start->format('Y-m-d');
            }
            $start->addDay();
        }
        
        return $dates;
    }
    
    private function getPremiumDates(): array
    {
        // Tutti i giorni dei prossimi 3 mesi
        $dates = [];
        $start = Carbon::today();
        $end = Carbon::today()->addMonths(3);
        
        while ($start <= $end) {
            $dates[] = $start->format('Y-m-d');
            $start->addDay();
        }
        
        return $dates;
    }
}
```

## Esempio 5: Personalizzazione Avanzata con Stati Speciali

```php
<?php

declare(strict_types=1);

namespace Modules\CustomCalendar\Filament\Forms;

use Modules\UI\Filament\Forms\Components\InlineDatePicker;
use Modules\CustomCalendar\Models\SpecialDate;

class CustomCalendarForm
{
    public function getAdvancedDatePickerSchema(): array
    {
        return [
            InlineDatePicker::make('special_date')
                ->enabledDates(function () {
                    // Date con stati speciali
                    return SpecialDate::query()
                        ->where('is_active', true)
                        ->where('date', '>=', now())
>>>>>>> laraxot/develop
                        ->get()
                        ->map(function ($specialDate) {
                            return [
                                'date' => $specialDate->date->format('Y-m-d'),
                                'type' => $specialDate->type,
                                'priority' => $specialDate->priority,
                                'metadata' => $specialDate->metadata,
                            ];
                        })
<<<<<<< HEAD
=======
                        ->pluck('date')
                        ->toArray();
                })
                ->calendarConfig([
                    'locale' => 'it',
                    'firstDayOfWeek' => 1,
>>>>>>> laraxot/develop
                    'customClasses' => [
                        'special-holiday' => fn($date) => $this->isHoliday($date),
                        'high-demand' => fn($date) => $this->isHighDemand($date),
                        'premium-only' => fn($date) => $this->isPremiumOnly($date),
                    ],
<<<<<<< HEAD
                    // Carica metadati per la data selezionata
                    $specialDate = SpecialDate::whereDate('date', $state)->first();
                    if ($specialDate) {
                        $this->selectedDateMetadata = $specialDate->metadata;
                        $this->selectedDateType = $specialDate->type;
    private function isHoliday(string $date): bool
        return SpecialDate::whereDate('date', $date)
            ->where('type', 'holiday')
            ->exists();
    private function isHighDemand(string $date): bool
            ->where('priority', 'high')
    private function isPremiumOnly(string $date): bool
            ->where('type', 'premium_only')
## Esempio 6: Testing del Componente
namespace Tests\Feature\UI\Components;
use Tests\TestCase;
use Livewire\Livewire;
class InlineDatePickerTest extends TestCase
    /** @test */
    public function it_renders_with_enabled_dates(): void
        $enabledDates = [
            Carbon::today()->format('Y-m-d'),
            Carbon::tomorrow()->format('Y-m-d'),
=======
                ])
                ->afterStateUpdated(function ($state) {
                    // Carica metadati per la data selezionata
                    $specialDate = SpecialDate::whereDate('date', $state)->first();
                    
                    if ($specialDate) {
                        $this->selectedDateMetadata = $specialDate->metadata;
                        $this->selectedDateType = $specialDate->type;
                    }
                })
                ->required(),
        ];
    }
    
    private function isHoliday(string $date): bool
    {
        return SpecialDate::whereDate('date', $date)
            ->where('type', 'holiday')
            ->exists();
    }
    
    private function isHighDemand(string $date): bool
    {
        return SpecialDate::whereDate('date', $date)
            ->where('priority', 'high')
            ->exists();
    }
    
    private function isPremiumOnly(string $date): bool
    {
        return SpecialDate::whereDate('date', $date)
            ->where('type', 'premium_only')
            ->exists();
    }
}
```

## Esempio 6: Testing del Componente

```php
<?php

declare(strict_types=1);

namespace Tests\Feature\UI\Components;

use Tests\TestCase;
use Livewire\Livewire;
use Modules\UI\Filament\Forms\Components\InlineDatePicker;
use Carbon\Carbon;

class InlineDatePickerTest extends TestCase
{
    /** @test */
    public function it_renders_with_enabled_dates(): void
    {
        $enabledDates = [
            Carbon::today()->format('Y-m-d'),
            Carbon::tomorrow()->format('Y-m-d'),
        ];
        
>>>>>>> laraxot/develop
        $component = InlineDatePicker::make('test_date')
            ->enabledDates($enabledDates);
            
        $this->assertEquals($enabledDates, $component->getEnabledDates());
<<<<<<< HEAD
    public function it_validates_date_selection(): void
        $enabledDates = [Carbon::today()->format('Y-m-d')];
=======
    }
    
    /** @test */
    public function it_validates_date_selection(): void
    {
        $enabledDates = [Carbon::today()->format('Y-m-d')];
        
>>>>>>> laraxot/develop
        Livewire::test(TestFormComponent::class)
            ->assertFormFieldExists('test_date')
            ->fillForm([
                'test_date' => Carbon::yesterday()->format('Y-m-d'), // Data non abilitata
<<<<<<< HEAD
            ->assertHasFormErrors(['test_date']);
    public function it_generates_correct_month_grid(): void
        $component = InlineDatePicker::make('test_date');
        $grid = $component->generateMonthGrid(2025, 1);
=======
            ])
            ->assertHasFormErrors(['test_date']);
    }
    
    /** @test */
    public function it_generates_correct_month_grid(): void
    {
        $component = InlineDatePicker::make('test_date');
        $grid = $component->generateMonthGrid(2025, 1);
        
>>>>>>> laraxot/develop
        $this->assertArrayHasKey('year', $grid);
        $this->assertArrayHasKey('month', $grid);
        $this->assertArrayHasKey('days', $grid);
        $this->assertEquals(2025, $grid['year']);
        $this->assertEquals(1, $grid['month']);
        $this->assertIsArray($grid['days']);
<<<<<<< HEAD
## Best Practice per l'Utilizzo
=======
    }
}
```

## Best Practice per l'Utilizzo

>>>>>>> laraxot/develop
### 1. Performance
- Utilizzare closure per date dinamiche solo quando necessario
- Implementare caching per calcoli costosi di disponibilità
- Limitare il numero di date abilitate (max 1000)
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 2. UX/UI
- Fornire feedback visivo per stati speciali
- Implementare loading states per operazioni asincrone
- Utilizzare tooltip per informazioni aggiuntive
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 3. Accessibilità
- Testare con screen reader
- Verificare navigazione da tastiera
- Implementare ARIA labels appropriati
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 4. Testing
- Testare tutti i percorsi di navigazione
- Verificare comportamento con date edge case
- Implementare test di regressione per fix di bug
<<<<<<< HEAD
---
*Ultima modifica: Gennaio 2025*
*Versione: 1.0.0* 
=======

---

*Ultima modifica: Gennaio 2025*
*Versione: 1.0.0* 
>>>>>>> laraxot/develop
