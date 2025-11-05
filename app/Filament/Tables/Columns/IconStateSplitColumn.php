<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Exception;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\Column;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\On;
use Modules\Xot\Contracts\StateContract;
use Webmozart\Assert\Assert;

/**
 * IconStateSplitColumn - Enhanced state transition column with compact grid layout
 *
 * This column displays state transition icons in a compact grid layout with:
 * - Optimized space usage with responsive grid
 * - Enhanced tooltips and visual feedback
 * - Smooth animations and hover effects
 * - Proper error handling and notifications
 * - Mobile-friendly design
 */
class IconStateSplitColumn extends Column
{
    protected string $view = 'ui::filament.tables.columns.icon-state-split';

    protected string $stateClass = '';

    protected string $modelClass = '';

    /**
     * Configure the state class and model class for this column
     *
     * @param  string  $stateClass  The state machine class (e.g., AppointmentState::class)
     * @param  string  $modelClass  The model class (e.g., Appointment::class)
     */
    public function stateClass(string $stateClass, string $modelClass): static
    {
        $this->stateClass = $stateClass;
        $this->modelClass = $modelClass;

        return $this;
    }

    public function getRecordStates(): array
    {
        $states = [];
        if (class_exists($this->stateClass) && method_exists($this->stateClass, 'getStateMapping')) {
            $stateMapping = $this->stateClass::getStateMapping();
            if (is_object($stateMapping) && method_exists($stateMapping, 'toArray')) {
                $states = $stateMapping->toArray();
            }
        }
        $record = $this->getRecord();

        $result = [];
        foreach ($states as $stateKey => $stateClass) {
            if (is_string($stateClass) && class_exists($stateClass)) {
                try {
                    $stateInstance = new $stateClass($record);
                    if ($stateInstance instanceof StateContract) {
                        $result[$stateKey] = [
                            'class' => $stateInstance,
                            'icon' => $stateInstance->icon(),
                            'label' => $stateInstance->label(),
                            'color' => $stateInstance->color(),
                            'tooltip' => $stateInstance->label(),
                        ];
                    }
                } catch (Exception $e) {
                    // Skip problematic states
                    continue;
                }
            }
        }

        return $result;
    }

    public function canTransitionTo(int|string $recordId, string $stateClass): bool
    {
        if (!class_exists($this->modelClass)) {
            return false;
        }
        
        $record = $this->modelClass::find($recordId);

        if (! $record) {
            return false;
        }

        if (! property_exists($record, 'state') || ! is_object($record->state) || ! method_exists($record->state, 'canTransitionTo')) {
            return false;
        }

        return $record->state->canTransitionTo($stateClass);
    }

    /**
     * Metodo per testare le azioni
     */
    public function prova(int|string $recordId): void
    {
        // Logica per testare l'azione
        Notification::make()
            ->title('Test Azione')
            ->body("Record ID: {$recordId}")
            ->success()
            ->send();
    }

    /**
     * Restituisce le azioni per gli stati
     *
     * @return array<string, Action>
     */
    public function getStateActions(): array
    {
        $record = $this->getRecord();
        $states = $this->getRecordStates();

        $actions = [];

        // Aggiungi azione di test
        $actions['prova'] = Action::make('prova')
            ->icon('heroicon-m-plus')
            ->color('primary')
            ->tooltip('Test Prova')
            ->action(function () use ($record) {
                $recordId = $record && isset($record->id) ? ((string) $record->id) : 'N/A';
                Notification::make()
                    ->title('Prova funziona!')
                    ->body('Record ID: '.$recordId)
                    ->success()
                    ->send();
            });

        // Aggiungi azioni per gli stati
        foreach ($states as $stateKey => $state) {
            $recordId = $record && isset($record->id) ? $record->id : null;
            if ($recordId !== null && is_object($state['class']) && method_exists($state['class'], 'class') && $this->canTransitionTo($recordId, $state['class']::class)) {
                $actions["transition_to_{$stateKey}"] = Action::make(
                    "transition_to_{$stateKey}",
                )
                    ->icon(is_string($state['icon']) ? $state['icon'] : '')
                    ->color(is_string($state['color']) ? $state['color'] : 'gray')
                    ->label(is_string($state['label']) ? $state['label'] : $stateKey)
                    ->action(fn () => $this->transitionState($recordId, $state['class']::class));
            }
        }

        return $actions;
    }

    /**
     * Listener per l'evento table-action
     */
    #[On('table-action')]
    public function handleTableAction(string $action, int|string $recordId): void
    {
        if ($action === 'prova') {
            $this->prova($recordId);
        }
    }

    /**
     * Metodo per eseguire la transizione di stato
     */
    public function transitionState(int|string $recordId, string $stateClass): void
    {
        try {
            if (!class_exists($this->modelClass)) {
                throw new Exception('Model class does not exist: ' . $this->modelClass);
            }
            
            $record = $this->modelClass::find($recordId);

            if (! $record) {
                throw new Exception('Record non trovato');
            }

            // Esegui la transizione
            if (!property_exists($record, 'state') || !is_object($record->state) || !method_exists($record->state, 'transitionTo')) {
                throw new Exception('State transition not supported');
            }
            
            $record->state->transitionTo($stateClass);

            Notification::make()
                ->title('Transizione Completata')
                ->body('Lo stato è stato cambiato con successo.')
                ->success()
                ->send();
        } catch (Exception $e) {
            Notification::make()
                ->title('Errore Transizione')
                ->body('Si è verificato un errore: '.$e->getMessage())
                ->danger()
                ->send();
        }
    }
}
