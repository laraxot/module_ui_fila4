<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TimePicker;
use Modules\UI\Actions\Datetime\GetDaysMappingAction;
use Modules\UI\Rules\OpeningHoursRule;
=======
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Components\Component;
use Modules\UI\Actions\Datetime\GetDaysMappingAction;
use Modules\UI\Rules\OpeningHoursRule;
use Modules\Xot\Filament\Forms\Components\XotBaseField;
>>>>>>> laraxot/develop

/**
 * --.
 */
<<<<<<< HEAD
final class OpeningHoursField extends Field
=======
final class OpeningHoursField extends XotBaseField
>>>>>>> laraxot/develop
{
    /**
     * Vista Blade per il rendering del componente.
     */
    protected string $view = 'ui::filament.forms.components.opening-hours-field';

    protected function setUp(): void
    {
        parent::setUp();
        $days = app(GetDaysMappingAction::class)->execute();

        $form = [];
<<<<<<< HEAD
        $native = false;
        $live = false;

        foreach ($days as $dayKey => $dayLabel) {
            $form[] = Placeholder::make($dayKey.'_label')
                ->label('')
                ->content($dayLabel)
                ->extraAttributes(['class' => 'font-medium text-gray-900 dark:text-gray-100 text-center py-2'])
                ->columnSpan(1);

            $form[] = TimePicker::make("{$dayKey}.morning_from")
                ->native($native)
                // ->placeholder('08:00')
                // ->placeholder('09:30')
                ->placeholder('--:--')
                ->format('H:i')
                ->seconds(false)
                ->minutesStep(15)
                ->nullable()
                ->live($live);

            $form[] = TimePicker::make("{$dayKey}.morning_to")
                ->native($native)
                // ->placeholder('13:30')
                ->placeholder('--:--')
                ->format('H:i')
                ->seconds(false)
                ->minutesStep(15)
                ->nullable()
                ->live($live);

            $form[] = TimePicker::make("{$dayKey}.afternoon_from")
                ->native($native)
                // ->placeholder('15:00')
                ->placeholder('--:--')
                ->format('H:i')
                ->seconds(false)
                ->minutesStep(15)
                ->nullable()
                ->live($live);

            $form[] = TimePicker::make("{$dayKey}.afternoon_to")
                ->native($native)
                // ->placeholder('19:00')
                ->placeholder('--:--')
                ->format('H:i')
                ->seconds(false)
                ->minutesStep(15)
                ->nullable()
                ->live($live);
=======
        foreach ($days as $dayKey => $dayLabel) {
            $form = array_merge($form, $this->getDaySchema($dayKey, $dayLabel));
>>>>>>> laraxot/develop
        }

        $this->schema($form)->columns(5);

<<<<<<< HEAD
        $this->afterStateUpdated(function ($_state): void {
            // dddx($state);
        });
        $this->afterStateHydrated(function (OpeningHoursField $_component, $_state): void {
            // Qui puoi normalizzare lo stato iniziale se serve
            // dddx($state);
        });
        $this->rules([
            /*
             * function(){
             * $data = $this->getState();
             * $this->addError(null, 'test');
             * return false;
             * }*/
            new OpeningHoursRule(),
        ]);
    }
=======
        $this->rules([
            new OpeningHoursRule(),
        ]);
    }

    /**
     * @return array<int, Component>
     */
    private function getDaySchema(string $dayKey, string $dayLabel): array
    {
        return [
            Placeholder::make($dayKey.'_label')
                ->content($dayLabel)
                ->extraAttributes([
                    'class' => 'font-medium text-gray-900 dark:text-gray-100 text-center py-2',
                ])
                ->columnSpan(1),

            $this->getTimePickerComponent("{$dayKey}.morning_from"),
            $this->getTimePickerComponent("{$dayKey}.morning_to"),
            $this->getTimePickerComponent("{$dayKey}.afternoon_from"),
            $this->getTimePickerComponent("{$dayKey}.afternoon_to"),
        ];
    }

    private function getTimePickerComponent(string $name): TimePicker
    {
        return TimePicker::make($name)
            ->native(false)
            ->format('H:i')
            ->seconds(false)
            ->minutesStep(15)
            ->nullable()
            ->live(false);
    }
>>>>>>> laraxot/develop
}
