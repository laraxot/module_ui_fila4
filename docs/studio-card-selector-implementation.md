<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1f9515b (.)
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
=======
>>>>>>> laraxot/develop
# StudioCardSelector Component - Modulo UI

## 🎯 **Panoramica**
Componente Filament Form altamente riutilizzabile per la selezione di studi medici/odontoiatrici attraverso un'interfaccia card visuale moderna e responsive.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
## 🏗️ **Architettura Component**
=======

## 🏗️ **Architettura Component**

>>>>>>> 1f9515b (.)
=======

## 🏗️ **Architettura Component**

>>>>>>> 8ee2a17 (.)
=======

## 🏗️ **Architettura Component**

>>>>>>> 7eb1087 (.)
=======
## 🏗️ **Architettura Component**
>>>>>>> dc14e10 (.)
=======
## 🏗️ **Architettura Component**
>>>>>>> laraxot/develop
### Classe PHP
```php
// Modules/UI/app/Forms/Components/StudioCardSelector.php
<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
declare(strict_types=1);
namespace Modules\UI\Forms\Components;
use Filament\Forms\Components\Field;
use Illuminate\Database\Eloquent\Collection;
use Closure;
<<<<<<< HEAD
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)

=======
>>>>>>> dc14e10 (.)
declare(strict_types=1);
namespace Modules\UI\Forms\Components;
use Filament\Forms\Components\Field;
use Illuminate\Database\Eloquent\Collection;
use Closure;
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1f9515b (.)
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
=======
>>>>>>> dc14e10 (.)
=======
>>>>>>> laraxot/develop
class StudioCardSelector extends Field
{
    protected string $view = 'ui::forms.components.studio-card-selector';
    
    // Dati studios da visualizzare
    protected Collection|Closure|null $studios = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
>>>>>>> 1f9515b (.)
=======
    
>>>>>>> 8ee2a17 (.)
=======
    
>>>>>>> 7eb1087 (.)
=======
>>>>>>> dc14e10 (.)
=======
>>>>>>> laraxot/develop
    // Personalizzazioni UI
    protected bool $showDistance = false;
    protected bool $showSpecializations = false;
    protected bool $showPhone = false;
    protected string $cardLayout = 'default'; // 'default', 'compact', 'detailed'
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
>>>>>>> 1f9515b (.)
=======
    
>>>>>>> 8ee2a17 (.)
=======
    
>>>>>>> 7eb1087 (.)
=======
>>>>>>> dc14e10 (.)
=======
>>>>>>> laraxot/develop
    // Configure studios data source
    public function studios(Collection|Closure $studios): static
    {
        $this->studios = $studios;
        return $this;
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
    // Enable/disable features
    public function showDistance(bool $show = true): static
        $this->showDistance = $show;
    public function showSpecializations(bool $show = true): static
        $this->showSpecializations = $show;
    public function showPhone(bool $show = true): static
        $this->showPhone = $show;
    // Layout variants
    public function compact(): static
        $this->cardLayout = 'compact';
    public function detailed(): static
        $this->cardLayout = 'detailed';
    // Data getters for view
    public function getStudios(): Collection
        return $this->evaluate($this->studios) ?? collect();
    public function getCardLayout(): string
        return $this->cardLayout;
    public function shouldShowDistance(): bool
        return $this->showDistance;
    public function shouldShowSpecializations(): bool
        return $this->showSpecializations;
    public function shouldShowPhone(): bool
        return $this->showPhone;
}
```
## 🔧 **Utilizzo nel Widget**
### Implementazione Base
// Nel widget FindDoctorAndAppointmentWidget
use Modules\UI\Forms\Components\StudioCardSelector;
protected function getStudioStepSchema(): array
<<<<<<< HEAD
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
    
=======
>>>>>>> dc14e10 (.)
    // Enable/disable features
    public function showDistance(bool $show = true): static
        $this->showDistance = $show;
    public function showSpecializations(bool $show = true): static
        $this->showSpecializations = $show;
    public function showPhone(bool $show = true): static
        $this->showPhone = $show;
    // Layout variants
    public function compact(): static
        $this->cardLayout = 'compact';
    public function detailed(): static
        $this->cardLayout = 'detailed';
    // Data getters for view
    public function getStudios(): Collection
        return $this->evaluate($this->studios) ?? collect();
    public function getCardLayout(): string
        return $this->cardLayout;
    public function shouldShowDistance(): bool
        return $this->showDistance;
    public function shouldShowSpecializations(): bool
        return $this->showSpecializations;
    public function shouldShowPhone(): bool
        return $this->showPhone;
}
```
## 🔧 **Utilizzo nel Widget**
### Implementazione Base
// Nel widget FindDoctorAndAppointmentWidget
use Modules\UI\Forms\Components\StudioCardSelector;
protected function getStudioStepSchema(): array
<<<<<<< HEAD
{
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1f9515b (.)
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
=======
>>>>>>> dc14e10 (.)
=======
>>>>>>> laraxot/develop
    return [
        'selected_studio' => StudioCardSelector::make('selected_studio')
            ->studios(fn (Get $get) => $this->getStudiosForLocation($get))
            ->showDistance()
            ->showPhone()
            ->required()
    ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
private function getStudiosForLocation(Get $get): Collection
    $cap = $get('cap');
    $province = $get('province'); 
    $region = $get('region');
    if (!$cap || !$province || !$region) {
        return collect();
<<<<<<< HEAD
<<<<<<< HEAD
    }
    
<<<<<<< HEAD
<<<<<<< HEAD
    return \Modules\<nome progetto>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
=======
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
>>>>>>> 3057426 (.)
=======
=======
>>>>>>> 4d64b9a (.)
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\SaluteOra\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
<<<<<<< HEAD
>>>>>>> 727968c (.)
>>>>>>> ef5ce98 (.)
=======
>>>>>>> 4d64b9a (.)
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
}

=======
>>>>>>> dc14e10 (.)
private function getStudiosForLocation(Get $get): Collection
    $cap = $get('cap');
    $province = $get('province'); 
    $region = $get('region');
    if (!$cap || !$province || !$region) {
        return collect();
<<<<<<< HEAD
    }
    
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    return \Modules\SaluteOra\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
>>>>>>> 1f9515b (.)
=======
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
>>>>>>> 8ee2a17 (.)
=======
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
>>>>>>> 7eb1087 (.)
=======
=======
>>>>>>> dc14e10 (.)
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\SaluteOra\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
<<<<<<< HEAD
>>>>>>> 727968c (.)
>>>>>>> a63dc48 (.)
=======
>>>>>>> dc14e10 (.)
=======
    return \Modules\<nome modulo>\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
    return \Modules\SaluteOra\Models\Studio::whereHas('address', function($q) use ($cap, $province, $region) {
>>>>>>> laraxot/develop
        $q->where('postal_code', $cap)
          ->where('administrative_area_level_3', $province)
          ->where('administrative_area_level_2', $region);
    })
    ->where('active', true)
    ->with(['address', 'doctors', 'specializations'])
    ->get();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
## 🌐 **Sistema Traduzioni**
### File Traduzioni UI
// Modules/UI/lang/it/studio-selector.php
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
}
```

=======
>>>>>>> dc14e10 (.)
## 🌐 **Sistema Traduzioni**
### File Traduzioni UI
// Modules/UI/lang/it/studio-selector.php
<<<<<<< HEAD
<?php

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1f9515b (.)
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
=======
>>>>>>> dc14e10 (.)
=======
## 🌐 **Sistema Traduzioni**
### File Traduzioni UI
// Modules/UI/lang/it/studio-selector.php
>>>>>>> laraxot/develop
return [
    'actions' => [
        'select' => [
            'label' => 'Seleziona',
            'description' => 'Scegli questo studio',
        ],
    ],
    'empty' => [
        'title' => 'Nessuno studio trovato',
        'description' => 'Non ci sono studi disponibili per la zona selezionata.',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    ],
>>>>>>> 1f9515b (.)
=======
    ],
>>>>>>> 8ee2a17 (.)
=======
    ],
>>>>>>> 7eb1087 (.)
=======
>>>>>>> dc14e10 (.)
=======
>>>>>>> laraxot/develop
    'fields' => [
        'distance' => [
            'label' => 'Distanza',
            'helper_text' => 'Distanza approssimativa dalla tua posizione',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
        'phone' => [
            'label' => 'Telefono',
            'helper_text' => 'Numero di telefono dello studio',
        'specializations' => [
            'label' => 'Specializzazioni',
            'helper_text' => 'Servizi offerti dallo studio',
];
## 📖 **Collegamenti Documentazione**
### Modulo UI
- [Components Overview](./components.md)
- [Form Components Guide](./form-components.md)
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
### Modulo <nome progetto>
- [Widget Analysis](../<nome progetto>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
=======
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
>>>>>>> 3057426 (.)
=======
=======
>>>>>>> 4d64b9a (.)
=======
>>>>>>> laraxot/develop
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo SaluteOra
- [Widget Analysis](../SaluteOra/docs/widgets/find-doctor-widget-studio-step-analysis.md)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 727968c (.)
>>>>>>> ef5ce98 (.)

=======
>>>>>>> 4d64b9a (.)
---
**Component Status**: 📋 Documented - Ready for Implementation  
**Reusability**: 🔄 High - Cross-module compatible  
<<<<<<< HEAD
<<<<<<< HEAD
=======
**Last Updated**: January 2025 
>>>>>>> 3057426 (.)
=======
**Last Updated**: January 2025 
>>>>>>> 4d64b9a (.)
=======
>>>>>>> da29ca4 (.)
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
        ],
=======
>>>>>>> dc14e10 (.)
        'phone' => [
            'label' => 'Telefono',
            'helper_text' => 'Numero di telefono dello studio',
        'specializations' => [
            'label' => 'Specializzazioni',
            'helper_text' => 'Servizi offerti dallo studio',
];
## 📖 **Collegamenti Documentazione**
### Modulo UI
- [Components Overview](./components.md)
- [Form Components Guide](./form-components.md)
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
### Modulo SaluteOra
- [Widget Analysis](../SaluteOra/docs/widgets/find-doctor-widget-studio-step-analysis.md)
=======
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
>>>>>>> 8ee2a17 (.)
=======
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
>>>>>>> 7eb1087 (.)
=======
=======
>>>>>>> dc14e10 (.)
### Modulo Generico
- [Widget Analysis](../<nome modulo>/docs/widgets/find-doctor-widget-studio-step-analysis.md)
### Modulo SaluteOra
- [Widget Analysis](../SaluteOra/docs/widgets/find-doctor-widget-studio-step-analysis.md)
<<<<<<< HEAD
>>>>>>> 727968c (.)
>>>>>>> a63dc48 (.)

=======
>>>>>>> dc14e10 (.)
---
**Component Status**: 📋 Documented - Ready for Implementation  
**Reusability**: 🔄 High - Cross-module compatible  
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
**Last Updated**: January 2025 
>>>>>>> 1f9515b (.)
=======
**Last Updated**: January 2025 
>>>>>>> 8ee2a17 (.)
=======
**Last Updated**: January 2025 
>>>>>>> 7eb1087 (.)
=======
**Last Updated**: January 2025 
>>>>>>> dc14e10 (.)
=======
---
**Component Status**: 📋 Documented - Ready for Implementation  
**Reusability**: 🔄 High - Cross-module compatible  
**Last Updated**: January 2025 
>>>>>>> laraxot/develop
