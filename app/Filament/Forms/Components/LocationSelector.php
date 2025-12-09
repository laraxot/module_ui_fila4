<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Schemas\Components\Component;
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Utilities\Get;
use Exception;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Filament\Forms\Components\Select;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Log;
use Modules\Geo\Models\Comune;

/**
 * LocationSelector Component - Selezione geografica gerarchica
 *
<<<<<<< HEAD
=======
=======
use Modules\Geo\Models\Comune;
=======
>>>>>>> b93ef594b4 (.)
use Filament\Forms\Components\Select;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Log;
use Modules\Geo\Models\Comune;

/**
 * LocationSelector Component - Selezione geografica gerarchica
<<<<<<< HEAD
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms\Get;
use Filament\Forms\Set;
use Modules\Geo\Models\Comune;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Support\Htmlable;

/**
 * LocationSelector Component - Selezione geografica gerarchica
 * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
 * Componente Filament per la selezione gerarchica di:
 * - Regione
 * - Provincia (dipendente da regione)
 * - CAP (dipendente da regione e provincia)
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
 * @package Modules\UI\Filament\Forms\Components
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
<<<<<<< HEAD
            'province' => 'ui::location_selector.province.label',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'province' => 'ui::location_selector.province.label',
=======
            'province' => 'ui::location_selector.province.label', 
>>>>>>> a12f125f4a (.)
=======
            'province' => 'ui::location_selector.province.label',
>>>>>>> b93ef594b4 (.)
=======
            'province' => 'ui::location_selector.province.label', 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
        return $this;
    }

    /**
     * Imposta il nome del campo provincia.
     */
    public function provinceField(string $fieldName): static
    {
        $this->provinceFieldName = $fieldName;
        return $this;
    }

    /**
     * Imposta il nome del campo CAP.
     */
    public function capField(string $fieldName): static
    {
        $this->capFieldName = $fieldName;
        return $this;
    }

    /**
     * Rende tutti i campi required.
     */
    public function required(bool $condition = true): static
    {
        $this->required = $condition;
        return $this;
    }

    /**
     * Abilita/disabilita la ricerca in tutti i select.
     */
    public function searchable(bool $condition = true): static
    {
        $this->searchable = $condition;
        return $this;
    }

    /**
     * Imposta label personalizzate.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @param array<string, string> $labels
     */
    public function labels(array $labels): static
    {
        $this->labels = array_merge($this->labels, $labels);
        return $this;
    }

    /**
     * Imposta placeholder personalizzati.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @param array<string, string> $placeholders
     */
    public function placeholders(array $placeholders): static
    {
        $this->placeholders = array_merge($this->placeholders, $placeholders);
        return $this;
    }

    /**
     * Genera lo schema dei componenti figlio.
<<<<<<< HEAD
     *
     * @return array<Component>
=======
<<<<<<< HEAD
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<Component>
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a12f125f4a (.)
=======
     * @return array<Component>
>>>>>>> b93ef594b4 (.)
=======
     * 
     * @return array<Component>
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
<<<<<<< HEAD
                ->helperText(__('ui::location_selector.region.help')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->helperText(__('ui::location_selector.region.help')),
=======
                ->helperText(__('ui::location_selector.region.help')
            ),

>>>>>>> a12f125f4a (.)
=======
                ->helperText(__('ui::location_selector.region.help')),
>>>>>>> b93ef594b4 (.)
=======
                ->helperText(__('ui::location_selector.region.help')
            ),

>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            // Campo Provincia
            Select::make($this->provinceFieldName)
                ->label($this->labels['province'])
                ->placeholder($this->placeholders['province'])
                ->options(function (Get $get): array {
                    $region = $get($this->regionFieldName);
                    return is_string($region) ? $this->getProvinceOptions($region) : [];
                })
                ->searchable($this->searchable)
                ->required($this->required)
                ->live()
<<<<<<< HEAD
                ->disabled(fn(Get $get): bool => !$get($this->regionFieldName))
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn(Get $get): bool => !$get($this->regionFieldName))
=======
                ->disabled(fn (Get $get): bool => !$get($this->regionFieldName))
>>>>>>> a12f125f4a (.)
=======
                ->disabled(fn(Get $get): bool => !$get($this->regionFieldName))
>>>>>>> b93ef594b4 (.)
=======
                ->disabled(fn (Get $get): bool => !$get($this->regionFieldName))
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                ->afterStateUpdated(function (Set $set) {
                    // Reset cap quando cambia la provincia
                    $set($this->capFieldName, null);
                })
<<<<<<< HEAD
                ->helperText(__('ui::location_selector.province.help')),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->helperText(__('ui::location_selector.province.help')),
=======
                ->helperText(__('ui::location_selector.province.help')
            ),

>>>>>>> a12f125f4a (.)
=======
                ->helperText(__('ui::location_selector.province.help')),
>>>>>>> b93ef594b4 (.)
=======
                ->helperText(__('ui::location_selector.province.help')
            ),

>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            // Campo CAP
            Select::make($this->capFieldName)
                ->label($this->labels['cap'])
                ->placeholder($this->placeholders['cap'])
                ->options(function (Get $get): array {
                    $region = $get($this->regionFieldName);
                    $province = $get($this->provinceFieldName);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
                    return is_string($region) && is_string($province) ? $this->getCapOptions($region, $province) : [];
                })
                ->searchable($this->searchable)
                ->required($this->required)
                ->disabled(fn(Get $get): bool => !$get($this->regionFieldName) || !$get($this->provinceFieldName))
                ->helperText(__('ui::location_selector.cap.help')),
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                    return (is_string($region) && is_string($province)) ? $this->getCapOptions($region, $province) : [];
                })
                ->searchable($this->searchable)
                ->required($this->required)
                ->disabled(fn (Get $get): bool => !$get($this->regionFieldName) || !$get($this->provinceFieldName))
                ->helperText(__('ui::location_selector.cap.help')
            ),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                    return is_string($region) && is_string($province) ? $this->getCapOptions($region, $province) : [];
                })
                ->searchable($this->searchable)
                ->required($this->required)
                ->disabled(fn(Get $get): bool => !$get($this->regionFieldName) || !$get($this->provinceFieldName))
                ->helperText(__('ui::location_selector.cap.help')),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        ];
    }

    /**
     * Ottiene le opzioni per il campo regione.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @return array<string, string>
     */
    protected function getRegionOptions(): array
    {
        try {
            /** @phpstan-ignore return.type */
            return Comune::select('regione')
                ->distinct()
                ->orderBy('regione->nome')
                ->get()
                ->pluck('regione.nome', 'regione.codice')
                ->toArray();
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            // Log dell'errore per debug
            Log::error('LocationSelector: Errore nel caricamento regioni', [
                'error' => $e->getMessage(),
            ]);
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
            return [];
        }
    }

    /**
     * Ottiene le opzioni per il campo provincia basate sulla regione.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @param string $region Codice regione
     * @return array<string, string>
     */
    protected function getProvinceOptions(string $region): array
    {
        try {
            /** @phpstan-ignore return.type */
            return Comune::query()
                ->where('regione->codice', $region)
                ->select('provincia')
                ->distinct()
                ->orderBy('provincia->nome')
                ->get()
                ->pluck('provincia.nome', 'provincia.codice')
                ->toArray();
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            Log::error('LocationSelector: Errore nel caricamento province', [
                'region' => $region,
                'error' => $e->getMessage(),
            ]);
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
            return [];
        }
    }

    /**
     * Ottiene le opzioni per il campo CAP basate su regione e provincia.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @param string $region Codice regione
     * @param string $province Codice provincia
     * @return array<string, string>
     */
    protected function getCapOptions(string $region, string $province): array
    {
        try {
            /** @phpstan-ignore return.type */
            return Comune::query()
                ->where('regione->codice', $region)
                ->where('provincia->codice', $province)
                ->select('cap')
                ->distinct()
                ->orderBy('cap')
                ->get()
                ->pluck('cap.0', 'cap.0')
                ->toArray();
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            Log::error('LocationSelector: Errore nel caricamento CAP', [
                'region' => $region,
                'province' => $province,
                'error' => $e->getMessage(),
            ]);
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
        if (!empty($state[$this->provinceFieldName]) && empty($state[$this->regionFieldName])) {
            $errors[] = __('ui::location_selector.validation.region_required_for_province');
        }

        // Verifica che se è selezionato un CAP, siano selezionate regione e provincia
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        if (is_array($state)) {
            $capValue = $state[$this->capFieldName] ?? null;
            $regionValue = $state[$this->regionFieldName] ?? null;
            $provinceValue = $state[$this->provinceFieldName] ?? null;
            
            if (!empty($capValue) && (empty($regionValue) || empty($provinceValue))) {
                $errors[] = __('ui::location_selector.validation.region_province_required_for_cap');
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        /** @phpstan-ignore offsetAccess.nonOffsetAccessible, offsetAccess.nonOffsetAccessible, offsetAccess.nonOffsetAccessible */
        if (!empty($state[$this->capFieldName]) && (empty($state[$this->regionFieldName]) || empty($state[$this->provinceFieldName]))) {
            $errors[] = __('ui::location_selector.validation.region_province_required_for_cap');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        /** @phpstan-ignore offsetAccess.nonOffsetAccessible, offsetAccess.nonOffsetAccessible, offsetAccess.nonOffsetAccessible */
        if (!empty($state[$this->capFieldName]) && (empty($state[$this->regionFieldName]) || empty($state[$this->provinceFieldName]))) {
            $errors[] = __('ui::location_selector.validation.region_province_required_for_cap');
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        }

        return $errors;
    }

    /**
     * Ottiene i dati geografici completi basati sulla selezione corrente.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
     *
     * @return array<string, mixed>|null
     */
    public function getGeographicData(): null|array
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     * 
     * @return array<string, mixed>|null
     */
    public function getGeographicData(): ?array
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     *
     * @return array<string, mixed>|null
     */
    public function getGeographicData(): null|array
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    {
        $state = $this->getState();
        /** @phpstan-ignore offsetAccess.nonOffsetAccessible */
        if (empty($state[$this->regionFieldName])) {
            return null;
        }

        try {
<<<<<<< HEAD
            $query = Comune::query()->where('regione->codice', $state[$this->regionFieldName]);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $query = Comune::query()->where('regione->codice', $state[$this->regionFieldName]);
=======
            $query = Comune::query()
                ->where('regione->codice', $state[$this->regionFieldName]);
>>>>>>> a12f125f4a (.)
=======
            $query = Comune::query()->where('regione->codice', $state[$this->regionFieldName]);
>>>>>>> b93ef594b4 (.)
=======
            $query = Comune::query()
                ->where('regione->codice', $state[$this->regionFieldName]);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

            /** @phpstan-ignore offsetAccess.nonOffsetAccessible */
            if (!empty($state[$this->provinceFieldName])) {
                $query->where('provincia->codice', $state[$this->provinceFieldName]);
            }

            /** @phpstan-ignore offsetAccess.nonOffsetAccessible */
            if (!empty($state[$this->capFieldName])) {
                $query->where('cap->0', $state[$this->capFieldName]);
            }

            $comune = $query->first();

            if (!$comune) {
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
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            Log::error('LocationSelector: Errore nel recupero dati geografici', [
                'state' => $state,
                'error' => $e->getMessage(),
            ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

            return null;
        }
    }
}
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            
            return null;
        }
    }
<<<<<<< HEAD
} 
>>>>>>> a12f125f4a (.)
=======

            return null;
        }
    }
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
