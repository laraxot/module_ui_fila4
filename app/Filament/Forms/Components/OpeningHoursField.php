<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Notify\Filament\Forms\Components;
=======
namespace Modules\UI\Filament\Forms\Components;
>>>>>>> e3274ea (.)

use Modules\UI\Rules\OpeningHoursRule;
use Carbon\Carbon;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TimePicker;
use Modules\UI\Actions\Datetime\GetDaysMappingAction;

/**
 * --
 */
class OpeningHoursField extends Field
{
    /**
     * Vista Blade per il rendering del componente.
     */
    protected string $view = 'ui::filament.forms.components.opening-hours-field';

    protected function setUp(): void
    {
        parent::setUp();
        $days = app(GetDaysMappingAction::class)->execute();

<<<<<<< HEAD
        $form = [];
=======
        $schema = [];
>>>>>>> e3274ea (.)
        $native = false;
        $live = false;

        foreach ($days as $dayKey => $dayLabel) {
<<<<<<< HEAD
            $form[] = Placeholder::make($dayKey . '_label')
=======
            $schema[] = Placeholder::make($dayKey . '_label')
>>>>>>> e3274ea (.)
                ->label('')
                ->content($dayLabel)
                ->extraAttributes(['class' => 'font-medium text-gray-900 dark:text-gray-100 text-center py-2'])
                ->columnSpan(1);

<<<<<<< HEAD
            $form[] = TimePicker::make("{$dayKey}.morning_from")
=======
            $schema[] = TimePicker::make("{$dayKey}.morning_from")
>>>>>>> e3274ea (.)
                ->native($native)
                //->placeholder('08:00')
                //->placeholder('09:30')
                ->placeholder('--:--')
                ->format('H:i')
                ->seconds(false)
                ->minutesStep(15)
                ->nullable()
                ->live($live);

<<<<<<< HEAD
            $form[] = TimePicker::make("{$dayKey}.morning_to")
=======
            $schema[] = TimePicker::make("{$dayKey}.morning_to")
>>>>>>> e3274ea (.)
                ->native($native)
                //->placeholder('13:30')
                ->placeholder('--:--')
                ->format('H:i')
                ->seconds(false)
                ->minutesStep(15)
                ->nullable()
                ->live($live);

<<<<<<< HEAD
            $form[] = TimePicker::make("{$dayKey}.afternoon_from")
=======
            $schema[] = TimePicker::make("{$dayKey}.afternoon_from")
>>>>>>> e3274ea (.)
                ->native($native)
                //->placeholder('15:00')
                ->placeholder('--:--')
                ->format('H:i')
                ->seconds(false)
                ->minutesStep(15)
                ->nullable()
                ->live($live);

<<<<<<< HEAD
            $form[] = TimePicker::make("{$dayKey}.afternoon_to")
=======
            $schema[] = TimePicker::make("{$dayKey}.afternoon_to")
>>>>>>> e3274ea (.)
                ->native($native)
                //->placeholder('19:00')
                ->placeholder('--:--')
                ->format('H:i')
                ->seconds(false)
                ->minutesStep(15)
                ->nullable()
                ->live($live);
        }

<<<<<<< HEAD
        $this->schema($form)->columns(5);
=======
        $this->schema($schema)->columns(5);
>>>>>>> e3274ea (.)

        $this->afterStateUpdated(function ($_state) {
            //dddx($state);
        });
        $this->afterStateHydrated(function (OpeningHoursField $_component, $_state) {
            // Qui puoi normalizzare lo stato iniziale se serve
            //dddx($state);
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
}
