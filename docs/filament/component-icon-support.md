# Supporto per Icone nei Componenti Filament

## Riepilogo della Compatibilità
<<<<<<< HEAD
Questa tabella mostra quali componenti Filament supportano quali metodi per le icone:
=======

Questa tabella mostra quali componenti Filament supportano quali metodi per le icone:

>>>>>>> laraxot/develop
| Componente          | `icon()`   | `prefixIcon()` | `suffixIcon()` | Alternative |
|---------------------|------------|----------------|----------------|-------------|
| Section             | ✅         | ❌             | ❌             | - |
| Card                | ✅         | ❌             | ❌             | - |
| TextInput           | ❌         | ✅             | ✅             | - |
| Textarea            | ❌         | ✅             | ✅             | - |
| Select              | ❌         | ✅             | ✅             | - |
| Toggle              | ❌         | ✅             | ✅             | - |
| Checkbox            | ❌         | ✅             | ✅             | - |
| Radio               | ❌         | ✅             | ✅             | - |
| FileUpload          | ❌         | ❌             | ❌             | Usare Section o SlotIcon |
| DatePicker          | ❌         | ✅             | ✅             | - |
| TimePicker          | ❌         | ✅             | ✅             | - |
| ColorPicker         | ❌         | ✅             | ✅             | - |
| KeyValue            | ❌         | ❌             | ❌             | - |
| RichEditor          | ❌         | ❌             | ❌             | - |
| Repeater            | ✅         | ❌             | ❌             | - |
| Builder             | ✅         | ❌             | ❌             | - |
| Tabs                | ✅         | ❌             | ❌             | - |
| Tab (Tabs\Tab)      | ✅         | ❌             | ❌             | - |
| Wizard              | ✅         | ❌             | ❌             | - |
| Step (Wizard\Step)  | ✅         | ❌             | ❌             | - |
<<<<<<< HEAD
## Metodi principali per le icone
### `icon()`
Il metodo `icon()` è tipicamente supportato dai componenti di layout e contenitore. Si utilizza così:
=======

## Metodi principali per le icone

### `icon()`

Il metodo `icon()` è tipicamente supportato dai componenti di layout e contenitore. Si utilizza così:

>>>>>>> laraxot/develop
```php
Forms\Components\Section::make('Sezione')
    ->icon('heroicon-o-user')
```
<<<<<<< HEAD
### `prefixIcon()` e `suffixIcon()`
I metodi `prefixIcon()` e `suffixIcon()` sono generalmente supportati dai componenti di input. Si utilizzano così:
Forms\Components\TextInput::make('name')
    ->prefixIcon('heroicon-o-user')
## Alternative per componenti che non supportano icone
Per i componenti che non supportano direttamente le icone (come FileUpload), ecco alcune alternative:
### 1. Racchiudere in una Section
=======

### `prefixIcon()` e `suffixIcon()`

I metodi `prefixIcon()` e `suffixIcon()` sono generalmente supportati dai componenti di input. Si utilizzano così:

```php
Forms\Components\TextInput::make('name')
    ->prefixIcon('heroicon-o-user')
```

## Alternative per componenti che non supportano icone

Per i componenti che non supportano direttamente le icone (come FileUpload), ecco alcune alternative:

### 1. Racchiudere in una Section

```php
>>>>>>> laraxot/develop
Forms\Components\Section::make('Documenti')
    ->icon('heroicon-o-document-text')
    ->schema([
        Forms\Components\FileUpload::make('document')
            // configurazione...
    ])
<<<<<<< HEAD
### 2. Usare uno slot personalizzato (per componenti che supportano gli slot)
=======
```

### 2. Usare uno slot personalizzato (per componenti che supportano gli slot)

```php
>>>>>>> laraxot/develop
Forms\Components\FileUpload::make('document')
    ->label(function () {
        return new HtmlString('
            <div class="flex items-center gap-x-2">
                <x-filament::icon 
                    name="heroicon-o-document-text" 
                    class="h-5 w-5 text-gray-500" 
                />
                <span>Documento</span>
            </div>
        ');
    })
<<<<<<< HEAD
## Errori comuni
### 1. Usare `prefixIcon()` su FileUpload
// ❌ QUESTO CAUSERÀ UN ERRORE
    ->prefixIcon('heroicon-o-document-text')
    // BadMethodCallException: Method Filament\Forms\Components\FileUpload::prefixIcon does not exist.
### 2. Usare `icon()` su TextInput
    // BadMethodCallException: Method Filament\Forms\Components\TextInput::icon does not exist.
## Best Practices
1. **Verificare la documentazione** - Controllare sempre la documentazione ufficiale Filament per il componente specifico
2. **Testare incrementalmente** - Aggiungere un componente alla volta e verificare che funzioni
3. **Utilizzare IDE con autocompletamento** - Gli IDE come PhpStorm possono mostrare i metodi disponibili
## Riferimenti
- [Documentazione Filament Forms](https://filamentphp.com/docs/3.x/forms/fields/overview)
- [API Components Filament](../UI/docs/filament/components-api.md)
- [API Components Filament](/var/www/html/base_saluteora/laravel/Modules/UI/docs/filament/components-api.md)
=======
```

## Errori comuni

### 1. Usare `prefixIcon()` su FileUpload

```php
// ❌ QUESTO CAUSERÀ UN ERRORE
Forms\Components\FileUpload::make('document')
    ->prefixIcon('heroicon-o-document-text')
    // BadMethodCallException: Method Filament\Forms\Components\FileUpload::prefixIcon does not exist.
```

### 2. Usare `icon()` su TextInput

```php
// ❌ QUESTO CAUSERÀ UN ERRORE
Forms\Components\TextInput::make('name')
    ->icon('heroicon-o-user')
    // BadMethodCallException: Method Filament\Forms\Components\TextInput::icon does not exist.
```

## Best Practices

1. **Verificare la documentazione** - Controllare sempre la documentazione ufficiale Filament per il componente specifico
2. **Testare incrementalmente** - Aggiungere un componente alla volta e verificare che funzioni
3. **Utilizzare IDE con autocompletamento** - Gli IDE come PhpStorm possono mostrare i metodi disponibili

## Riferimenti

- [Documentazione Filament Forms](https://filamentphp.com/docs/3.x/forms/fields/overview)
- [API Components Filament](/var/www/html/base_saluteora/laravel/Modules/UI/docs/filament/components-api.md)

>>>>>>> laraxot/develop
> **NOTA**: Questa documentazione segue la regola di centralizzare tutte le documentazioni UI nel modulo UI con collegamenti bidirezionali dagli altri moduli.
