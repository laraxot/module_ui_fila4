<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Tests\TestCase;
use Filament\Schemas\Schema;
use Illuminate\Support\Collection;
use Carbon\Exceptions\InvalidFormatException;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Carbon\Carbon;
use Filament\Forms\Components\Field;
use Illuminate\Support\Facades\App;
use Modules\UI\Filament\Forms\Components\InlineDatePicker;
<<<<<<< HEAD

uses(TestCase::class);
=======
=======
use Filament\Forms\Components\Field;
use Modules\UI\Filament\Forms\Components\InlineDatePicker;
=======
>>>>>>> b93ef594b4 (.)
use Carbon\Carbon;
use Filament\Forms\Components\Field;
use Illuminate\Support\Facades\App;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\UI\Filament\Forms\Components\InlineDatePicker;
>>>>>>> b93ef594b4 (.)

uses(TestCase::class);
=======
use Filament\Forms\Components\Field;
use Filament\Forms\Form;
use Modules\UI\Filament\Forms\Components\InlineDatePicker;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;

uses(Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

test('it can be instantiated', function (): void {
    $component = InlineDatePicker::make('test');
    expect($component)->toBeInstanceOf(Field::class);
    expect($component)->toBeInstanceOf(InlineDatePicker::class);
});

test('it can set and get enabled dates', function (): void {
    $dates = ['2025-06-01', '2025-06-15', '2025-06-30'];
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    $component = InlineDatePicker::make('test')->enabledDates($dates);
    expect($component->getEnabledDates()->toArray())->toBe($dates);
});

test('it accepts closure for enabled dates', function (): void {
    $dates = ['2025-06-01', '2025-06-15', '2025-06-30'];
<<<<<<< HEAD

    $component = InlineDatePicker::make('test')->enabledDates(fn() => $dates);
=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
    $component = InlineDatePicker::make('test')->enabledDates(fn() => $dates);
=======
    $component = InlineDatePicker::make('test')->enabledDates(fn () => $dates);
>>>>>>> a12f125f4a (.)
=======
    $component = InlineDatePicker::make('test')->enabledDates(fn() => $dates);
>>>>>>> b93ef594b4 (.)
=======
    
    $component = InlineDatePicker::make('test')->enabledDates(fn () => $dates);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    expect($component->getEnabledDates()->toArray())->toBe($dates);
});

test('it checks if date is enabled', function (): void {
    $dates = ['2025-06-15'];
<<<<<<< HEAD

    $component = InlineDatePicker::make('test')->enabledDates($dates);

=======
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
    $component = InlineDatePicker::make('test')->enabledDates($dates);
=======
    $component = InlineDatePicker::make('test')
        ->enabledDates($dates);
>>>>>>> a12f125f4a (.)
=======
    $component = InlineDatePicker::make('test')->enabledDates($dates);
>>>>>>> b93ef594b4 (.)

=======
    
    $component = InlineDatePicker::make('test')
        ->enabledDates($dates);
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    expect($component->isDateEnabled('2025-06-15'))->toBeTrue();
    expect($component->isDateEnabled('2025-06-16'))->toBeFalse();
});

test('it generates calendar data and marks enabled dates', function (): void {
    $component = InlineDatePicker::make('test')->enabledDates(['2025-06-15']);
    $component->currentViewMonth('2025-06');
    $data = $component->generateCalendarData();

<<<<<<< HEAD
    expect($data)->toHaveKeys(['year', 'month', 'weeks', 'monthName', 'weekdays']);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    expect($data)->toHaveKeys(['year', 'month', 'weeks', 'monthName', 'weekdays']);
=======
    expect($data)->toHaveKeys(['year','month','weeks','monthName','weekdays']);
>>>>>>> a12f125f4a (.)
=======
    expect($data)->toHaveKeys(['year', 'month', 'weeks', 'monthName', 'weekdays']);
>>>>>>> b93ef594b4 (.)
=======
    expect($data)->toHaveKeys(['year','month','weeks','monthName','weekdays']);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    $found = false;
    foreach ($data['weeks'] as $week) {
        foreach ($week as $day) {
            if (($day['datetime'] ?? $day['dateString'] ?? null) === '2025-06-15') {
                $found = true;
                expect($day['isEnabled'])->toBeTrue();
            }
        }
    }
    expect($found)->toBeTrue('Enabled date 2025-06-15 not found in generated calendar data');
});

test('it respects locale in calendar data', function (): void {
<<<<<<< HEAD
    App::setLocale('it');
=======
<<<<<<< HEAD
    App::setLocale('it');
=======
    \Illuminate\Support\Facades\App::setLocale('it');
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    $component = InlineDatePicker::make('test');
    $data = $component->generateCalendarData();
    expect($data)->toHaveKey('monthName');
});

test('it can be used in a form', function (): void {
<<<<<<< HEAD
    $form = Schema::make()->components([
        InlineDatePicker::make('appointment_date')->enabledDates(['2025-06-15']),
    ]);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $form = Schema::make()->components([
        InlineDatePicker::make('appointment_date')->enabledDates(['2025-06-15']),
    ]);
=======
    $form = Schema::make()
        ->components([
            InlineDatePicker::make('appointment_date')
                ->enabledDates(['2025-06-15'])
        ]);
>>>>>>> a12f125f4a (.)
=======
    $form = Schema::make()->components([
        InlineDatePicker::make('appointment_date')->enabledDates(['2025-06-15']),
    ]);
>>>>>>> b93ef594b4 (.)

=======
    $form = Form::make()
        ->schema([
            InlineDatePicker::make('appointment_date')
                ->enabledDates(['2025-06-15'])
        ]);
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    expect($form->getComponents())->toHaveCount(1);
    expect($form->getComponent('appointment_date'))->toBeInstanceOf(InlineDatePicker::class);
});

test('it handles empty enabled dates', function (): void {
<<<<<<< HEAD
    $component = InlineDatePicker::make('test')->enabledDates([]);

    expect($component->getEnabledDates())->toBeInstanceOf(Collection::class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $component = InlineDatePicker::make('test')->enabledDates([]);
=======
    $component = InlineDatePicker::make('test')
        ->enabledDates([]);
>>>>>>> a12f125f4a (.)
=======
    $component = InlineDatePicker::make('test')->enabledDates([]);
>>>>>>> b93ef594b4 (.)

    expect($component->getEnabledDates())->toBeInstanceOf(Collection::class);
=======
    $component = InlineDatePicker::make('test')
        ->enabledDates([]);
        
    expect($component->getEnabledDates())->toBeInstanceOf(\Illuminate\Support\Collection::class);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    expect($component->getEnabledDates()->isEmpty())->toBeTrue();
    expect($component->isDateEnabled('2025-06-15'))->toBeTrue();
});

test('it throws on invalid enabled dates input', function (): void {
    $component = InlineDatePicker::make('test')->enabledDates(['invalid-date']);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    expect($component->getEnabledDates()->toArray(...))->toThrow(InvalidFormatException::class);
});

test('it handles different date formats', function (): void {
    $component = InlineDatePicker::make('test')->enabledDates(['2025-06-15']);
<<<<<<< HEAD

=======
=======
    expect(fn () => $component->getEnabledDates()->toArray())
        ->toThrow(InvalidFormatException::class);
=======
    expect(fn () => $component->getEnabledDates()->toArray())
        ->toThrow(\Carbon\Exceptions\InvalidFormatException::class);
>>>>>>> origin/develop
});

test('it handles different date formats', function (): void {
    $component = InlineDatePicker::make('test')
        ->enabledDates(['2025-06-15']);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    expect($component->getEnabledDates()->toArray(...))->toThrow(InvalidFormatException::class);
});

test('it handles different date formats', function (): void {
    $component = InlineDatePicker::make('test')->enabledDates(['2025-06-15']);
>>>>>>> b93ef594b4 (.)

=======
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    expect($component->isDateEnabled('2025-06-15'))->toBeTrue();
    expect($component->isDateEnabled('15-06-2025'))->toBeFalse();
});

test('it handles time portion gracefully', function (): void {
<<<<<<< HEAD
    $component = InlineDatePicker::make('test')->enabledDates(['2025-06-15']);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $component = InlineDatePicker::make('test')->enabledDates(['2025-06-15']);
=======
    $component = InlineDatePicker::make('test')
        ->enabledDates(['2025-06-15']);
>>>>>>> a12f125f4a (.)
=======
    $component = InlineDatePicker::make('test')->enabledDates(['2025-06-15']);
>>>>>>> b93ef594b4 (.)

=======
    $component = InlineDatePicker::make('test')
        ->enabledDates(['2025-06-15']);
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    expect($component->isDateEnabled('2025-06-15 14:30:00'))->toBeTrue();
});

test('it uses carbon for localization', function (): void {
    // Arrange
    App::setLocale('it');
    $picker = InlineDatePicker::make('test_date');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

    // Act
    $weekdays = invokeMethod($picker, 'getLocalizedWeekdays', []);

<<<<<<< HEAD
=======
=======
    
    // Act
    $weekdays = invokeMethod($picker, 'getLocalizedWeekdays', []);
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    // Assert (component returns localized short names; current impl may return single-letter codes)
    expect($weekdays)->toHaveCount(7);
});

test('it generates correct calendar data', function (): void {
    // Arrange
    $picker = InlineDatePicker::make('test_date');
    $picker->currentViewMonth = '2024-01';
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

    // Act
    $calendarData = $picker->generateCalendarData();

<<<<<<< HEAD
=======
=======
    
    // Act
    $calendarData = $picker->generateCalendarData();
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    // Assert
    expect($calendarData)->toHaveKey('weeks');
    expect($calendarData)->toHaveKey('monthName');
    expect($calendarData)->toHaveKey('weekdays');
    expect(count($calendarData['weeks']))->toBeGreaterThanOrEqual(4);
    expect(count($calendarData['weeks']))->toBeLessThanOrEqual(6);
    expect($calendarData['weeks'][0])->toHaveCount(7); // 7 giorni per settimana
});

test('it handles enabled dates correctly', function (): void {
    // Arrange
    $picker = InlineDatePicker::make('test_date');
    $picker->enabledDates(['2024-01-15', '2024-01-16']);
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    // Act & Assert
    expect($picker->isDateEnabled('2024-01-15'))->toBeTrue();
    expect($picker->isDateEnabled('2024-01-16'))->toBeTrue();
    expect($picker->isDateEnabled('2024-01-14'))->toBeFalse();
});

test('it is dry no code duplication', function (): void {
    // Verifica che non ci sia duplicazione di logica tra PHP e JavaScript
<<<<<<< HEAD
    $viewContent = file_get_contents(base_path(
        'laravel/Modules/UI/resources/views/filament/forms/components/inline-date-picker.blade.php',
    ));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $viewContent = file_get_contents(base_path(
        'laravel/Modules/UI/resources/views/filament/forms/components/inline-date-picker.blade.php',
    ));
=======
    $viewContent = file_get_contents(
        base_path('laravel/Modules/UI/resources/views/filament/forms/components/inline-date-picker.blade.php')
    );
>>>>>>> a12f125f4a (.)
=======
    $viewContent = file_get_contents(base_path(
        'laravel/Modules/UI/resources/views/filament/forms/components/inline-date-picker.blade.php',
    ));
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)

    // Assert: Nessun JavaScript complesso per navigazione
    expect($viewContent)->not->toContain('navigateToMonth');
    expect($viewContent)->not->toContain('generateCalendarForMonth');

<<<<<<< HEAD
=======
=======
    $viewContent = file_get_contents(
        base_path('laravel/Modules/UI/resources/views/filament/forms/components/inline-date-picker.blade.php')
    );
    
    // Assert: Nessun JavaScript complesso per navigazione
    expect($viewContent)->not->toContain('navigateToMonth');
    expect($viewContent)->not->toContain('generateCalendarForMonth');
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    // Assert: Solo chiamate wire:click server-side
    expect($viewContent)->toContain('wire:click="previousMonth"');
    expect($viewContent)->toContain('wire:click="nextMonth"');
});

test('it is kiss simple and clear', function (): void {
    $picker = InlineDatePicker::make('test_date');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

    // Assert: API semplice
    expect($picker->enabledDates(['2024-01-01']))->toBeInstanceOf(InlineDatePicker::class);

    // Assert: Metodi pubblici minimi e chiari
    $reflection = new ReflectionClass($picker);
    $publicMethods = array_filter($reflection->getMethods(), fn($m) => $m->isPublic() && !$m->isStatic());

    // Dovrebbe esporre metodi essenziali utilizzabili
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
    foreach ([
        'enabledDates',
        'isDateEnabled',
        'generateCalendarData',
        'getViewData',
        'previousMonth',
        'nextMonth',
    ] as $method) {
        expect(method_exists($picker, $method))->toBeTrue("Metodo essenziale mancante: {$method}");
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    foreach (['enabledDates','isDateEnabled','generateCalendarData','getViewData','previousMonth','nextMonth'] as $method) {
        expect(method_exists($picker, $method))->toBeTrue("Metodo essenziale mancante: $method");
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    
    // Assert: API semplice
    expect($picker->enabledDates(['2024-01-01']))->toBeInstanceOf(InlineDatePicker::class);
    
    // Assert: Metodi pubblici minimi e chiari
    $reflection = new \ReflectionClass($picker);
    $publicMethods = array_filter($reflection->getMethods(), fn($m) => $m->isPublic() && !$m->isStatic());
    
    // Dovrebbe esporre metodi essenziali utilizzabili
    foreach (['enabledDates','isDateEnabled','generateCalendarData','getViewData','previousMonth','nextMonth'] as $method) {
        expect(method_exists($picker, $method))->toBeTrue("Metodo essenziale mancante: $method");
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    }
});

/**
 * Invoca un metodo privato/protetto per testing.
 */
function invokeMethod(object $object, string $methodName, array $parameters = []): mixed
{
<<<<<<< HEAD
    $reflection = new ReflectionClass(get_class($object));
=======
<<<<<<< HEAD
    $reflection = new ReflectionClass(get_class($object));
=======
    $reflection = new \ReflectionClass(get_class($object));
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    $method = $reflection->getMethod($methodName);
    $method->setAccessible(true);

    return $method->invokeArgs($object, $parameters);
}
