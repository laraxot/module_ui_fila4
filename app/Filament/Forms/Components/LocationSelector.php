<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
=======
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Group;
>>>>>>> e3274ea (.)
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Utilities\Get;
use Exception;
use Filament\Forms\Components\Select;
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Group;
=======
use Illuminate\Contracts\Support\Htmlable;
>>>>>>> e3274ea (.)
use Illuminate\Support\Facades\Log;
use Modules\Geo\Models\Comune;

/**
 * LocationSelector Component - Selezione geografica gerarchica
 *
 * Componente Filament per la selezione gerarchica di:
 * - Regione
 * - Provincia (dipendente da regione)
 * - CAP (dipendente da regione e provincia)
<<<<<<< HEAD
=======
 *
 * @package Modules\UI\Filament\Forms\Components
>>>>>>> e3274ea (.)
 */
class LocationSelector extends Group
{
    /**
     * Il nome del campo regione.
     */
    protected string $regionFieldName = 'region';

    /**
     * Il nome del campo provincia.
     */
    protected string $provinceFieldName = 'province';

    /**
     * Il nome del campo CAP.
     */
    protected string $capFieldName = 'cap';

    /**
     * Se i campi devono essere searchable.
     */
    protected bool $searchable = true;

    /**
     * Se i campi devono essere required.
     */
    protected bool $required = false;

    /**
     * Label personalizzate per i campi.
     */
    protected array $labels = [];

    /**
     * Placeholder personalizzati per i campi.
     */
    protected array $placeholders = [];

    /**
     * Setup del componente.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Imposta le label di default se non personalizzate
        $this->labels = array_merge([
            'region' => 'ui::location_selector.region.label',
            'province' => 'ui::location_selector.province.label',
            'cap' => 'ui::location_selector.cap.label',
        ], $this->labels);

        // Imposta i placeholder di default se non personalizzati
        $this->placeholders = array_merge([
            'region' => 'ui::location_selector.region.placeholder',
            'province' => 'ui::location_selector.province.placeholder',
            'cap' => 'ui::location_selector.cap.placeholder',
        ], $this->placeholders);

        // Configura lo schema dei campi figlio
        $this->schema($this->getChildComponentsSchema());
    }

    /**
     * Imposta il nome del campo regione.
     */
    public function regionField(string $fieldName): static
    {
        $this->regionFieldName = $fieldName;
<<<<<<< HEAD

=======
>>>>>>> e3274ea (.)
        return $this;
    }

    /**
     * Imposta il nome del campo provincia.
     */
    public function provinceField(string $fieldName): static
    {
        $this->provinceFieldName = $fieldName;
<<<<<<< HEAD

=======
>>>>>>> e3274ea (.)
        return $this;
    }

    /**
     * Imposta il nome del campo CAP.
     */
    public function capField(string $fieldName): static
    {
        $this->capFieldName = $fieldName;
<<<<<<< HEAD

=======
>>>>>>> e3274ea (.)
        return $this;
    }

    /**
     * Rende tutti i campi required.
     */
    public function required(bool $condition = true): static
    {
        $this->required = $condition;
<<<<<<< HEAD

=======
>>>>>>> e3274ea (.)
        return $this;
    }

    /**
     * Abilita/disabilita la ricerca in tutti i select.
     */
    public function searchable(bool $condition = true): static
    {
        $this->searchable = $condition;
<<<<<<< HEAD

=======
>>>>>>> e3274ea (.)
        return $this;
    }

    /**
     * Imposta label personalizzate.
     *
<<<<<<< HEAD
     * @param  array<string, string>  $labels
=======
     * @param array<string, string> $labels
>>>>>>> e3274ea (.)
     */
    public function labels(array $labels): static
    {
        $this->labels = array_merge($this->labels, $labels);
<<<<<<< HEAD

=======
>>>>>>> e3274ea (.)
        return $this;
    }

    /**
     * Imposta placeholder personalizzati.
     *
<<<<<<< HEAD
     * @param  array<string, string>  $placeholders
=======
     * @param array<string, string> $placeholders
>>>>>>> e3274ea (.)
     */
    public function placeholders(array $placeholders): static
    {
        $this->placeholders = array_merge($this->placeholders, $placeholders);
<<<<<<< HEAD

=======
>>>>>>> e3274ea (.)
        return $this;
    }

    /**
     * Genera lo schema dei componenti figlio.
     *
     * @return array<Component>
     */
    protected function getChildComponentsSchema(): array
    {
        return [
            // Campo Regione
            Select::make($this->regionFieldName)
                ->label($this->labels['region'])
                ->placeholder($this->placeholders['region'])
                ->options($this->getRegionOptions())
                ->searchable($this->searchable)
                ->required($this->required)
                ->live()
                ->afterStateUpdated(function (Set $set) {
                    // Reset province e cap quando cambia la regione
                    $set($this->provinceFieldName, null);
                    $set($this->capFieldName, null);
                })
                ->helperText(__('ui::location_selector.region.help')),
            // Campo Provincia
            Select::make($this->provinceFieldName)
                ->label($this->labels['province'])
                ->placeholder($this->placeholders['province'])
                ->options(function (Get $get): array {
                    $region = $get($this->regionFieldName);
<<<<<<< HEAD

=======
>>>>>>> e3274ea (.)
                    return is_string($region) ? $this->getProvinceOptions($region) : [];
                })
                ->searchable($this->searchable)
                ->required($this->required)
                ->live()
<<<<<<< HEAD
                ->disabled(fn (Get $get): bool => ! $get($this->regionFieldName))
=======
                ->disabled(fn(Get $get): bool => !$get($this->regionFieldName))
>>>>>>> e3274ea (.)
                ->afterStateUpdated(function (Set $set) {
                    // Reset cap quando cambia la provincia
                    $set($this->capFieldName, null);
                })
                ->helperText(__('ui::location_selector.province.help')),
            // Campo CAP
            Select::make($this->capFieldName)
                ->label($this->labels['cap'])
                ->placeholder($this->placeholders['cap'])
                ->options(function (Get $get): array {
                    $region = $get($this->regionFieldName);
                    $province = $get($this->provinceFieldName);
<<<<<<< HEAD

=======
>>>>>>> e3274ea (.)
                    return is_string($region) && is_string($province) ? $this->getCapOptions($region, $province) : [];
                })
                ->searchable($this->searchable)
                ->required($this->required)
<<<<<<< HEAD
                ->disabled(fn (Get $get): bool => ! $get($this->regionFieldName) || ! $get($this->provinceFieldName))
=======
                ->disabled(fn(Get $get): bool => !$get($this->regionFieldName) || !$get($this->provinceFieldName))
>>>>>>> e3274ea (.)
                ->helperText(__('ui::location_selector.cap.help')),
        ];
    }

    /**
     * Ottiene le opzioni per il campo regione.
     *
     * @return array<string, string>
     */
    protected function getRegionOptions(): array
    {
        try {
<<<<<<< HEAD
            /** @phpstan-ignore class.notFound */
=======
            /** @phpstan-ignore return.type */
>>>>>>> e3274ea (.)
            return Comune::select('regione')
                ->distinct()
                ->orderBy('regione->nome')
                ->get()
                ->pluck('regione.nome', 'regione.codice')
                ->toArray();
        } catch (Exception $e) {
            // Log dell'errore per debug
            Log::error('LocationSelector: Errore nel caricamento regioni', [
                'error' => $e->getMessage(),
            ]);

            return [];
        }
    }

    /**
     * Ottiene le opzioni per il campo provincia basate sulla regione.
     *
<<<<<<< HEAD
     * @param  string  $region  Codice regione
=======
     * @param string $region Codice regione
>>>>>>> e3274ea (.)
     * @return array<string, string>
     */
    protected function getProvinceOptions(string $region): array
    {
        try {
<<<<<<< HEAD
            /** @phpstan-ignore class.notFound */
=======
            /** @phpstan-ignore return.type */
>>>>>>> e3274ea (.)
            return Comune::query()
                ->where('regione->codice', $region)
                ->select('provincia')
                ->distinct()
                ->orderBy('provincia->nome')
                ->get()
                ->pluck('provincia.nome', 'provincia.codice')
                ->toArray();
        } catch (Exception $e) {
            Log::error('LocationSelector: Errore nel caricamento province', [
                'region' => $region,
                'error' => $e->getMessage(),
            ]);

            return [];
        }
    }

    /**
     * Ottiene le opzioni per il campo CAP basate su regione e provincia.
     *
<<<<<<< HEAD
     * @param  string  $region  Codice regione
     * @param  string  $province  Codice provincia
=======
     * @param string $region Codice regione
     * @param string $province Codice provincia
>>>>>>> e3274ea (.)
     * @return array<string, string>
     */
    protected function getCapOptions(string $region, string $province): array
    {
        try {
<<<<<<< HEAD
            /** @phpstan-ignore class.notFound */
=======
            /** @phpstan-ignore return.type */
>>>>>>> e3274ea (.)
            return Comune::query()
                ->where('regione->codice', $region)
                ->where('provincia->codice', $province)
                ->select('cap')
                ->distinct()
                ->orderBy('cap')
                ->get()
                ->pluck('cap.0', 'cap.0')
                ->toArray();
        } catch (Exception $e) {
            Log::error('LocationSelector: Errore nel caricamento CAP', [
                'region' => $region,
                'province' => $province,
                'error' => $e->getMessage(),
            ]);

            return [];
        }
    }

    /**
     * Validazione custom per verificare la coerenza dei dati.
     */
    public function validate(): array
    {
        $state = $this->getState();
        $errors = [];

        // Verifica che se è selezionata una provincia, sia selezionata anche la regione
        /** @phpstan-ignore offsetAccess.nonOffsetAccessible, offsetAccess.nonOffsetAccessible */
<<<<<<< HEAD
        if (! empty($state[$this->provinceFieldName]) && empty($state[$this->regionFieldName])) {
=======
        if (!empty($state[$this->provinceFieldName]) && empty($state[$this->regionFieldName])) {
>>>>>>> e3274ea (.)
            $errors[] = __('ui::location_selector.validation.region_required_for_province');
        }

        // Verifica che se è selezionato un CAP, siano selezionate regione e provincia
        if (is_array($state)) {
            $capValue = $state[$this->capFieldName] ?? null;
            $regionValue = $state[$this->regionFieldName] ?? null;
            $provinceValue = $state[$this->provinceFieldName] ?? null;
<<<<<<< HEAD

            if (! empty($capValue) && (empty($regionValue) || empty($provinceValue))) {
=======
            
            if (!empty($capValue) && (empty($regionValue) || empty($provinceValue))) {
>>>>>>> e3274ea (.)
                $errors[] = __('ui::location_selector.validation.region_province_required_for_cap');
            }
        }

        return $errors;
    }

    /**
     * Ottiene i dati geografici completi basati sulla selezione corrente.
     *
     * @return array<string, mixed>|null
     */
<<<<<<< HEAD
    public function getGeographicData(): ?array
=======
    public function getGeographicData(): null|array
>>>>>>> e3274ea (.)
    {
        $state = $this->getState();
        /** @phpstan-ignore offsetAccess.nonOffsetAccessible */
        if (empty($state[$this->regionFieldName])) {
            return null;
        }

        try {
<<<<<<< HEAD
            /** @phpstan-ignore class.notFound */
            $query = Comune::query()->where('regione->codice', $state[$this->regionFieldName]);

            /** @phpstan-ignore offsetAccess.nonOffsetAccessible */
            if (! empty($state[$this->provinceFieldName])) {
=======
            $query = Comune::query()->where('regione->codice', $state[$this->regionFieldName]);

            /** @phpstan-ignore offsetAccess.nonOffsetAccessible */
            if (!empty($state[$this->provinceFieldName])) {
>>>>>>> e3274ea (.)
                $query->where('provincia->codice', $state[$this->provinceFieldName]);
            }

            /** @phpstan-ignore offsetAccess.nonOffsetAccessible */
<<<<<<< HEAD
            if (! empty($state[$this->capFieldName])) {
=======
            if (!empty($state[$this->capFieldName])) {
>>>>>>> e3274ea (.)
                $query->where('cap->0', $state[$this->capFieldName]);
            }

            $comune = $query->first();

<<<<<<< HEAD
            if (! $comune) {
=======
            if (!$comune) {
>>>>>>> e3274ea (.)
                return null;
            }

            return [
                'region' => [
                    'code' => $comune->regione['codice'] ?? null,
                    'name' => $comune->regione['nome'] ?? null,
                ],
                'province' => [
                    'code' => $comune->provincia['codice'] ?? null,
                    'name' => $comune->provincia['nome'] ?? null,
                ],
                /** @phpstan-ignore offsetAccess.nonOffsetAccessible */
                'cap' => $state[$this->capFieldName] ?? null,
                /** @phpstan-ignore-next-line */
                'city' => $comune->nome ?? null,
            ];
        } catch (Exception $e) {
            Log::error('LocationSelector: Errore nel recupero dati geografici', [
                'state' => $state,
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }
}
