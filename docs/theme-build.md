# Theme Build & Publish Guide

## Installazione dipendenze

<<<<<<< HEAD
All'interno di `Themes/One`, installa i plugin necessari per Filament 3.x con:
=======
<<<<<<< HEAD
All'interno di `Themes/One`, installa i plugin necessari per Filament 4.x con:
=======
All'interno di `Themes/One`, installa i plugin necessari per Filament 3.x con:
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
```bash
npm install tailwindcss@3 @tailwindcss/forms @tailwindcss/typography postcss postcss-nesting autoprefixer --save-dev
```

Per aggiornare il tema **One**, eseguire i seguenti passi all'interno della cartella del tema:

```bash
cd Themes/One

# 1. Compilare asset (Tailwind, JavaScript, CSS):
npm run build

# 2. Pubblicare asset nella cartella pubblica:
npm run copy
```

<<<<<<< HEAD
> **Requisito:** Filament 3.x supporta solo **Tailwind CSS 3.x**. Verificare in `package.json` di avere `"tailwindcss": "^3.x"` come dipendenza.
=======
<<<<<<< HEAD
> **Requisito:** Filament 4.x supporta solo **Tailwind CSS 3.x**. Verificare in `package.json` di avere `"tailwindcss": "^3.x"` come dipendenza.
=======
> **Requisito:** Filament 3.x supporta solo **Tailwind CSS 3.x**. Verificare in `package.json` di avere `"tailwindcss": "^3.x"` come dipendenza.
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)

Se è la prima volta, verificare di aver eseguito `npm install` per le dipendenze.
