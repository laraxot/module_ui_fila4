<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Exception;
use Filament\Actions\Action;
use Closure;
use Filament\Notifications\Notification;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\On;
use Modules\Xot\Contracts\StateContract;
use Webmozart\Assert\Assert;

/**
 * IconStateSplitColumn - Enhanced state transition column with compact grid layout
 *
<<<<<<< HEAD
=======
=======

=======
>>>>>>> b93ef594b4 (.)
use Exception;
use Filament\Actions\Action;
use Closure;
use Filament\Notifications\Notification;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\On;
use Modules\Xot\Contracts\StateContract;
use Webmozart\Assert\Assert;

/**
 * IconStateSplitColumn - Enhanced state transition column with compact grid layout
<<<<<<< HEAD
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======

use Closure;
use Livewire\Attributes\On;
use Webmozart\Assert\Assert;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\Column;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Modules\Xot\Contracts\StateContract;
use Filament\Tables\Columns\Layout\Split;

/**
 * IconStateSplitColumn - Enhanced state transition column with compact grid layout
 * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
 * This column displays state transition icons in a compact grid layout with:
 * - Optimized space usage with responsive grid
 * - Enhanced tooltips and visual feedback
 * - Smooth animations and hover effects
 * - Proper error handling and notifications
 * - Mobile-friendly design
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
 * @package Modules\UI\Filament\Tables\Columns
 */
class IconStateSplitColumn extends Column
{
    protected string $view = 'ui::filament.tables.columns.icon-state-split';
    protected string $stateClass = '';
    protected string $modelClass = '';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

    /**
     * Configure the state class and model class for this column
     *
<<<<<<< HEAD
=======
=======
    
=======
>>>>>>> b93ef594b4 (.)

    /**
     * Configure the state class and model class for this column
<<<<<<< HEAD
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
    

   
   
    /**
     * Configure the state class and model class for this column
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @param string $stateClass The state machine class (e.g., AppointmentState::class)
     * @param string $modelClass The model class (e.g., Appointment::class)
     * @return static
     */
    public function stateClass(string $stateClass, string $modelClass): static
    {
        $this->stateClass = $stateClass;
        $this->modelClass = $modelClass;
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
        return $this;
    }

    public function getRecordStates(): array
    {
        $states = $this->stateClass::getStateMapping()->toArray();
        $record = $this->getRecord();
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
        $result = [];
        foreach ($states as $stateKey => $stateClass) {
            try {
                $stateInstance = new $stateClass($record);
                Assert::isInstanceOf($stateInstance, StateContract::class);
                $result[$stateKey] = [
                    'class' => $stateInstance,
                    'icon' => $stateInstance->icon(),
                    'label' => $stateInstance->label(),
                    'color' => $stateInstance->color(),
                    'tooltip' => $stateInstance->label(),
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
                // Skip problematic states
                continue;
            }
        }
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
        return $result;
    }

    public function canTransitionTo(int|string $recordId, string $stateClass): bool
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    {
        $record = $this->modelClass::find($recordId);

        if (!$record) {
            return false;
        }

        if (!$record->state) {
            return false;
        }

<<<<<<< HEAD
=======
=======
    {  
=======
    {
>>>>>>> b93ef594b4 (.)
        $record = $this->modelClass::find($recordId);

        if (!$record) {
            return false;
        }

        if (!$record->state) {
            return false;
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    {  
        $record = $this->modelClass::find($recordId);
        
        if (!$record) {
            return false;
        }
        
        if (!$record->state) {
            return false;
        }
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        return $record->state->canTransitionTo($stateClass);
    }

    /**
     * Metodo per testare le azioni
     */
    public function prova(int|string $recordId): void
    {
        // Logica per testare l'azione
<<<<<<< HEAD
        Notification::make()
=======
<<<<<<< HEAD
        Notification::make()
=======
        \Filament\Notifications\Notification::make()
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            ->title('Test Azione')
            ->body("Record ID: {$recordId}")
            ->success()
            ->send();
    }

    /**
     * Restituisce le azioni per gli stati
<<<<<<< HEAD
     *
     * @return array<string, Action>
=======
<<<<<<< HEAD
     *
     * @return array<string, Action>
=======
     * 
     * @return array<string, \Filament\Tables\Actions\Action>
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     */
    public function getStateActions(): array
    {
        $record = $this->getRecord();
        $states = $this->getRecordStates();
<<<<<<< HEAD

        $actions = [];

        // Aggiungi azione di test
        $actions['prova'] = Action::make('prova')
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        $actions = [];

=======
        
        $actions = [];
        
>>>>>>> a12f125f4a (.)
=======

        $actions = [];

>>>>>>> b93ef594b4 (.)
        // Aggiungi azione di test
        $actions['prova'] = Action::make('prova')
=======
        
        $actions = [];
        
        // Aggiungi azione di test
        $actions['prova'] = \Filament\Tables\Actions\Action::make('prova')
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            ->icon('heroicon-m-plus')
            ->color('primary')
            ->tooltip('Test Prova')
            ->action(function () use ($record) {
<<<<<<< HEAD
                $recordId = $record && isset($record->id) ? ((string) $record->id) : 'N/A';
                Notification::make()
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $recordId = $record && isset($record->id) ? ((string) $record->id) : 'N/A';
=======
                $recordId = $record && isset($record->id) ? (string) $record->id : 'N/A';
>>>>>>> a12f125f4a (.)
=======
                $recordId = $record && isset($record->id) ? ((string) $record->id) : 'N/A';
>>>>>>> b93ef594b4 (.)
                Notification::make()
=======
                $recordId = $record && isset($record->id) ? (string) $record->id : 'N/A';
                \Filament\Notifications\Notification::make()
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                    ->title('Prova funziona!')
                    ->body('Record ID: ' . $recordId)
                    ->success()
                    ->send();
            });
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
        // Aggiungi azioni per gli stati
        foreach ($states as $stateKey => $state) {
            $recordId = $record && isset($record->id) ? $record->id : null;
            if ($recordId !== null && $this->canTransitionTo($recordId, $state['class']::class)) {
<<<<<<< HEAD
                $actions["transition_to_{$stateKey}"] = Action::make(
                    "transition_to_{$stateKey}",
                )
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $actions["transition_to_{$stateKey}"] = Action::make(
                    "transition_to_{$stateKey}",
                )
=======
                $actions["transition_to_{$stateKey}"] = Action::make("transition_to_{$stateKey}")
>>>>>>> a12f125f4a (.)
=======
                $actions["transition_to_{$stateKey}"] = Action::make(
                    "transition_to_{$stateKey}",
                )
>>>>>>> b93ef594b4 (.)
=======
                $actions["transition_to_{$stateKey}"] = \Filament\Tables\Actions\Action::make("transition_to_{$stateKey}")
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                    ->icon($state['icon'])
                    ->color($state['color'])
                    ->label($state['label'])
                    ->action(fn() => $this->transitionState($recordId, $state['class']::class));
            }
        }
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
            $record = $this->modelClass::find($recordId);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

            if (!$record) {
                throw new Exception('Record non trovato');
            }

            // Esegui la transizione
            $record->state->transitionTo($stateClass);

<<<<<<< HEAD
            Notification::make()
=======
=======
            
=======

>>>>>>> b93ef594b4 (.)
            if (!$record) {
                throw new Exception('Record non trovato');
            }

            // Esegui la transizione
            $record->state->transitionTo($stateClass);
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
            Notification::make()
=======
            
            if (!$record) {
                throw new \Exception('Record non trovato');
            }
            
            // Esegui la transizione
            $record->state->transitionTo($stateClass);
            
            \Filament\Notifications\Notification::make()
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                ->title('Transizione Completata')
                ->body('Lo stato è stato cambiato con successo.')
                ->success()
                ->send();
<<<<<<< HEAD
        } catch (Exception $e) {
            Notification::make()
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
        } catch (Exception $e) {
            Notification::make()
=======
                
        } catch (\Exception $e) {
            \Filament\Notifications\Notification::make()
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                ->title('Errore Transizione')
                ->body('Si è verificato un errore: ' . $e->getMessage())
                ->danger()
                ->send();
        }
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
}
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
