<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Exception;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\On;
use Modules\Xot\Contracts\StateContract;
use Modules\Xot\Filament\Tables\Columns\XotBaseColumn;

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
final class IconStateSplitColumn extends XotBaseColumn
{
    protected string $view = 'ui::filament.tables.columns.icon-state-split-column';

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
        $stateMapping = $this->getStateMapping();
        if ($stateMapping === null) {
            return [];
        }

        $record = $this->getRecord();

        return $this->buildStateArray($stateMapping, $record);
    }

    /**
     * Ottiene la mappatura degli stati dalla classe di stato
     */
    private function getStateMapping(): ?array
    {
        if (! class_exists($this->stateClass) || ! method_exists($this->stateClass, 'getStateMapping')) {
            return null;
        }

        $stateMapping = $this->stateClass::getStateMapping();
        if (! is_object($stateMapping) || ! method_exists($stateMapping, 'toArray')) {
            return null;
        }

        $states = $stateMapping->toArray();

        return is_array($states) ? $states : null;
    }

    /**
     * Costruisce array di stati dal mapping
     *
     * @param  array<array-key, mixed>  $stateMapping
     * @return array<array-key, array<string, mixed>>
     */
    private function buildStateArray(array $stateMapping, mixed $record): array
    {
        $result = [];

        foreach ($stateMapping as $stateKey => $stateClass) {
            /** @var array-key $safeStateKey */
            $safeStateKey = $stateKey;
            $stateData = $this->createStateData($stateClass, $record);
            if ($stateData !== null) {
                $result[$safeStateKey] = $stateData;
            }
        }

        return $result;
    }

    /**
     * Crea dati per un singolo stato
     *
     * @return array<string, mixed>|null
     */
    private function createStateData(mixed $stateClass, mixed $record): ?array
    {
        if (! is_string($stateClass) || ! class_exists($stateClass)) {
            return null;
        }

        try {
            $stateInstance = new $stateClass($record);
            if (! ($stateInstance instanceof StateContract)) {
                return null;
            }

            return [
                'class' => $stateInstance,
                'icon' => $stateInstance->icon(),
                'label' => $stateInstance->label(),
                'color' => $stateInstance->color(),
                'tooltip' => $stateInstance->label(),
            ];
        } catch (Exception $e) {
            return null;
        }
    }

    public function canTransitionTo(mixed $recordId, string $stateClass): bool
    {
        \Webmozart\Assert\Assert::integer($recordId, 'Record ID must be an integer');
        if (! class_exists($this->modelClass)) {
            return false;
        }

        $record = $this->modelClass::find($recordId);

        if (! $record) {
            return false;
        }

        // PHPStan Level 10: isset() invece di property_exists() per Eloquent magic properties
        if (! is_object($record) || ! isset($record->state)) {
            return false;
        }

        $state = $record->state;
        if (! is_object($state) || ! method_exists($state, 'canTransitionTo')) {
            return false;
        }

        $result = $state->canTransitionTo($stateClass);

        return is_bool($result) ? $result : false;
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
        $actions['prova'] = $this->createTestAction($record);

        foreach ($states as $stateKey => $state) {
            $action = $this->createStateTransitionAction($record, $stateKey, $state);
            if ($action !== null) {
                $actions["transition_to_{$stateKey}"] = $action;
            }
        }

        return $actions;
    }

    /**
     * Crea azione di test
     */
    private function createTestAction(mixed $record): Action
    {
        return Action::make('prova')
            ->icon('heroicon-m-plus')
            ->color('primary')
            ->tooltip('Test Prova')
            ->action(function () use ($record) {
                $recordId = 'N/A';
                if (is_object($record) && isset($record->id)) {
                    $recordId = (string) $record->id;
                }
                Notification::make()
                    ->title('Prova funziona!')
                    ->body('Record ID: '.$recordId)
                    ->success()
                    ->send();
            });
    }

    /**
     * Crea azione per transizione di stato
     */
    private function createStateTransitionAction(mixed $record, mixed $stateKey, mixed $state): ?Action
    {
        $recordId = $this->extractRecordId($record);
        if ($recordId === null || ! is_array($state)) {
            return null;
        }

        $stateContract = $this->extractStateContract($state);
        if ($stateContract === null) {
            return null;
        }

        $stateClassName = get_class($stateContract);
        $actionData = $this->extractActionData($state, $stateKey);

        return $this->buildTransitionAction($stateKey, $actionData, $recordId, $stateClassName);
    }

    /**
     * Estrae l'ID del record.
     */
    private function extractRecordId(mixed $record): ?int
    {
        if (! is_object($record) || ! isset($record->id)) {
            return null;
        }

        return is_int($record->id) ? $record->id : null;
    }

    /**
     * Estrae il contratto di stato dall'array.
     */
    private function extractStateContract(array $state): ?StateContract
    {
        if (! isset($state['class']) || ! is_object($state['class'])) {
            return null;
        }

        return $state['class'] instanceof StateContract ? $state['class'] : null;
    }

    /**
     * Estrae i dati per l'azione.
     *
     * @return array<string, string>
     */
    private function extractActionData(array $state, mixed $stateKey): array
    {
        return [
            'icon' => isset($state['icon']) && is_string($state['icon']) ? $state['icon'] : '',
            'color' => isset($state['color']) && is_string($state['color']) ? $state['color'] : 'gray',
            'label' => isset($state['label']) && is_string($state['label']) ? $state['label'] : (is_string($stateKey) ? $stateKey : ''),
        ];
    }

    /**
     * Costruisce l'azione di transizione.
     *
     * @param  array<string, string>  $actionData
     */
    private function buildTransitionAction(mixed $stateKey, array $actionData, int $recordId, string $stateClassName): Action
    {
        $actionName = is_string($stateKey) ? "transition_to_{$stateKey}" : 'transition';

        return Action::make($actionName)
            ->icon($actionData['icon'])
            ->color($actionData['color'])
            ->label($actionData['label'])
            ->action(fn () => $this->transitionState($recordId, $stateClassName));
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
    public function transitionState(mixed $recordId, string $stateClass): void
    {
        \Webmozart\Assert\Assert::integer($recordId, 'Record ID must be an integer');
        try {
            if (! class_exists($this->modelClass)) {
                throw new Exception('Model class does not exist: '.$this->modelClass);
            }

            $record = $this->modelClass::find($recordId);

            if (! $record) {
                throw new Exception('Record non trovato');
            }

            // Esegui la transizione
            // PHPStan L10: isset() rispetta __get() per Eloquent magic properties
            if (! is_object($record) || ! isset($record->state) || ! is_object($record->state) || ! method_exists($record->state, 'transitionTo')) {
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
