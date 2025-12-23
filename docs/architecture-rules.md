# Regole Architetturali

## Principi Fondamentali

1. **No Controller Manuali**
   - Non creare controller manualmente
   - Utilizzare Filament per la gestione del backend
   - Utilizzare Folio per la gestione delle pagine

2. **No Route Manuali**
   - Non modificare `web.php`
   - Non aggiungere route manualmente
   - Lasciare che Filament e Folio gestiscano le rotte

3. **No Middleware Personalizzati**
   - Utilizzare i middleware forniti da Filament e Folio
   - Non creare middleware personalizzati per la gestione delle rotte
   - Utilizzare i middleware di localizzazione forniti da Laravel Localization

4. **Risorse Statiche**
   - Le immagini pubbliche devono essere in `/public_html/images`
   - I file SVG dei componenti devono essere in `Modules/UI/resources/svg`
   - Non utilizzare percorsi hardcoded per le risorse statiche
   - Utilizzare sempre gli helper di Laravel per i percorsi delle risorse

5. **Service Provider**
   - I service provider devono essere in `Modules/[ModuleName]/app/Providers`
   - Ereditare da `XotBaseServiceProvider` per i moduli
   - Non duplicare la registrazione dei componenti già registrati
   - Utilizzare i trait e le interfacce fornite dai service provider base

6. **Componenti UI**
   - Utilizzare sempre i componenti Blade di Filament quando disponibili
   - Non creare componenti personalizzati se esiste già un equivalente Filament
   - Seguire le convenzioni di naming e stile di Filament
   - Utilizzare i componenti Filament per:
     - Avatar
     - Badge
     - Breadcrumbs
     - Button
     - Checkbox
     - Dropdown
     - Fieldset
     - Icon button
     - Input
     - Input wrapper
     - Link
     - Loading indicator
     - Modal
     - Pagination
     - Section
     - Select
     - Tabs

## Struttura del Progetto

### Filament
- Tutte le risorse devono essere in `app/Filament/Resources`
- Utilizzare i trait e le interfacce fornite da Filament
- Seguire le convenzioni di naming di Filament
- Utilizzare i componenti Blade di Filament per l'interfaccia utente

### Folio
- Tutte le pagine devono essere in `resources/views/pages`
- Utilizzare i middleware di Folio
- Seguire le convenzioni di routing di Folio

### Localizzazione
- Utilizzare Laravel Localization per la gestione delle traduzioni
- Non implementare soluzioni personalizzate per la localizzazione
- Seguire le best practices di Laravel Localization

### Risorse Statiche
- `/public_html/images` - Immagini pubbliche
- `Modules/UI/resources/svg` - SVG dei componenti
- `Modules/UI/resources/css` - Stili dei componenti
- `Modules/UI/resources/js` - Script dei componenti

### Service Provider
- `Modules/UI/app/Providers` - Service provider del modulo UI
- `Modules/Xot/app/Providers` - Service provider base
- `app/Providers` - Service provider dell'applicazione

## Best Practices

1. **Filament**
   - Utilizzare i form builder di Filament
   - Utilizzare i table builder di Filament
   - Utilizzare i widget di Filament
   - Localizzare le risorse usando Laravel Localization
   - Utilizzare i componenti Blade di Filament per l'interfaccia utente

2. **Folio**
   - Organizzare le pagine per lingua
   - Utilizzare i componenti Blade
   - Localizzare le pagine usando Laravel Localization

3. **Localizzazione**
   - Utilizzare i file di traduzione in `resources/lang`
   - Utilizzare le funzioni helper di Laravel (`__()`, `trans()`)
   - Non hardcodare testi nelle view

4. **Risorse Statiche**
   - Utilizzare `asset()` per le risorse pubbliche
   - Utilizzare `Vite::asset()` per le risorse compilate
   - Utilizzare i componenti SVG registrati per le icone
   - Non hardcodare percorsi delle risorse

5. **Service Provider**
   - Verificare sempre i service provider esistenti prima di crearne di nuovi
   - Utilizzare l'ereditarietà per estendere le funzionalità
   - Non duplicare la registrazione dei componenti
   - Seguire le convenzioni di naming dei moduli

6. **Componenti UI**
   - Preferire i componenti Filament ai componenti personalizzati
   - Seguire le convenzioni di stile di Filament
   - Utilizzare i componenti Filament per la consistenza dell'interfaccia
   - Documentare eventuali personalizzazioni dei componenti Filament

## Esempi

### ❌ Non Fare

```php
// Non creare controller manualmente
class ExampleController extends Controller
{
    public function index()
    {
        return view('example');
    }
}

// Non aggiungere route manualmente
Route::get('/example', [ExampleController::class, 'index']);

// Non creare middleware personalizzati
class CustomMiddleware
{
    public function handle($request, Closure $next)
    {
        // ...
    }
}

// Non hardcodare percorsi delle risorse
