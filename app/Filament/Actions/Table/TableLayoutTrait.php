<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Table;

<<<<<<< HEAD
use Illuminate\Support\Facades\Session;
use Modules\UI\Enums\TableLayoutEnum;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Session;
use Modules\UI\Enums\TableLayoutEnum;
=======
use Modules\UI\Enums\TableLayoutEnum;
use Illuminate\Support\Facades\Session;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Support\Facades\Session;
use Modules\UI\Enums\TableLayoutEnum;
>>>>>>> b93ef594b4 (.)
=======
use Modules\UI\Enums\TableLayoutEnum;
use Illuminate\Support\Facades\Session;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

/**
 * Trait TableLayoutTrait
 * Fornisce funzionalità per la gestione del layout delle tabelle
 */
trait TableLayoutTrait
{
    /**
     * Ottiene il layout corrente dalla sessione o restituisce il default
     */
    public function getCurrentLayout(string $identifier = 'default'): TableLayoutEnum
    {
        $sessionKey = "table_layout_{$identifier}";
        $layout = Session::get($sessionKey);

<<<<<<< HEAD
        if ($layout && in_array($layout, TableLayoutEnum::values(), strict: true)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($layout && in_array($layout, TableLayoutEnum::values(), strict: true)) {
=======
        if ($layout && in_array($layout, TableLayoutEnum::values())) {
>>>>>>> a12f125f4a (.)
=======
        if ($layout && in_array($layout, TableLayoutEnum::values(), strict: true)) {
>>>>>>> b93ef594b4 (.)
=======
        if ($layout && in_array($layout, TableLayoutEnum::values())) {
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            return TableLayoutEnum::from($layout);
        }

        return TableLayoutEnum::GRID;
    }

    /**
     * Salva il layout corrente nella sessione
     */
    public function saveLayout(TableLayoutEnum $layout, string $identifier = 'default'): void
    {
        $sessionKey = "table_layout_{$identifier}";
        Session::put($sessionKey, $layout->value);
    }

    /**
     * Resetta il layout alla visualizzazione default
     */
    public function resetLayout(string $identifier = 'default'): void
    {
        $sessionKey = "table_layout_{$identifier}";
        Session::forget($sessionKey);
    }
}
