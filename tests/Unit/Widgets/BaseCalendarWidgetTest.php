<?php

declare(strict_types=1);

<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\Model;
use Modules\UI\Filament\Widgets\BaseCalendarWidget;
// use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget; // Temporaneamente disabilitato per Filament v4
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
=======
namespace Modules\UI\Tests\Unit\Widgets\BaseCalendarWidgetTest;

namespace Modules\UI\Tests\Unit\Widgets;

use DateTime;
use DateInterval;
>>>>>>> a12f125f4a (.)
=======
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
>>>>>>> b93ef594b4 (.)
use Illuminate\Database\Eloquent\Model;
use Modules\UI\Filament\Widgets\BaseCalendarWidget;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
=======
use Modules\UI\Filament\Widgets\BaseCalendarWidget;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

// Mock class per testare il BaseCalendarWidget
class MockCalendarWidget extends BaseCalendarWidget
{
    public string $model = MockEventModel::class;
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
    public function fetchEvents(array $fetchInfo): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Test Event 1',
                'start' => '2025-01-01T10:00:00',
                'end' => '2025-01-01T12:00:00',
                'color' => '#3B82F6',
            ],
            [
                'id' => 2,
                'title' => 'Test Event 2',
                'start' => '2025-01-02T14:00:00',
                'end' => '2025-01-02T16:00:00',
                'color' => '#10B981',
            ],
        ];
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

    public function getFormSchema(): array
    {
        return [
            TextInput::make('title')->required(),
            DateTimePicker::make('start')->required(),
            DateTimePicker::make('end')->required(),
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    
    public function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            \Filament\Forms\Components\TextInput::make('title')->required(),
            \Filament\Forms\Components\DateTimePicker::make('start')->required(),
            \Filament\Forms\Components\DateTimePicker::make('end')->required(),
>>>>>>> a12f125f4a (.)
=======

    public function getFormSchema(): array
    {
        return [
            TextInput::make('title')->required(),
            DateTimePicker::make('start')->required(),
            DateTimePicker::make('end')->required(),
>>>>>>> b93ef594b4 (.)
=======
            \Filament\Forms\Components\TextInput::make('title')
                ->required(),
            \Filament\Forms\Components\DateTimePicker::make('start')
                ->required(),
            \Filament\Forms\Components\DateTimePicker::make('end')
                ->required(),
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        ];
    }
}

// Mock model per gli eventi
class MockEventModel extends Model
{
    protected $fillable = ['title', 'start', 'end', 'color'];
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
    public function getTable()
    {
        return 'mock_events';
    }
}

beforeEach(function () {
    $this->widget = new MockCalendarWidget();
});

describe('BaseCalendarWidget Inheritance', function () {
<<<<<<< HEAD
    // it('extends FullCalendarWidget', function () {
    //     expect($this->widget)->toBeInstanceOf(FullCalendarWidget::class);
    // }); // Temporaneamente disabilitato per Filament v4
=======
    it('extends FullCalendarWidget', function () {
        expect($this->widget)->toBeInstanceOf(FullCalendarWidget::class);
    });
>>>>>>> 1899c5f (.)

    it('extends BaseCalendarWidget', function () {
        expect($this->widget)->toBeInstanceOf(BaseCalendarWidget::class);
    });

    it('has model property set', function () {
        expect($this->widget->model)->toBe(MockEventModel::class);
    });
});

describe('BaseCalendarWidget Configuration', function () {
    it('can be configured with custom settings', function () {
        $this->widget->selectable(true);
        $this->widget->editable(true);
        $this->widget->timezone('Europe/Rome');
        $this->widget->locale('it');
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
        expect($this->widget->selectable)->toBeTrue();
        expect($this->widget->editable)->toBeTrue();
        expect($this->widget->timezone)->toBe('Europe/Rome');
        expect($this->widget->locale)->toBe('it');
    });

    it('can set calendar plugins', function () {
        $this->widget->plugins(['dayGrid', 'timeGrid', 'list', 'interaction']);
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
        expect($this->widget->plugins)->toContain('dayGrid', 'timeGrid', 'list', 'interaction');
    });

    it('can set calendar height', function () {
        $this->widget->height('600px');
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
        expect($this->widget->height)->toBe('600px');
    });

    it('can set calendar aspect ratio', function () {
        $this->widget->aspectRatio(1.35);
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
        expect($this->widget->aspectRatio)->toBe(1.35);
    });
});

describe('BaseCalendarWidget Event Management', function () {
    it('can fetch events for date range', function () {
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];
<<<<<<< HEAD

        $events = $this->widget->fetchEvents($fetchInfo);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        $events = $this->widget->fetchEvents($fetchInfo);

=======
        
        $events = $this->widget->fetchEvents($fetchInfo);
        
>>>>>>> a12f125f4a (.)
=======
        
        $events = $this->widget->fetchEvents($fetchInfo);
        
>>>>>>> origin/develop
        expect($events)->toBeArray();
        expect($events)->toHaveCount(2);
        expect($events[0]['title'])->toBe('Test Event 1');
        expect($events[1]['title'])->toBe('Test Event 2');
    });

    it('returns events with correct structure', function () {
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];
<<<<<<< HEAD
<<<<<<< HEAD

        $events = $this->widget->fetchEvents($fetchInfo);

=======
        
        $events = $this->widget->fetchEvents($fetchInfo);
        
>>>>>>> a12f125f4a (.)
=======
        
        $events = $this->widget->fetchEvents($fetchInfo);
        
>>>>>>> origin/develop
        foreach ($events as $event) {
            expect($event)->toHaveKey('id');
            expect($event)->toHaveKey('title');
            expect($event)->toHaveKey('start');
            expect($event)->toHaveKey('end');
            expect($event)->toHaveKey('color');
        }
    });

    it('handles empty event list', function () {
        $widget = new class extends BaseCalendarWidget {
            public string $model = MockEventModel::class;
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> origin/develop
            
            public function fetchEvents(array $fetchInfo): array
            {
                return [];
            }
            
            public function getFormSchema(): array
            {
                return [];
            }
        };
        
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];
        
        $events = $widget->fetchEvents($fetchInfo);
        
        expect($events)->toBeArray();
        expect($events)->toHaveCount(0);
    });
<<<<<<< HEAD
=======

    it('handles large event lists efficiently', function () {
        $widget = new class extends BaseCalendarWidget {
            public string $model = MockEventModel::class;
            
            public function fetchEvents(array $fetchInfo): array
            {
                $events = [];
                for ($i = 1; $i <= 1000; $i++) {
                    $events[] = [
                        'id' => $i,
                        'title' => "Event {$i}",
                        'start' => "2025-01-01T{$i}:00:00",
                        'end' => "2025-01-01T" . ($i + 1) . ":00:00",
                        'color' => '#3B82F6',
                    ];
                }
                return $events;
            }
            
            public function getFormSchema(): array
            {
                return [];
            }
        };
        
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];
        
        $startTime = microtime(true);
        $events = $widget->fetchEvents($fetchInfo);
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;
        
        expect($events)->toHaveCount(1000);
        expect($executionTime)->toBeLessThan(1.0); // Dovrebbe essere veloce
    });
>>>>>>> origin/develop
});

describe('BaseCalendarWidget Form Schema', function () {
    it('provides form schema for event creation', function () {
        $formSchema = $this->widget->getFormSchema();
        
        expect($formSchema)->toBeArray();
        expect($formSchema)->toHaveCount(3);
    });

    it('includes required form fields', function () {
        $formSchema = $this->widget->getFormSchema();
        
        $fieldNames = collect($formSchema)->map(fn($field) => $field->getName())->toArray();
        
        expect($fieldNames)->toContain('title', 'start', 'end');
    });

    it('has title field with required validation', function () {
        $formSchema = $this->widget->getFormSchema();
        
        $titleField = collect($formSchema)->first(fn($field) => $field->getName() === 'title');
        
        expect($titleField)->not->toBeNull();
        expect($titleField->isRequired())->toBeTrue();
    });
<<<<<<< HEAD
=======

    it('has start date field with required validation', function () {
        $formSchema = $this->widget->getFormSchema();
        
        $startField = collect($formSchema)->first(fn($field) => $field->getName() === 'start');
        
        expect($startField)->not->toBeNull();
        expect($startField->isRequired())->toBeTrue();
    });

    it('has end date field with required validation', function () {
        $formSchema = $this->widget->getFormSchema();
        
        $endField = collect($formSchema)->first(fn($field) => $field->getName() === 'end');
        
        expect($endField)->not->toBeNull();
        expect($endField->isRequired())->toBeTrue();
    });
});

describe('BaseCalendarWidget Calendar Options', function () {
    it('can set first day of week', function () {
        $this->widget->firstDay(1); // Monday
        
        expect($this->widget->firstDay)->toBe(1);
    });

    it('can set business hours', function () {
        $businessHours = [
            'dow' => [1, 2, 3, 4, 5], // Monday to Friday
            'start' => '09:00',
            'end' => '17:00',
        ];
        
        $this->widget->businessHours($businessHours);
        
        expect($this->widget->businessHours)->toBe($businessHours);
    });

    it('can set header toolbar configuration', function () {
        $headerToolbar = [
            'left' => 'prev,next today',
            'center' => 'title',
            'right' => 'dayGridMonth,timeGridWeek,timeGridDay',
        ];
        
        $this->widget->headerToolbar($headerToolbar);
        
        expect($this->widget->headerToolbar)->toBe($headerToolbar);
    });

    it('can set footer toolbar configuration', function () {
        $footerToolbar = [
            'left' => 'prev,next today',
            'center' => 'title',
            'right' => 'dayGridMonth,timeGridWeek,timeGridDay',
        ];
        
        $this->widget->footerToolbar($footerToolbar);
        
        expect($this->widget->footerToolbar)->toBe($footerToolbar);
    });

    it('can set button text customization', function () {
        $buttonText = [
            'today' => 'Oggi',
            'month' => 'Mese',
            'week' => 'Settimana',
            'day' => 'Giorno',
        ];
        
        $this->widget->buttonText($buttonText);
        
        expect($this->widget->buttonText)->toBe($buttonText);
    });

    it('can set day names', function () {
        $dayNames = ['Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'];
        
        $this->widget->dayNames($dayNames);
        
        expect($this->widget->dayNames)->toBe($dayNames);
    });

    it('can set month names', function () {
        $monthNames = [
            'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno',
            'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'
        ];
        
        $this->widget->monthNames($monthNames);
        
        expect($this->widget->monthNames)->toBe($monthNames);
    });
});

describe('BaseCalendarWidget Event Handling', function () {
    it('can handle event click', function () {
        $eventClickHandler = "function(info) { console.log('Event clicked:', info.event.title); }";
        
        $this->widget->eventClick($eventClickHandler);
        
        expect($this->widget->eventClick)->toBe($eventClickHandler);
    });

    it('can handle event mount', function () {
        $eventMountHandler = "function(info) { info.el.style.backgroundColor = info.event.backgroundColor; }";
        
        $this->widget->eventDidMount($eventMountHandler);
        
        expect($this->widget->eventDidMount)->toBe($eventMountHandler);
    });

    it('can handle event unmount', function () {
        $eventUnmountHandler = "function(info) { console.log('Event unmounted:', info.event.title); }";
        
        $this->widget->eventDidUnmount($eventUnmountHandler);
        
        expect($this->widget->eventDidUnmount)->toBe($eventUnmountHandler);
    });

    it('can handle date click', function () {
        $dateClickHandler = "function(info) { console.log('Date clicked:', info.dateStr); }";
        
        $this->widget->dateClick($dateClickHandler);
        
        expect($this->widget->dateClick)->toBe($dateClickHandler);
    });

    it('can handle date selection', function () {
        $selectHandler = "function(info) { console.log('Date range selected:', info.startStr, 'to', info.endStr); }";
        
        $this->widget->select($selectHandler);
        
        expect($this->widget->select)->toBe($selectHandler);
    });
});

describe('BaseCalendarWidget Validation', function () {
    it('validates event data structure', function () {
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];
        
        $events = $this->widget->fetchEvents($fetchInfo);
        
        foreach ($events as $event) {
            expect($event['id'])->toBeInt();
            expect($event['title'])->toBeString();
            expect($event['start'])->toBeString();
            expect($event['end'])->toBeString();
            expect($event['color'])->toBeString();
        }
    });

    it('validates date format in events', function () {
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];
        
        $events = $this->widget->fetchEvents($fetchInfo);
        
        foreach ($events as $event) {
            // Validate ISO 8601 date format
            expect($event['start'])->toMatch('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}$/');
            expect($event['end'])->toMatch('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}$/');
        }
    });

    it('validates color format in events', function () {
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];
        
        $events = $this->widget->fetchEvents($fetchInfo);
        
        foreach ($events as $event) {
            // Validate hex color format
            expect($event['color'])->toMatch('/^#[0-9A-Fa-f]{6}$/');
        }
    });
>>>>>>> origin/develop
});

describe('BaseCalendarWidget Performance', function () {
    it('handles large date ranges efficiently', function () {
        $widget = new class extends BaseCalendarWidget {
            public string $model = MockEventModel::class;
            
            public function fetchEvents(array $fetchInfo): array
            {
<<<<<<< HEAD
=======
                // Simulate complex query
>>>>>>> origin/develop
                $events = [];
                $start = new DateTime($fetchInfo['start']);
                $end = new DateTime($fetchInfo['end']);
                $interval = $start->diff($end);
                $days = $interval->days;
                
                for ($i = 0; $i < min($days, 100); $i++) {
                    $events[] = [
                        'id' => $i + 1,
                        'title' => "Event Day {$i}",
                        'start' => $start->format('Y-m-d\TH:i:s'),
                        'end' => $start->format('Y-m-d\TH:i:s'),
                        'color' => '#3B82F6',
                    ];
                    $start->add(new DateInterval('P1D'));
                }
                return $events;
            }
            
            public function getFormSchema(): array
            {
                return [];
            }
        };
        
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
<<<<<<< HEAD
            'end' => '2025-12-31T23:59:59',
        ];
        
        $startTime = microtime(true);
        $events = $widget->fetchEvents($fetchInfo);
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;
        
        expect($events)->toHaveCount(100);
        expect($executionTime)->toBeLessThan(1.0);
    });
});

describe('BaseCalendarWidget Inheritance', function () {
    it('extends FullCalendarWidget', function () {
        expect($this->widget)->toBeInstanceOf(FullCalendarWidget::class);
    });

    it('extends BaseCalendarWidget', function () {
        expect($this->widget)->toBeInstanceOf(BaseCalendarWidget::class);
    });

    it('has model property set', function () {
        expect($this->widget->model)->toBe(MockEventModel::class);
    });
});

describe('BaseCalendarWidget Configuration', function () {
    it('can be configured with custom settings', function () {
        $this->widget->selectable(true);
        $this->widget->editable(true);
        $this->widget->timezone('Europe/Rome');
        $this->widget->locale('it');
        
        expect($this->widget->selectable)->toBeTrue();
        expect($this->widget->editable)->toBeTrue();
        expect($this->widget->timezone)->toBe('Europe/Rome');
        expect($this->widget->locale)->toBe('it');
    });

    it('can set calendar plugins', function () {
        $this->widget->plugins(['dayGrid', 'timeGrid', 'list', 'interaction']);
        
        expect($this->widget->plugins)->toContain('dayGrid', 'timeGrid', 'list', 'interaction');
    });

    it('can set calendar height', function () {
        $this->widget->height('600px');
        
        expect($this->widget->height)->toBe('600px');
    });

    it('can set calendar aspect ratio', function () {
        $this->widget->aspectRatio(1.35);
        
        expect($this->widget->aspectRatio)->toBe(1.35);
    });
});

describe('BaseCalendarWidget Event Management', function () {
    it('can fetch events for date range', function () {
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];
        
        $events = $this->widget->fetchEvents($fetchInfo);
        
=======

        $events = $this->widget->fetchEvents($fetchInfo);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($events)->toBeArray();
        expect($events)->toHaveCount(2);
        expect($events[0]['title'])->toBe('Test Event 1');
        expect($events[1]['title'])->toBe('Test Event 2');
    });

    it('returns events with correct structure', function () {
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];

        $events = $this->widget->fetchEvents($fetchInfo);

        foreach ($events as $event) {
            expect($event)->toHaveKey('id');
            expect($event)->toHaveKey('title');
            expect($event)->toHaveKey('start');
            expect($event)->toHaveKey('end');
            expect($event)->toHaveKey('color');
        }
    });

    it('handles empty event list', function () {
        $widget = new class extends BaseCalendarWidget {
            public string $model = MockEventModel::class;
<<<<<<< HEAD

=======
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
            public function fetchEvents(array $fetchInfo): array
            {
                return [];
            }

            public function getFormSchema(): array
            {
                return [];
            }
        };

        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];

<<<<<<< HEAD
        $events = $widget->fetchEvents($fetchInfo);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $events = $widget->fetchEvents($fetchInfo);

=======
>>>>>>> a12f125f4a (.)
=======
        $events = $widget->fetchEvents($fetchInfo);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($events)->toBeArray();
        expect($events)->toHaveCount(0);
    });

    it('handles large event lists efficiently', function () {
<<<<<<< HEAD
        $widget = new class extends BaseCalendarWidget {
            public string $model = MockEventModel::class;

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $widget = new class extends BaseCalendarWidget {
            public string $model = MockEventModel::class;

=======
$widget = new class extends BaseCalendarWidget {
            public string $model = MockEventModel::class;
            
>>>>>>> a12f125f4a (.)
=======
        $widget = new class extends BaseCalendarWidget {
            public string $model = MockEventModel::class;

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
            public function fetchEvents(array $fetchInfo): array
            {
                $events = [];
                for ($i = 1; $i <= 1000; $i++) {
                    $events[] = [
                        'id' => $i,
                        'title' => "Event {$i}",
                        'start' => "2025-01-01T{$i}:00:00",
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
                        'end' => '2025-01-01T' . ($i + 1) . ':00:00',
                        'color' => '#3B82F6',
                    ];
                }

                return $events;
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)

            public function getFormSchema(): array
            {
                return [];
            }
        };

        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];

        $startTime = microtime(true);
        $events = $widget->fetchEvents($fetchInfo);
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

        expect($events)->toHaveCount(1000);
        expect($executionTime)->toBeLessThan(1.0); // Dovrebbe essere veloce
    });
});

describe('BaseCalendarWidget Form Schema', function () {
    it('provides form schema for event creation', function () {
        $formSchema = $this->widget->getFormSchema();

        expect($formSchema)->toBeArray();
        expect($formSchema)->toHaveCount(3);
    });

    it('includes required form fields', function () {
        $formSchema = $this->widget->getFormSchema();

<<<<<<< HEAD
        $fieldNames = collect($formSchema)->map(fn($field) => $field->getName())->toArray();

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $fieldNames = collect($formSchema)->map(fn($field) => $field->getName())->toArray();

=======
>>>>>>> a12f125f4a (.)
=======
        $fieldNames = collect($formSchema)->map(fn($field) => $field->getName())->toArray();

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($fieldNames)->toContain('title', 'start', 'end');
    });

    it('has title field with required validation', function () {
        $formSchema = $this->widget->getFormSchema();

<<<<<<< HEAD
        $titleField = collect($formSchema)->first(fn($field) => $field->getName() === 'title');

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $titleField = collect($formSchema)->first(fn($field) => $field->getName() === 'title');

=======
>>>>>>> a12f125f4a (.)
=======
        $titleField = collect($formSchema)->first(fn($field) => $field->getName() === 'title');

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($titleField)->not->toBeNull();
        expect($titleField->isRequired())->toBeTrue();
    });

    it('has start date field with required validation', function () {
        $formSchema = $this->widget->getFormSchema();

<<<<<<< HEAD
        $startField = collect($formSchema)->first(fn($field) => $field->getName() === 'start');

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $startField = collect($formSchema)->first(fn($field) => $field->getName() === 'start');

=======
>>>>>>> a12f125f4a (.)
=======
        $startField = collect($formSchema)->first(fn($field) => $field->getName() === 'start');

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($startField)->not->toBeNull();
        expect($startField->isRequired())->toBeTrue();
    });

    it('has end date field with required validation', function () {
        $formSchema = $this->widget->getFormSchema();

<<<<<<< HEAD
        $endField = collect($formSchema)->first(fn($field) => $field->getName() === 'end');

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $endField = collect($formSchema)->first(fn($field) => $field->getName() === 'end');

=======
>>>>>>> a12f125f4a (.)
=======
        $endField = collect($formSchema)->first(fn($field) => $field->getName() === 'end');

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($endField)->not->toBeNull();
        expect($endField->isRequired())->toBeTrue();
    });
});

describe('BaseCalendarWidget Calendar Options', function () {
    it('can set first day of week', function () {
        $this->widget->firstDay(1); // Monday

        expect($this->widget->firstDay)->toBe(1);
    });

    it('can set business hours', function () {
        $businessHours = [
            'dow' => [1, 2, 3, 4, 5], // Monday to Friday
            'start' => '09:00',
            'end' => '17:00',
        ];

<<<<<<< HEAD
        $this->widget->businessHours($businessHours);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->widget->businessHours($businessHours);

=======
>>>>>>> a12f125f4a (.)
=======
        $this->widget->businessHours($businessHours);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($this->widget->businessHours)->toBe($businessHours);
    });

    it('can set header toolbar configuration', function () {
        $headerToolbar = [
            'left' => 'prev,next today',
            'center' => 'title',
            'right' => 'dayGridMonth,timeGridWeek,timeGridDay',
        ];

<<<<<<< HEAD
        $this->widget->headerToolbar($headerToolbar);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->widget->headerToolbar($headerToolbar);

=======
>>>>>>> a12f125f4a (.)
=======
        $this->widget->headerToolbar($headerToolbar);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($this->widget->headerToolbar)->toBe($headerToolbar);
    });

    it('can set footer toolbar configuration', function () {
        $footerToolbar = [
            'left' => 'prev,next today',
            'center' => 'title',
            'right' => 'dayGridMonth,timeGridWeek,timeGridDay',
        ];

<<<<<<< HEAD
        $this->widget->footerToolbar($footerToolbar);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->widget->footerToolbar($footerToolbar);

=======
>>>>>>> a12f125f4a (.)
=======
        $this->widget->footerToolbar($footerToolbar);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($this->widget->footerToolbar)->toBe($footerToolbar);
    });

    it('can set button text customization', function () {
        $buttonText = [
            'today' => 'Oggi',
            'month' => 'Mese',
            'week' => 'Settimana',
            'day' => 'Giorno',
        ];

<<<<<<< HEAD
        $this->widget->buttonText($buttonText);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->widget->buttonText($buttonText);

=======
>>>>>>> a12f125f4a (.)
=======
        $this->widget->buttonText($buttonText);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($this->widget->buttonText)->toBe($buttonText);
    });

    it('can set day names', function () {
        $dayNames = ['Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'];

<<<<<<< HEAD
        $this->widget->dayNames($dayNames);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->widget->dayNames($dayNames);

=======
>>>>>>> a12f125f4a (.)
=======
        $this->widget->dayNames($dayNames);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($this->widget->dayNames)->toBe($dayNames);
    });

    it('can set month names', function () {
        $monthNames = [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
            'Gennaio',
            'Febbraio',
            'Marzo',
            'Aprile',
            'Maggio',
            'Giugno',
            'Luglio',
            'Agosto',
            'Settembre',
            'Ottobre',
            'Novembre',
            'Dicembre',
        ];

        $this->widget->monthNames($monthNames);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno',
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)

        expect($this->widget->monthNames)->toBe($monthNames);
    });
});

describe('BaseCalendarWidget Event Handling', function () {
    it('can handle event click', function () {
        $eventClickHandler = "function(info) { console.log('Event clicked:', info.event.title); }";

<<<<<<< HEAD
        $this->widget->eventClick($eventClickHandler);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->widget->eventClick($eventClickHandler);

=======
>>>>>>> a12f125f4a (.)
=======
        $this->widget->eventClick($eventClickHandler);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($this->widget->eventClick)->toBe($eventClickHandler);
    });

    it('can handle event mount', function () {
<<<<<<< HEAD
        $eventMountHandler = 'function(info) { info.el.style.backgroundColor = info.event.backgroundColor; }';

        $this->widget->eventDidMount($eventMountHandler);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $eventMountHandler = 'function(info) { info.el.style.backgroundColor = info.event.backgroundColor; }';

        $this->widget->eventDidMount($eventMountHandler);
=======
>>>>>>> a12f125f4a (.)
=======
        $eventMountHandler = 'function(info) { info.el.style.backgroundColor = info.event.backgroundColor; }';

        $this->widget->eventDidMount($eventMountHandler);
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)

        expect($this->widget->eventDidMount)->toBe($eventMountHandler);
    });

    it('can handle event unmount', function () {
        $eventUnmountHandler = "function(info) { console.log('Event unmounted:', info.event.title); }";

<<<<<<< HEAD
        $this->widget->eventDidUnmount($eventUnmountHandler);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->widget->eventDidUnmount($eventUnmountHandler);

=======
>>>>>>> a12f125f4a (.)
=======
        $this->widget->eventDidUnmount($eventUnmountHandler);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($this->widget->eventDidUnmount)->toBe($eventUnmountHandler);
    });

    it('can handle date click', function () {
        $dateClickHandler = "function(info) { console.log('Date clicked:', info.dateStr); }";

<<<<<<< HEAD
        $this->widget->dateClick($dateClickHandler);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->widget->dateClick($dateClickHandler);

=======
>>>>>>> a12f125f4a (.)
=======
        $this->widget->dateClick($dateClickHandler);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($this->widget->dateClick)->toBe($dateClickHandler);
    });

    it('can handle date selection', function () {
        $selectHandler = "function(info) { console.log('Date range selected:', info.startStr, 'to', info.endStr); }";

<<<<<<< HEAD
        $this->widget->select($selectHandler);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->widget->select($selectHandler);

=======
>>>>>>> a12f125f4a (.)
=======
        $this->widget->select($selectHandler);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        expect($this->widget->select)->toBe($selectHandler);
    });
});

describe('BaseCalendarWidget Validation', function () {
    it('validates event data structure', function () {
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];

<<<<<<< HEAD
        $events = $this->widget->fetchEvents($fetchInfo);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $events = $this->widget->fetchEvents($fetchInfo);

=======
>>>>>>> a12f125f4a (.)
=======
        $events = $this->widget->fetchEvents($fetchInfo);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        foreach ($events as $event) {
            expect($event['id'])->toBeInt();
            expect($event['title'])->toBeString();
            expect($event['start'])->toBeString();
            expect($event['end'])->toBeString();
            expect($event['color'])->toBeString();
        }
    });

    it('validates date format in events', function () {
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];

<<<<<<< HEAD
        $events = $this->widget->fetchEvents($fetchInfo);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $events = $this->widget->fetchEvents($fetchInfo);

=======
>>>>>>> a12f125f4a (.)
=======
        $events = $this->widget->fetchEvents($fetchInfo);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        foreach ($events as $event) {
            // Validate ISO 8601 date format
            expect($event['start'])->toMatch('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}$/');
            expect($event['end'])->toMatch('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}$/');
        }
    });

    it('validates color format in events', function () {
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];

<<<<<<< HEAD
        $events = $this->widget->fetchEvents($fetchInfo);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $events = $this->widget->fetchEvents($fetchInfo);

=======
>>>>>>> a12f125f4a (.)
=======
        $events = $this->widget->fetchEvents($fetchInfo);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        foreach ($events as $event) {
            // Validate hex color format
            expect($event['color'])->toMatch('/^#[0-9A-Fa-f]{6}$/');
        }
    });
});

describe('BaseCalendarWidget Performance', function () {
    it('handles large date ranges efficiently', function () {
<<<<<<< HEAD
        $widget = new class extends BaseCalendarWidget {
            public string $model = MockEventModel::class;

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $widget = new class extends BaseCalendarWidget {
            public string $model = MockEventModel::class;

=======
$widget = new class extends BaseCalendarWidget {
            public string $model = MockEventModel::class;
            
>>>>>>> a12f125f4a (.)
=======
        $widget = new class extends BaseCalendarWidget {
            public string $model = MockEventModel::class;

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
            public function fetchEvents(array $fetchInfo): array
            {
                // Simulate complex query
                $events = [];
                $start = new DateTime($fetchInfo['start']);
                $end = new DateTime($fetchInfo['end']);
                $interval = $start->diff($end);
                $days = $interval->days;

                for ($i = 0; $i < min($days, 100); $i++) {
                    $events[] = [
                        'id' => $i + 1,
                        'title' => "Event Day {$i}",
                        'start' => $start->format('Y-m-d\TH:i:s'),
                        'end' => $start->format('Y-m-d\TH:i:s'),
                        'color' => '#3B82F6',
                    ];
                    $start->add(new DateInterval('P1D'));
                }

<<<<<<< HEAD
                return $events;
            }

=======
<<<<<<< HEAD
<<<<<<< HEAD
                return $events;
            }

=======
>>>>>>> a12f125f4a (.)
=======
                return $events;
            }

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
            public function getFormSchema(): array
            {
                return [];
            }
        };

        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-12-31T23:59:59', // Full year
        ];

<<<<<<< HEAD
=======
=======
            'end' => '2025-12-31T23:59:59', // Full year
        ];
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        $startTime = microtime(true);
        $events = $widget->fetchEvents($fetchInfo);
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        expect($events)->toHaveCount(100); // Limited to 100 for performance
        expect($executionTime)->toBeLessThan(1.0); // Dovrebbe essere veloce
    });

    it('caches event data efficiently', function () {
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        // First fetch
        $startTime = microtime(true);
        $events1 = $this->widget->fetchEvents($fetchInfo);
        $endTime = microtime(true);
        $firstFetchTime = $endTime - $startTime;
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        // Second fetch (should be cached)
        $startTime = microtime(true);
        $events2 = $this->widget->fetchEvents($fetchInfo);
        $endTime = microtime(true);
        $secondFetchTime = $endTime - $startTime;
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        expect($events1)->toBe($events2);
        expect($secondFetchTime)->toBeLessThanOrEqual($firstFetchTime);
    });
});

describe('BaseCalendarWidget Integration', function () {
    it('works with different model types', function () {
        $widgets = [
<<<<<<< HEAD
            new MockCalendarWidget(),
            new class extends BaseCalendarWidget {
                public string $model = MockEventModel::class;

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            new MockCalendarWidget(),
            new class extends BaseCalendarWidget {
                public string $model = MockEventModel::class;
=======
>>>>>>> a12f125f4a (.)
=======
            new MockCalendarWidget(),
            new class extends BaseCalendarWidget {
                public string $model = MockEventModel::class;
>>>>>>> b93ef594b4 (.)

=======
            new MockCalendarWidget(),
            new class extends BaseCalendarWidget {
                public string $model = MockEventModel::class;
                
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                public function fetchEvents(array $fetchInfo): array
                {
                    return [];
                }
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
                
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                public function getFormSchema(): array
                {
                    return [];
                }
            },
        ];
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        foreach ($widgets as $widget) {
            expect($widget)->toBeInstanceOf(BaseCalendarWidget::class);
            expect($widget)->toHaveMethod('fetchEvents');
            expect($widget)->toHaveMethod('getFormSchema');
        }
    });

    it('maintains consistent behavior across instances', function () {
<<<<<<< HEAD
        $widget1 = new MockCalendarWidget();
        $widget2 = new MockCalendarWidget();

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $widget1 = new MockCalendarWidget();
        $widget2 = new MockCalendarWidget();
=======
>>>>>>> a12f125f4a (.)
=======
        $widget1 = new MockCalendarWidget();
        $widget2 = new MockCalendarWidget();
>>>>>>> b93ef594b4 (.)

=======
        $widget1 = new MockCalendarWidget();
        $widget2 = new MockCalendarWidget();
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        $fetchInfo = [
            'start' => '2025-01-01T00:00:00',
            'end' => '2025-01-31T23:59:59',
        ];
<<<<<<< HEAD

        $events1 = $widget1->fetchEvents($fetchInfo);
        $events2 = $widget2->fetchEvents($fetchInfo);

=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
        $events1 = $widget1->fetchEvents($fetchInfo);
        $events2 = $widget2->fetchEvents($fetchInfo);

=======
>>>>>>> a12f125f4a (.)
=======
        $events1 = $widget1->fetchEvents($fetchInfo);
        $events2 = $widget2->fetchEvents($fetchInfo);

>>>>>>> b93ef594b4 (.)
=======
        
        $events1 = $widget1->fetchEvents($fetchInfo);
        $events2 = $widget2->fetchEvents($fetchInfo);
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        expect($events1)->toBe($events2);
        expect($events1)->toHaveCount(2);
        expect($events2)->toHaveCount(2);
    });
});
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
