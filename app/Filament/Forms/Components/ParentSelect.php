<?php

declare(strict_types=1);

/**
        // Inizializzazione con localizzazione Carbon
        Carbon::setLocale(App::getLocale());
        $this->currentViewMonth = now()->format('Y-m');

        // Hydration/Dehydration del valore
        $this->afterStateHydrated(static function (self $component, mixed $state): void {
            if ($state !== null && is_string($state) && $state !== '') {
                try {
                    $date = Carbon::parse($state);
                    $component->currentViewMonth = $date->format('Y-m');
                } catch (Exception $e) {
                    // Handle invalid date
                    $component->currentViewMonth = now()->format('Y-m');
                }
            }
        });

        $this->dehydrateStateUsing(static function (mixed $state): ?string {
            if ($state !== null && is_string($state) && $state !== '') {
                try {
                    return Carbon::parse($state)->format('Y-m-d');
                } catch (Exception $e) {
                    return null;
                }
            }

            return null;
        });
    }
