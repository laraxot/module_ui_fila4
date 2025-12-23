# Design System

## Panoramica
Il design system definisce gli standard visivi e di interazione per garantire coerenza in tutta l'applicazione.
<<<<<<< HEAD
## Componenti Base
=======

## Componenti Base

>>>>>>> laraxot/develop
### 1. Tipografia
```css
/* Font Family */
--app-font-sans: 'Inter', sans-serif;
--app-font-serif: 'Merriweather', serif;
--app-font-mono: 'JetBrains Mono', monospace;
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
/* Font Sizes */
--app-text-xs: 0.75rem;
--app-text-sm: 0.875rem;
--app-text-base: 1rem;
--app-text-lg: 1.125rem;
--app-text-xl: 1.25rem;
```
<<<<<<< HEAD
### 2. Colori
=======

### 2. Colori
```css
>>>>>>> laraxot/develop
/* Brand Colors */
--app-primary: #0EA5E9;
--app-secondary: #6366F1;
--app-accent: #EC4899;
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
/* Semantic Colors */
--app-success: #22C55E;
--app-warning: #F59E0B;
--app-error: #EF4444;
--app-info: #3B82F6;
<<<<<<< HEAD
### 3. Spaziatura
=======
```

### 3. Spaziatura
```css
>>>>>>> laraxot/develop
/* Spacing Scale */
--so-spacing-xs: 0.5rem;
--so-spacing-sm: 0.75rem;
--so-spacing-md: 1rem;
--so-spacing-lg: 1.5rem;
--so-spacing-xl: 2rem;
<<<<<<< HEAD
## Componenti UI
=======
```

## Componenti UI

>>>>>>> laraxot/develop
### 1. Pulsanti
```php
<x-ui.button variant="primary">
    Azione Primaria
</x-ui.button>
<<<<<<< HEAD
<x-ui.button variant="secondary">
    Azione Secondaria
### 2. Form
=======

<x-ui.button variant="secondary">
    Azione Secondaria
</x-ui.button>
```

### 2. Form
```php
>>>>>>> laraxot/develop
<x-ui.form.input
    type="text"
    name="name"
    label="Nome"
    placeholder="Inserisci il nome"
/>
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
<x-ui.form.select
    name="type"
    label="Tipo"
    :options="$types"
<<<<<<< HEAD
### 3. Card
=======
/>
```

### 3. Card
```php
>>>>>>> laraxot/develop
<x-ui.card>
    <x-slot name="header">
        Titolo Card
    </x-slot>
    
    Contenuto della card
<<<<<<< HEAD
    <x-slot name="footer">
        Footer della card
</x-ui.card>
## Layout
### 1. Grid System
=======
    
    <x-slot name="footer">
        Footer della card
    </x-slot>
</x-ui.card>
```

## Layout

### 1. Grid System
```php
>>>>>>> laraxot/develop
<x-ui.grid cols="1 md:2 lg:3" gap="4">
    <div>Colonna 1</div>
    <div>Colonna 2</div>
    <div>Colonna 3</div>
</x-ui.grid>
<<<<<<< HEAD
### 2. Container
<x-ui.container size="md">
    Contenuto centrato con margini
</x-ui.container>
## Best Practices
=======
```

### 2. Container
```php
<x-ui.container size="md">
    Contenuto centrato con margini
</x-ui.container>
```

## Best Practices

>>>>>>> laraxot/develop
1. **Coerenza**
   - Usare i componenti standard
   - Mantenere la palette colori
   - Seguire la scala tipografica
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
2. **Accessibilità**
   - Contrasto sufficiente
   - Focus visibile
   - Testo alternativo
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
3. **Responsive**
   - Mobile first
   - Breakpoint standard
   - Layout fluido
<<<<<<< HEAD
=======

>>>>>>> laraxot/develop
## Collegamenti Bidirezionali
- [README](README.md)
- [Componenti](components.md)
- [Layout](layouts-and-themes.md)
<<<<<<< HEAD
## Vedi Anche
- [Tailwind Config](../config/tailwind.config.js)
- [Theme Config](../config/theme.php)
- [Filament UI](../../Cms/project_docs/filament-components.md) 
- [Filament UI](../../Cms/docs/filament-components.md) 
=======

## Vedi Anche
- [Tailwind Config](../config/tailwind.config.js)
- [Theme Config](../config/theme.php)
- [Filament UI](../../Cms/docs/filament-components.md) 
>>>>>>> laraxot/develop
