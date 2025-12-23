# Sistema di Blocchi

## Introduzione
Il sistema di blocchi di il progetto è un'architettura modulare che permette di costruire pagine e componenti attraverso blocchi riutilizzabili. Ogni blocco è un componente Filament che genera una struttura JSON standardizzata e viene renderizzato attraverso un componente Blade dedicato.
<<<<<<< HEAD
## Architettura
=======

## Architettura

>>>>>>> laraxot/develop
### Struttura Base
```
laravel/Modules/Cms/
├── app/
│   └── Filament/
│       └── Blocks/           # Definizioni Filament dei blocchi
├── Resources/
│   └── views/
│       └── components/
│           └── blocks/       # Componenti Blade per il rendering
└── docs/
    └── blocks/              # Documentazione dei blocchi
<<<<<<< HEAD
### Tipi di Blocchi
1. **[NavigationBlock](../laravel/Modules/Cms/project_docs/blocks/navigation-block.md)**
=======
```

### Tipi di Blocchi

>>>>>>> laraxot/develop
1. **[NavigationBlock](../laravel/Modules/Cms/docs/blocks/navigation-block.md)**
   - Gestione menu di navigazione
   - Header e footer
   - Menu multilivello
   - Supporto mobile
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
2. **ContentBlock**
   - Testo formattato
   - Immagini e media
   - Layout flessibile
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
3. **FormBlock**
   - Form interattivi
   - Validazione
   - Gestione submit
<<<<<<< HEAD
## Implementazione
### 1. Definizione Blocco
```php
use Filament\Forms\Components\Builder\Block;
=======

## Implementazione

### 1. Definizione Blocco
```php
use Filament\Forms\Components\Builder\Block;

>>>>>>> laraxot/develop
class CustomBlock extends Block
{
    public static function getBlockSchema(): array
    {
        return [
            // Schema del blocco
        ];
    }
}
<<<<<<< HEAD
### 2. Struttura JSON
```json
    "type": "block_type",
    "data": {
        // Dati specifici del blocco
### 3. Rendering
// In PageContent
public function render()
    return view('cms::components.blocks.' . $this->type, [
        'block' => $this->data
    ]);
## Best Practices
=======
```

### 2. Struttura JSON
```json
{
    "type": "block_type",
    "data": {
        // Dati specifici del blocco
    }
}
```

### 3. Rendering
```php
// In PageContent
public function render()
{
    return view('cms::components.blocks.' . $this->type, [
        'block' => $this->data
    ]);
}
```

## Best Practices

>>>>>>> laraxot/develop
### 1. Struttura
- Un blocco per funzionalità
- Schema JSON consistente
- Documentazione completa
- Test automatizzati
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 2. Performance
- Ottimizzazione cache
- Lazy loading
- Minimizzazione DOM
- Asset management
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 3. Manutenibilità
- Codice pulito
- Dipendenze chiare
- Versionamento
- Backup automatici
<<<<<<< HEAD
## Links
- [Documentazione Blocchi](../laravel/Modules/Cms/project_docs/blocks/)
- [Documentazione Blocchi](../laravel/Modules/Cms/docs/blocks/)
- [Gestione Contenuti](content-management.md)
- [Best Practices UI](ui-best-practices.md)
=======

## Links
- [Documentazione Blocchi](../laravel/Modules/Cms/docs/blocks/)
- [Gestione Contenuti](content-management.md)
- [Best Practices UI](ui-best-practices.md)

>>>>>>> laraxot/develop
## Note
Questa documentazione è parte del sistema di documentazione di il progetto. Per dettagli specifici sui singoli blocchi, consultare la documentazione dei rispettivi moduli. 
