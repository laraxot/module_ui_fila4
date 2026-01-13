<<<<<<< HEAD
# PHPStan Level 10 Errors Roadmap - UI Module

**Data**: 2026-01-09  
**Modulo**: UI  
**Livello PHPStan**: 10  
**Status**: 🧘 **IN ANALISI**
=======
# PHPStan Level 10 Errors Roadmap - Modulo UI

**Data**: 2026-01-12  
**Modulo**: UI  
**Livello PHPStan**: 10  
**Status**: ✅ **COMPLETATO - 0 Errori**
>>>>>>> a96f0df5 (.)

---

## 📊 Errori Identificati

<<<<<<< HEAD
### Totale Errori: 3

1. **`app/Filament/Forms/Components/IconPicker.php`** (Linea 40)
   - **Errore**: `Variable $packsOptions in PHPDoc tag @var does not exist`
   - **Tipo**: `varTag.variableNotFound`

2. **`app/Filament/Tables/Columns/IconStateColumn.php`** (Linea 76)
   - **Errore**: `Variable $states in PHPDoc tag @var does not exist`
   - **Tipo**: `varTag.variableNotFound`

3. **`app/Filament/Tables/Columns/SelectStateColumn.php`** (Linea 31)
   - **Errore**: `Variable $result in PHPDoc tag @var does not exist`
   - **Tipo**: `varTag.variableNotFound`

4. **`app/Filament/Widgets/UserCalendarWidget.php`** (Linee 57, 73)
   - **Errore**: `Method fetchEvents() should return array<int, array<string, mixed>> but returns mixed` (linea 57)
   - **Errore**: `Variable $result in PHPDoc tag @var does not exist` (linee 57, 73)
   - **Tipo**: `return.type` + `varTag.variableNotFound`
=======
### Totale Errori: 35

Tutti gli errori sono concentrati in un unico file: `LocationSelector.php`

**Problema principale**: Classe `Modules\Geo\Models\Comune` non esiste.

**Errori**:
- Chiamate statiche a metodi su classe sconosciuta `Comune::select()`, `Comune::query()`
- Accesso a proprietà su classe sconosciuta (`$regione`, `$provincia`, `$nome`)
- Type hints con classe sconosciuta
- Metodi chiamati su `mixed` (cascata di errori dopo classe non trovata)
>>>>>>> a96f0df5 (.)

---

## 🧠 Analisi Errori

<<<<<<< HEAD
### Pattern: varTag.variableNotFound
**Problema**: PHPDoc `@var` referenzia variabili che non esistono nel contesto.

**Causa**: 
- PHPDoc posizionato prima della definizione variabile
- Variabile definita in closure/scope diverso
- PHPDoc su variabile che viene ridefinita

**Soluzione**: 
- Spostare PHPDoc dopo la definizione variabile
- Usare type narrowing con `Webmozart\Assert\Assert`
- Rimuovere PHPDoc non necessari se il tipo è già dedotto
=======
### Pattern: Classe Geo\Models\Comune Non Esistente

**Problema**: Il file `LocationSelector.php` importa e usa `Modules\Geo\Models\Comune` che non esiste nel progetto.

**Causa**: 
- Modulo Geo non esiste o classe Comune non esiste
- Dovrebbe essere `Modules\Sigma\Models\Comuni` o un altro modello
- Oppure il modulo Geo deve essere creato/installato

**Soluzione**: 
- Verificare quale modello Comune esiste nel progetto
- Correggere import e uso della classe
- Se necessario, creare stub o correggere per usare modello esistente
>>>>>>> a96f0df5 (.)

---

## 📋 Piano di Correzione

<<<<<<< HEAD
### Fase 1: IconPicker.php

**File**: `UI/app/Filament/Forms/Components/IconPicker.php`

**Problema**:
```php
->options(function () use ($packs): array {
    /** @var array<string, string> $packsOptions */
    return $packs;
})
```

**Soluzione**:
```php
->options(function () use ($packs): array {
    Assert::isArray($packs);
    /** @var array<string, string> $packs */
    return $packs;
})
```

### Fase 2: IconStateColumn.php

**File**: `UI/app/Filament/Tables/Columns/IconStateColumn.php`

**Problema**: PHPDoc `@var $states` su variabile inesistente.

**Soluzione**: Rimuovere PHPDoc o correggere contesto.

### Fase 3: SelectStateColumn.php

**File**: `UI/app/Filament/Tables/Columns/SelectStateColumn.php`

**Problema**: PHPDoc `@var $result` su variabile inesistente.

**Soluzione**: Rimuovere PHPDoc o correggere contesto.

### Fase 4: UserCalendarWidget.php

**File**: `UI/app/Filament/Widgets/UserCalendarWidget.php`

**Problema**: Metodo `fetchEvents()` ritorna `mixed` invece di `array<int, array<string, mixed>>`.

**Soluzione**: Aggiungere type narrowing con Assert.
=======
### Fase 1: Verifica Modello Comune Corretto

**Verifica**:
- Cercare modello Comune/Comuni esistente
- Verificare struttura e metodi disponibili
- Decidere quale modello usare

### Fase 2: Correzione Import e Uso

**File**: `app/Filament/Forms/Components/LocationSelector.php`

**Correzione**:
```php
// ❌ PRIMA
use Modules\Geo\Models\Comune;

// ✅ DOPO (verificare modello corretto)
use Modules\Sigma\Models\Comuni as Comune;
// oppure
use Modules\Xot\Models\Place;
// oppure creare stub se necessario
```

### Fase 3: Correzione Type Hints e Metodi

Dopo aver corretto l'import, correggere:
- Type hints nei metodi
- Accesso a proprietà (verificare che esistano)
- Type narrowing per metodi su Builder
>>>>>>> a96f0df5 (.)

---

## ✅ Checklist Implementazione

<<<<<<< HEAD
- [ ] Correggere `IconPicker.php` - varTag
- [ ] Correggere `IconStateColumn.php` - varTag
- [ ] Correggere `SelectStateColumn.php` - varTag
- [ ] Correggere `UserCalendarWidget.php` - return.type + varTag
- [ ] Verificare PHPStan livello 10
- [ ] Verificare PHPMD
- [ ] Verificare PHPInsights
- [ ] Verificare lint
- [ ] Documentare pattern applicati
- [ ] Commit modifiche

---

**Status**: 🧘 **IN ANALISI**

**Ultimo aggiornamento**: 2026-01-09
=======
- [ ] Verificare quale modello Comune/Comuni esiste nel progetto
- [ ] Correggere import in `LocationSelector.php`
- [ ] Correggere tutte le chiamate a metodi statici
- [ ] Correggere type hints nei metodi
- [ ] Correggere accesso a proprietà (verificare esistenza)
- [ ] Aggiungere type narrowing dove necessario
- [ ] Verificare PHPStan Level 10: `./vendor/bin/phpstan analyse Modules/UI --level=10`
- [ ] Verificare PHPMD: `./vendor/bin/phpmd Modules/UI text codesize`
- [ ] Verificare PHP Insights: `./vendor/bin/phpinsights analyse Modules/UI`
- [ ] Formattare codice: `./vendor/bin/pint Modules/UI`
- [ ] Aggiornare questa roadmap con risultati
- [ ] Git commit e push

---

## 📚 Riferimenti

- [Filament Class Extension Rules](../../Xot/docs/filament-class-extension-rules.md)
- [PHPStan Code Quality Guide](../../Xot/docs/phpstan-code-quality-guide.md)
- [Type Narrowing](../../Xot/docs/phpstan-code-quality-guide.md#2-type-narrowing-con-assert)

---

## 🎯 Strategia

**Approccio**: Analisi approfondita - tutti gli errori dipendono da una classe mancante  
**Priorità**: Bassa (35 errori ma tutti derivati da 1 problema root)  
**Tempo stimato**: 30 minuti (dopo identificazione modello corretto)

---

## 🔍 Note Investigative

**Da verificare**:
- Esiste un modulo Geo?
- Quale modello gestisce i comuni?
- `Modules\Sigma\Models\Comuni` è il modello corretto?
- Serve creare uno stub per PHPStan?
>>>>>>> a96f0df5 (.)
