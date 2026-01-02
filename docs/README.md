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
