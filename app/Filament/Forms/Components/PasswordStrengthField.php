<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Notify\Filament\Forms\Components;
=======
namespace Modules\UI\Filament\Forms\Components;
>>>>>>> e3274ea (.)

// use bjeavons\ZxcvbnPhp\Zxcvbn;
use Filament\Forms\Components\TextInput;

class PasswordStrengthField extends TextInput
{
    /**
     * Summary of view.
     *
     * @phpstan-var view-string
     *
     * @phpstan-ignore property.defaultValue
     */
    protected string $view = 'ui::filament.forms.components.password-strength';

    public function evaluateStrength(): static
    {
        $this->afterStateUpdated(function (string $_state): void {
            // $zxcvbn = new Zxcvbn();
            // $result = $zxcvbn->passwordStrength($state);
            // Ottieni il punteggio della password (da 0 a 4)
            // $score = $result['score'];
            /*
             * // Puoi gestire la logica in base al punteggio qui (opzionale)
             * if ($score < 3) {
             * $this->warning('La tua password è troppo debole!');
             * } else {
             * $this->info('La tua password è abbastanza forte.');
             * }
             */
            // $this->state(['passwordStrengthScore' => $score]);
        });

        return $this;
    }
}
