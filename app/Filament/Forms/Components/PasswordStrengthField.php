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
     * Setup iniziale del componente.
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @var view-string $viewString */
        $viewString = 'ui::filament.forms.components.password-strength';
        $this->view($viewString);
    }

    public function evaluateStrength(): static
    {
<<<<<<< HEAD
        $this->afterStateUpdated(function (string $state): void {
            unset($state);
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
        $this->afterStateUpdated(function (string $_state) {
>>>>>>> 6c0b3515 (.)
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
