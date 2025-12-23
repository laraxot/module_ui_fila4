# Componenti Filament per Location e Studio Selection

## Overview
<<<<<<< HEAD
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo .
Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo SaluteOra.
## Componenti Implementati
### 1. LocationSelector Component
**Percorso**: `app/Filament/Forms/Components/LocationSelector.php`
#### Descrizione
Componente Filament per la selezione gerarchica di Regione → Provincia → CAP con aggiornamenti live e integrazione con il modulo Geo.
=======

Questi componenti Filament sono stati creati per supportare la selezione geografica e la gestione degli studi odontoiatrici nel widget `FindDoctorAndAppointmentWidget` del modulo SaluteOra.

## Componenti Implementati

### 1. LocationSelector Component

**Percorso**: `app/Filament/Forms/Components/LocationSelector.php`

#### Descrizione
Componente Filament per la selezione gerarchica di Regione → Provincia → CAP con aggiornamenti live e integrazione con il modulo Geo.

>>>>>>> laraxot/develop
#### Caratteristiche
- ✅ **Selezione Gerarchica**: Regione → Provincia → CAP  
- ✅ **Live Updates**: I campi si aggiornano automaticamente
- ✅ **Integrazione Geo**: Utilizza i modelli del modulo Geo
- ✅ **Validazione Cascata**: I campi dipendenti si validano automaticamente
- ✅ **Personalizzazione**: Campi field names configurabili
<<<<<<< HEAD
#### Utilizzo Base
```php
use Modules\UI\Filament\Forms\Components\LocationSelector;
// Utilizzo semplice
LocationSelector::make()
    ->required()
// Utilizzo con field names personalizzati
    ->regionField('region_code')
    ->provinceField('province_code')
    ->capField('postal_code')
```
### 2. StudioSelector Component (Semplificato)
**Percorso**: `laravel/Modules/UI/resources/views/components/ui/studio-selector.blade.php`
Componente Blade per la selezione di studi odontoiatrici tramite pulsanti radio-style che popolano un TextInput.
=======

#### Utilizzo Base

```php
use Modules\UI\Filament\Forms\Components\LocationSelector;

// Utilizzo semplice
LocationSelector::make()
    ->required()

// Utilizzo con field names personalizzati
LocationSelector::make()
    ->regionField('region_code')
    ->provinceField('province_code')
    ->capField('postal_code')
    ->required()
```

### 2. StudioSelector Component (Semplificato)

**Percorso**: `laravel/Modules/UI/resources/views/components/ui/studio-selector.blade.php`

#### Descrizione
Componente Blade per la selezione di studi odontoiatrici tramite pulsanti radio-style che popolano un TextInput.

#### Caratteristiche
>>>>>>> laraxot/develop
- ✅ **Pulsanti Radio-Style**: Selezione singola con visual feedback
- ✅ **Informazioni Compatte**: Nome, indirizzo, contatti essenziali
- ✅ **Empty States**: Gestione caso nessuno studio trovato
- ✅ **Integrazione Livewire**: wire:click automatico
- ✅ **Layout Responsive**: Ottimizzato mobile/desktop
<<<<<<< HEAD
=======

#### Utilizzo Base

>>>>>>> laraxot/develop
```blade
<x-ui::ui.studio-selector 
    :studios="$studios"
    :selected-studio="$selectedStudioId"
    target-field="selected_studio"
/>
<<<<<<< HEAD
## Integrazione nel FindDoctorAndAppointmentWidget
### Step 1: Search Step (Aggiornato)
=======
```

## Integrazione nel FindDoctorAndAppointmentWidget

### Step 1: Search Step (Aggiornato)

```php
>>>>>>> laraxot/develop
protected function getSearchStepSchema(): array
{
    return [
        LocationSelector::make()
            ->regionField('region')
            ->provinceField('province')
            ->capField('cap')
            ->required()
            ->searchable()
    ];
}
<<<<<<< HEAD
### Step 2: Studio Step (Semplificato)
protected function getStudioStepSchema(): array
        // Titolo step
        View::make('<nome progetto>::filament.widgets.studio-step-header')
=======
```

### Step 2: Studio Step (Semplificato)

```php
protected function getStudioStepSchema(): array
{
    return [
        // Titolo step
>>>>>>> laraxot/develop
        View::make('saluteora::filament.widgets.studio-step-header')
            ->viewData([
                'studiosCount' => $this->getStudiosCount(),
                'geographicArea' => $this->getGeographicAreaName(),
            ])
            ->visible(fn (): bool => $this->hasValidGeographicSelection()),
<<<<<<< HEAD
        // Pulsanti selezione studio
        View::make('<nome progetto>::filament.widgets.studio-selector')
        View::make('saluteora::filament.widgets.studio-selector')
                'studios' => $this->getStudiosForSelectedArea(),
                'selectedStudio' => $this->data['selected_studio'] ?? null,
        // TextInput per mostrare studio selezionato
        TextInput::make('selected_studio_name')
            ->label(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('<nome progetto>::widgets.find_doctor.fields.selected_studio.placeholder'))
=======

        // Pulsanti selezione studio
        View::make('saluteora::filament.widgets.studio-selector')
            ->viewData([
                'studios' => $this->getStudiosForSelectedArea(),
                'selectedStudio' => $this->data['selected_studio'] ?? null,
            ])
            ->visible(fn (): bool => $this->hasValidGeographicSelection()),

        // TextInput per mostrare studio selezionato
        TextInput::make('selected_studio_name')
>>>>>>> laraxot/develop
            ->label(__('saluteora::widgets.find_doctor.fields.selected_studio.label'))
            ->placeholder(__('saluteora::widgets.find_doctor.fields.selected_studio.placeholder'))
            ->readonly()
            ->visible(fn (): bool => !empty($this->data['selected_studio']))
            ->suffixIcon('heroicon-o-check-circle')
            ->suffixIconColor('success'),
<<<<<<< HEAD
        // Hidden field per memorizzare ID studio
        Hidden::make('selected_studio'),
### Azione Livewire Semplificata
=======

        // Hidden field per memorizzare ID studio
        Hidden::make('selected_studio'),
    ];
}
```

### Azione Livewire Semplificata

```php
>>>>>>> laraxot/develop
/**
 * Azione Livewire per selezione studio (popola TextInput)
 */
public function selectStudio(int $studioId): void
<<<<<<< HEAD
=======
{
>>>>>>> laraxot/develop
    $studio = Studio::find($studioId);
    
    if (!$studio || !$studio->active) {
        $this->addError('selected_studio', 'Studio non disponibile');
        return;
    }
<<<<<<< HEAD
    // Aggiorna i dati del form
    $this->data['selected_studio'] = $studioId;
    $this->data['selected_studio_name'] = $studio->name;
    // Notifica il cambio di stato
    $this->dispatch('studio-selected', studioId: $studioId, studioName: $studio->name);
## Flusso UX Semplificato
=======

    // Aggiorna i dati del form
    $this->data['selected_studio'] = $studioId;
    $this->data['selected_studio_name'] = $studio->name;
    
    // Notifica il cambio di stato
    $this->dispatch('studio-selected', studioId: $studioId, studioName: $studio->name);
}
```

## Flusso UX Semplificato

>>>>>>> laraxot/develop
### 1. **Step Selezione Area**
- Utente seleziona Regione → Provincia → CAP
- Live updates automatici tra i campi
- Validazione cascata
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 2. **Step Selezione Studio**  
- Visualizzazione pulsanti per ogni studio nell'area
- Click su pulsante = selezione studio
- Visual feedback immediato (radio indicator + colori)
- TextInput readonly mostra studio selezionato
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 3. **Vantaggi Approccio Semplificato**
- ✅ **UX Intuitiva**: Pattern radio button familiare
- ✅ **Performance**: Meno componenti complessi
- ✅ **Manutenibilità**: Logica più semplice
- ✅ **Accessibilità**: Supporto keyboard navigation
- ✅ **Mobile Friendly**: Touch target ottimizzati
<<<<<<< HEAD
## Performance e Ottimizzazioni
### Caching Strategy
// Cache risultati studio per area
protected function getStudiosForSelectedArea(): Collection
    $cacheKey = "studios_area_{$this->data['region']}_{$this->data['province']}_{$this->data['cap']}";
=======

## Performance e Ottimizzazioni

### Caching Strategy
```php
// Cache risultati studio per area
protected function getStudiosForSelectedArea(): Collection
{
    $cacheKey = "studios_area_{$this->data['region']}_{$this->data['province']}_{$this->data['cap']}";
    
>>>>>>> laraxot/develop
    return cache()->remember($cacheKey, 300, function () {
        return Studio::query()
            ->active()
            ->with(['addresses'])
            ->whereHas('addresses', function ($query) {
                $query->where('region_code', $this->data['region'])
                      ->where('province_code', $this->data['province'])
                      ->where('postal_code', $this->data['cap']);
            })
            ->limit(10)
            ->get();
    });
<<<<<<< HEAD
## Testing
### Test Funzionale Semplificato
class FindDoctorWidgetStep2Test extends TestCase
=======
}
```

## Testing

### Test Funzionale Semplificato
```php
class FindDoctorWidgetStep2Test extends TestCase
{
>>>>>>> laraxot/develop
    /** @test */
    public function clicking_studio_button_populates_textinput()
    {
        $studio = Studio::factory()->create(['name' => 'Studio Test']);
        
        $widget = Livewire::test(FindDoctorAndAppointmentWidget::class)
            ->set('data.region', '12')
            ->set('data.province', 'RM')
            ->set('data.cap', '00042')
            ->call('selectStudio', $studio->id);
            
        $widget->assertSet('data.selected_studio', $studio->id)
               ->assertSet('data.selected_studio_name', 'Studio Test');
<<<<<<< HEAD
## Migration da Approccio Complesso
=======
    }
}
```

## Migration da Approccio Complesso

>>>>>>> laraxot/develop
### Prima (Complesso)
- StudioCard con molte informazioni
- Azioni multiple (Prenota, Dettagli, Contatti)
- Layout complesso responsive
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### Dopo (Semplificato)
- Pulsanti radio-style semplici
- Informazioni essenziali (nome, indirizzo)
- Un'azione sola: selezione studio
- TextInput readonly per conferma
<<<<<<< HEAD
## Best Practices
=======

## Best Practices

>>>>>>> laraxot/develop
### 1. **Semplicità Prima di Tutto**
- Componenti focalizzati su un singolo scopo
- UX patterns familiari (radio buttons)
- Meno stato da gestire
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 2. **Performance**
- Componenti Blade leggeri
- Cache appropriato per query
- Lazy loading quando possibile
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
### 3. **Accessibilità**
- Supporto keyboard navigation
- ARIA labels appropriati
- Contrasti colori sufficienti
- Touch targets ottimizzati
<<<<<<< HEAD
---
**Creato**: 26 Giugno 2025  
**Versione**: 2.0 - Semplificato  
**Stato**: Implementation Ready  
**Approccio**: Pulsanti + TextInput (semplice e diretto) 
=======

---

**Creato**: 26 Giugno 2025  
**Versione**: 2.0 - Semplificato  
**Stato**: Implementation Ready  
**Approccio**: Pulsanti + TextInput (semplice e diretto) 
>>>>>>> laraxot/develop
