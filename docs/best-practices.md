# Best Practices UI

## Principi Generali
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 1. Consistenza
- Utilizzare componenti standard
- Mantenere uno stile uniforme
- Seguire le convenzioni di naming
- Riutilizzare pattern comuni
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 2. Accessibilità
- Supportare la navigazione da tastiera
- Utilizzare attributi ARIA
- Mantenere contrasto adeguato
- Fornire testi alternativi
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 3. Performance
- Ottimizzare il caricamento
- Minimizzare le dipendenze
- Utilizzare lazy loading
- Implementare caching
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 4. Responsive Design
- Mobile-first approach
- Breakpoint standard
- Layout fluidi
- Testing multi-device
<<<<<<< HEAD
## Sviluppo Componenti
=======

## Sviluppo Componenti

>>>>>>> laraxot/develop
### 1. Struttura
```php
class CustomComponent extends Component
{
    // Proprietà pubbliche con type hint
    public string $label;
    public ?string $hint = null;
    
    // Proprietà private per stato interno
    private bool $isLoading = false;
<<<<<<< HEAD
=======
    
>>>>>>> laraxot/develop
    // Metodi pubblici con return type
    public function render(): View
    {
        return view('ui::components.custom');
    }
}
```
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 2. Template
```blade
<div class="custom-component">
    {{-- Utilizzare slot nominati --}}
    <div class="header">
        {{ $header ?? '' }}
    </div>
<<<<<<< HEAD
    {{-- Gestire stati condizionali --}}
    <div class="content {{ $isLoading ? 'loading' : '' }}">
        {{ $slot }}
    {{-- Fornire fallback --}}
    <div class="footer">
        {{ $footer ?? 'Default Footer' }}
</div>
=======
    
    {{-- Gestire stati condizionali --}}
    <div class="content {{ $isLoading ? 'loading' : '' }}">
        {{ $slot }}
    </div>
    
    {{-- Fornire fallback --}}
    <div class="footer">
        {{ $footer ?? 'Default Footer' }}
    </div>
</div>
```

>>>>>>> laraxot/develop
### 3. Stili
```scss
// Utilizzare BEM naming
.custom-component {
    &__header { }
    &__content { }
    &__footer { }
<<<<<<< HEAD
    // Stati
    &--loading { }
    &--disabled { }
    // Varianti
    &--primary { }
    &--secondary { }
## Form Components
### 1. Validazione
=======
    
    // Stati
    &--loading { }
    &--disabled { }
    
    // Varianti
    &--primary { }
    &--secondary { }
}
```

## Form Components

### 1. Validazione
```php
>>>>>>> laraxot/develop
// Definire regole di validazione
public array $rules = [
    'email' => ['required', 'email'],
    'password' => ['required', 'min:8'],
];
<<<<<<< HEAD
// Messaggi personalizzati
public array $messages = [
    'email.required' => 'trans.validation.email.required',
### 2. Eventi
// Emettere eventi standard
$this->emit('saved');
$this->emit('deleted', $id);
// Ascoltare eventi
protected $listeners = [
    'refresh' => '$refresh',
### 3. Loading States
// Gestire stati di caricamento
public function save()
    $this->loading = true;
    // ...
    $this->loading = false;
## Table Components
### 1. Configurazione
// Definire colonne in modo chiaro
protected function getColumns(): array
=======

// Messaggi personalizzati
public array $messages = [
    'email.required' => 'trans.validation.email.required',
];
```

### 2. Eventi
```php
// Emettere eventi standard
$this->emit('saved');
$this->emit('deleted', $id);

// Ascoltare eventi
protected $listeners = [
    'refresh' => '$refresh',
];
```

### 3. Loading States
```php
// Gestire stati di caricamento
public function save()
{
    $this->loading = true;
    // ...
    $this->loading = false;
}
```

## Table Components

### 1. Configurazione
```php
// Definire colonne in modo chiaro
protected function getColumns(): array
{
>>>>>>> laraxot/develop
    return [
        Column::make('name')->sortable()->searchable(),
        Column::make('email')->searchable(),
    ];
<<<<<<< HEAD
// Configurare filtri
protected function getFilters(): array
        Filter::make('active')->query(fn ($query) => $query->where('active', true)),
### 2. Actions
// Definire azioni in modo modulare
protected function getActions(): array
        Action::make('edit')->visible(fn ($record) => $this->can('edit', $record)),
        Action::make('delete')->requiresConfirmation(),
## Chart Components
### 1. Dati
// Formattare dati in modo standard
protected function getData(): array
=======
}

// Configurare filtri
protected function getFilters(): array
{
    return [
        Filter::make('active')->query(fn ($query) => $query->where('active', true)),
    ];
}
```

### 2. Actions
```php
// Definire azioni in modo modulare
protected function getActions(): array
{
    return [
        Action::make('edit')->visible(fn ($record) => $this->can('edit', $record)),
        Action::make('delete')->requiresConfirmation(),
    ];
}
```

## Chart Components

### 1. Dati
```php
// Formattare dati in modo standard
protected function getData(): array
{
    return [
>>>>>>> laraxot/develop
        'labels' => ['Gen', 'Feb', 'Mar'],
        'datasets' => [
            [
                'label' => 'Vendite',
                'data' => [10, 20, 30],
            ],
        ],
<<<<<<< HEAD
### 2. Opzioni
// Configurare opzioni in modo chiaro
protected function getOptions(): array
=======
    ];
}
```

### 2. Opzioni
```php
// Configurare opzioni in modo chiaro
protected function getOptions(): array
{
    return [
>>>>>>> laraxot/develop
        'responsive' => true,
        'maintainAspectRatio' => false,
        'plugins' => [
            'legend' => [
                'position' => 'bottom',
<<<<<<< HEAD
## Testing
### 1. Unit Tests
public function test_component_renders()
    $component = Livewire::test(CustomComponent::class);
    $component->assertSee('Expected Content');
### 2. Browser Tests
public function test_component_interaction()
=======
            ],
        ],
    ];
}
```

## Testing

### 1. Unit Tests
```php
public function test_component_renders()
{
    $component = Livewire::test(CustomComponent::class);
    $component->assertSee('Expected Content');
}
```

### 2. Browser Tests
```php
public function test_component_interaction()
{
>>>>>>> laraxot/develop
    $this->browse(function (Browser $browser) {
        $browser->visit('/page')
            ->click('@button')
            ->assertSee('Result');
    });
<<<<<<< HEAD
## Documentazione
### 1. PHPDoc
=======
}
```

## Documentazione

### 1. PHPDoc
```php
>>>>>>> laraxot/develop
/**
 * Componente per la gestione di form avanzati.
 *
 * @property string $label Label del componente
 * @property string|null $hint Suggerimento opzionale
<<<<<<< HEAD
=======
 *
>>>>>>> laraxot/develop
 * @method void save() Salva i dati del form
 * @method void reset() Resetta il form
 */
class AdvancedForm extends Component
<<<<<<< HEAD
=======
```

>>>>>>> laraxot/develop
### 2. README
- Descrizione chiara
- Esempi di utilizzo
- Configurazioni disponibili
### Versione HEAD
<<<<<<< HEAD
- Breaking changes 
## Collegamenti tra versioni di best-practices.md
* [best-practices.md](docs/tecnico/filament/best-practices.md)
* [best-practices.md](../../../Xot/project_docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/project_docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/project_docs/best-practices.md)
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)
### Versione Incoming
---
=======

- Breaking changes 
## Collegamenti tra versioni di best-practices.md
* [best-practices.md](docs/tecnico/filament/best-practices.md)
* [best-practices.md](../../../Xot/docs/laraxot/best-practices.md)
* [best-practices.md](../../../UI/docs/best-practices.md)
* [best-practices.md](../../../../Themes/One/docs/best-practices.md)


### Versione Incoming

- Breaking changes 

---

>>>>>>> laraxot/develop
