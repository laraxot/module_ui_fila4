<<<<<<< HEAD
# UI Module - Componenti e Design System

## Panoramica

Il modulo **UI** fornisce componenti riutilizzabili, design system e interfacce utente per l'applicazione Laraxot.

## 🚨 Regole Critiche

### property_exists() vs isset()

**REGOLA CRITICA**: `property_exists()` NON può essere usato con i modelli Eloquent perché gli attributi sono magici.

- **[Guida Completa](./eloquent-properties-isset-vs-property-exists.md)** - Regola critica e esempi pratici
- **[PHPStan Compliance](./phpstan-compliance.md)** - Status PHPStan Level 10 e correzioni

## ⚠️ Consolidamento Documentazione

**ATTENZIONE**: La documentazione è in fase di consolidamento. Vedi:
- **[Piano Consolidamento](./consolidation-plan.md)** - Piano completo consolidamento
- **[Script Consolidamento](./consolidation-script.md)** - Script per automatizzare
- **[Indice Documentazione](./index.md)** - Indice documentazione consolidata

## Documentazione Principale

### Componenti Filament

#### Colonne Tabella
- **[IconStateColumn](./icon-state-column-business-logic.md)** - Colonna stato con icona
- **[IconStateSplitColumn](./iconstatesplitcolumn-implementation.md)** - Colonna stato split con azioni
- **[SelectStateColumn](./selectstatecolumn.md)** - Colonna selezione stato

#### Form Components
- **[InlineDatePicker](./inline-date-picker.md)** - Date picker inline
- **[SelectState](./selectstatecolumn.md)** - Selezione stato nel form

#### Widgets
- **[UserCalendarWidget](./full-calendar.md)** - Widget calendario utente

### Design System

- **[Icon System](./icon-system.md)** - Sistema di icone
- **[Design System](./design-system.md)** - Design system completo
- **[Components Guide](./components-guide.md)** - Guida componenti

### Filament

- **[Filament 4x Upgrade](./filament-4x-upgrade.md)** - Guida migrazione Filament 4
- **[Filament Components](./filament-components.md)** - Componenti Filament personalizzati
- **[Filament Resources Structure](./filament-resources-structure.md)** - Struttura risorse Filament

### Best Practices

- **[Best Practices](./best-practices.md)** - Best practices modulo UI
- **[Naming Conventions](./naming-conventions.md)** - Convenzioni naming
- **[File Naming Rules](./file-naming-rules.md)** - Regole naming file

### PHPStan e Qualità Codice

- **[PHPStan Compliance](./phpstan-compliance.md)** - Status PHPStan Level 10
- **[Eloquent Properties isset() vs property_exists()](./eloquent-properties-isset-vs-property-exists.md)** - Regola critica

## Struttura Modulo

```
UI/
├── app/
│   ├── Filament/
│   │   ├── Forms/Components/     # Componenti form
│   │   ├── Tables/Columns/        # Colonne tabella
│   │   └── Widgets/               # Widget Filament
│   └── Rules/                     # Regole validazione
├── docs/                          # Documentazione
└── resources/
    └── views/                     # Viste Blade
```

## Collegamenti Moduli Correlati

- **[Xot Module](../Xot/docs/README.md)** - Framework base
- **[User Module](../User/docs/README.md)** - Gestione utenti
- **[Critical Rules Index](../docs/critical-rules-index.md)** - Indice regole critiche

## Quick Reference

### ✅ CORRETTO - Verifica Attributi Eloquent
```php
// isset() rispetta __isset() per attributi magici
if (isset($model->email)) {
    $email = $model->email;
}
```

### ❌ SBAGLIATO - property_exists() con Eloquent
```php
// property_exists() NON funziona con attributi magici
if (property_exists($model, 'email')) {
    $email = $model->email; // SEMPRE false!
}
```

## Status

- **PHPStan Level**: 10
- **Errori PHPStan**: 0 ✅
- **Ultimo aggiornamento**: 2025-01-06

---

**Modulo**: UI  
**Versione**: 1.0  
**Framework**: Laravel 12 + Filament 4
=======
# UI Module

## Panoramica

Il modulo **UI** fornisce componenti e integrazioni per:

- **Backoffice**: Filament (tramite classi base `XotBase*`)
- **Frontoffice**: Blade/Folio/Volt
- **Design system**: componenti Blade e viste

## Regole critiche

- **Eloquent magic attributes**: non usare `property_exists()`; usare `isset()`.
  - [eloquent-properties-isset-vs-property-exists.md](./eloquent-properties-isset-vs-property-exists.md)
- **Filament**: nei moduli applicativi non estendere mai classi Filament direttamente; usare `XotBase*`.
  - [filament resources structure](./filament-resources-structure.md)

## Indice documentazione

### Filament - columns

- [icon-state-column-business-logic.md](./icon-state-column-business-logic.md)
- [iconstatesplitcolumn-implementation.md](./iconstatesplitcolumn-implementation.md)
- [selectstatecolumn.md](./selectstatecolumn.md)

### Filament - form components

- [inline-date-picker.md](./inline-date-picker.md)
- [components/](./components/)

### Filament - widgets

- [full-calendar.md](./full-calendar.md)

### Design system

- [design-system.md](./design-system.md)
- [icon-system.md](./icon-system.md)

### Code quality

- [phpstan-compliance.md](./phpstan-compliance.md)
- [phpstan-patterns.md](./phpstan-patterns.md)

## Struttura modulo

```text
Modules/UI/
├── app/
│   ├── Actions/
│   ├── Filament/
│   ├── Livewire/
│   ├── Models/
│   └── Rules/
├── docs/
└── resources/
    └── views/
```

## Moduli correlati

- [Xot](../Xot/docs/README.md)
- [User](../User/docs/README.md)
>>>>>>> laraxot/develop
