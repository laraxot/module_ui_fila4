<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
        $this->afterStateUpdated(function (string $_state) {
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
<<<<<<< HEAD
=======
=======
        $this->afterStateUpdated(function (string $state) {
=======
        $this->afterStateUpdated(function (string $_state) {
>>>>>>> b93ef594b4 (.)
            // $zxcvbn = new Zxcvbn();
            // $result = $zxcvbn->passwordStrength($state);
            // Ottieni il punteggio della password (da 0 a 4)
            // $score = $result['score'];
            /*
<<<<<<< HEAD
=======
        $this->afterStateUpdated(function (string $state) {
            // $zxcvbn = new Zxcvbn();
            // $result = $zxcvbn->passwordStrength($state);

            // Ottieni il punteggio della password (da 0 a 4)
            // $score = $result['score'];
            /*
>>>>>>> origin/develop
            // Puoi gestire la logica in base al punteggio qui (opzionale)
            if ($score < 3) {
                $this->warning('La tua password è troppo debole!');
            } else {
                $this->info('La tua password è abbastanza forte.');
            }
                */

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
             * // Puoi gestire la logica in base al punteggio qui (opzionale)
             * if ($score < 3) {
             * $this->warning('La tua password è troppo debole!');
             * } else {
             * $this->info('La tua password è abbastanza forte.');
             * }
             */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            // $this->state(['passwordStrengthScore' => $score]);
        });

        return $this;
    }
}
