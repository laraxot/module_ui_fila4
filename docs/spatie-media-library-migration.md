<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# Migrazione da FileUpload a Spatie Media Library

## 🌍 Analisi Multidimensionale della Migrazione
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
# Migrazione da FileUpload a Spatie Media Library

## 🌍 Analisi Multidimensionale della Migrazione
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
# Migrazione da FileUpload a Spatie Media Library

## 🌍 Analisi Multidimensionale della Migrazione
>>>>>>> laraxot/develop
### **Filosofia & Spiritualità**
- **Evoluzione Paradigmatica**: Passaggio da gestione **atomistica** (FileUpload singoli) a gestione **sistemica** (Media Library ecosystem)
- **Humilitas Technologica**: Riconoscere la superiorità di soluzioni specializzate mature
- **Zen del Non-Agire**: Wu wei - non combattere contro l'ecosistema, fluire con esso
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
### **Economia & Sostenibilità**
- **ROI Esponenziale**: Riduzione drammatica dei costi di manutenzione
- **Debito Tecnico**: Eliminazione di custom implementations fragili
- **Economia Circolare**: Riuso di componenti testati e ottimizzati
- **Efficienza Energetica**: Codice più performante = minor consumo server
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
### **Biologia & Chimica del Codice**
- **DNA Superiore**: Architettura genetica più robusta con conversioni automatiche
- **Sistema Immunitario**: Resistenza naturale a bug comuni di file handling
- **Metabolismo**: Processamento più efficiente di upload, conversioni, storage
- **Reazioni Catalitiche**: Conversioni automatiche accelerano workflow
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
### **Politica & Governance**
- **Democrazia Tecnologica**: Seguire standard di comunità vs autorità interna
- **Transparency**: Comportamenti predicibili e documentati
- **Accountability**: Responsabilità verso utenti finali per soluzioni stabili
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
---
## 📊 Situazione Attuale (Analisi Completa)
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)

=======
>>>>>>> dc14e10 (.)
---
## 📊 Situazione Attuale (Analisi Completa)
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
---
## 📊 Situazione Attuale (Analisi Completa)
>>>>>>> laraxot/develop
### ✅ **Già Migrati a SpatieMediaLibraryFileUpload**
```php
// User Profile
SpatieMediaLibraryFileUpload::make('photo_profile')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
// Notify Themes  
SpatieMediaLibraryFileUpload::make('logo_src')
// UI Blocks
SpatieMediaLibraryFileUpload::make('image') // ImageSpatie
SpatieMediaLibraryFileUpload::make('video') // VideoSpatie
// CMS Menu
SpatieMediaLibraryFileUpload::make('image')
// Gallery Components
SpatieMediaLibraryFileUpload::make('image') // ImagesGallery
```
### ❌ **Da Migrare (FileUpload Standard)**
<<<<<<< HEAD
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)

=======
>>>>>>> dc14e10 (.)
// Notify Themes  
SpatieMediaLibraryFileUpload::make('logo_src')
// UI Blocks
SpatieMediaLibraryFileUpload::make('image') // ImageSpatie
SpatieMediaLibraryFileUpload::make('video') // VideoSpatie
// CMS Menu
SpatieMediaLibraryFileUpload::make('image')
// Gallery Components
SpatieMediaLibraryFileUpload::make('image') // ImagesGallery
```
### ❌ **Da Migrare (FileUpload Standard)**
<<<<<<< HEAD
```php
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
// PatientResource (4 documenti)
Forms\Components\FileUpload::make('health_card')
Forms\Components\FileUpload::make('identity_document') 
Forms\Components\FileUpload::make('isee_certificate')
Forms\Components\FileUpload::make('pregnancy_certificate')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// DoctorResource
Forms\Components\FileUpload::make('certifications')
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)

// DoctorResource
Forms\Components\FileUpload::make('certifications')

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1f9515b (.)
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
=======
// DoctorResource
Forms\Components\FileUpload::make('certifications')
>>>>>>> dc14e10 (.)
=======
// DoctorResource
Forms\Components\FileUpload::make('certifications')
>>>>>>> laraxot/develop
// UI Blocks Standard
FileUpload::make('image') // Image block
FileUpload::make('background') // Hero block  
FileUpload::make('logo') // InfoBlock, LogoBlock
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
// Appearance Pages
FileUpload::make('logo') // Logo page
FileUpload::make('background') // Background, Footer, HeaderNav
FileUpload::make('logo_header') // Metatag
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
### 🏗️ **Architettura HasMedia Esistente**
**SCOPERTA CRUCIALE**: I modelli principali implementano già `HasMedia`!
<<<<<<< HEAD

```php
<<<<<<< HEAD
<<<<<<< HEAD
// BaseModel <nome progetto> - IMPLEMENTA GIÀ HasMedia + InteractsWithMedia
=======
// BaseModel  - IMPLEMENTA GIÀ HasMedia + InteractsWithMedia
>>>>>>> 3057426 (.)
=======
=======
>>>>>>> 4d64b9a (.)
// BaseModel  - IMPLEMENTA GIÀ HasMedia + InteractsWithMedia
// BaseModel SaluteOra - IMPLEMENTA GIÀ HasMedia + InteractsWithMedia
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
```

=======
>>>>>>> dc14e10 (.)
### 🏗️ **Architettura HasMedia Esistente**
**SCOPERTA CRUCIALE**: I modelli principali implementano già `HasMedia`!
<<<<<<< HEAD

```php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// BaseModel SaluteOra - IMPLEMENTA GIÀ HasMedia + InteractsWithMedia
>>>>>>> 1f9515b (.)
=======
// BaseModel  - IMPLEMENTA GIÀ HasMedia + InteractsWithMedia
>>>>>>> 8ee2a17 (.)
=======
// BaseModel  - IMPLEMENTA GIÀ HasMedia + InteractsWithMedia
>>>>>>> 7eb1087 (.)
=======
=======
>>>>>>> dc14e10 (.)
// BaseModel  - IMPLEMENTA GIÀ HasMedia + InteractsWithMedia
// BaseModel SaluteOra - IMPLEMENTA GIÀ HasMedia + InteractsWithMedia
<<<<<<< HEAD
>>>>>>> 727968c (.)
>>>>>>> a63dc48 (.)
=======
>>>>>>> dc14e10 (.)
=======
### 🏗️ **Architettura HasMedia Esistente**
**SCOPERTA CRUCIALE**: I modelli principali implementano già `HasMedia`!
// BaseModel  - IMPLEMENTA GIÀ HasMedia + InteractsWithMedia
// BaseModel SaluteOra - IMPLEMENTA GIÀ HasMedia + InteractsWithMedia
>>>>>>> laraxot/develop
abstract class BaseModel extends Model implements HasMedia
{
    use InteractsWithMedia;
    // ... User, Patient, Doctor ereditano automaticamente!
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
// BaseProfile User Module - IMPLEMENTA GIÀ
abstract class BaseProfile extends BaseModel implements ProfileContract
    // ... Profili utente pronti!
// BaseTenant - IMPLEMENTA GIÀ  
abstract class BaseTenant extends BaseModel implements HasAvatar, HasMedia
    // ... Tenant multi-studio pronti!
## 🎯 Strategia di Migrazione
### **Fase 1: Documentazione e Preparazione**
#### 1.1 Analisi Impatto Collections
Ogni tipo di documento dovrà avere la sua collection specifica:
<<<<<<< HEAD
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)

=======
>>>>>>> dc14e10 (.)
// BaseProfile User Module - IMPLEMENTA GIÀ
abstract class BaseProfile extends BaseModel implements ProfileContract
    // ... Profili utente pronti!
// BaseTenant - IMPLEMENTA GIÀ  
abstract class BaseTenant extends BaseModel implements HasAvatar, HasMedia
    // ... Tenant multi-studio pronti!
## 🎯 Strategia di Migrazione
### **Fase 1: Documentazione e Preparazione**
#### 1.1 Analisi Impatto Collections
Ogni tipo di documento dovrà avere la sua collection specifica:
<<<<<<< HEAD

```php
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
// Patient Documents Collections
'health_card' => 'tessere_sanitarie'
'identity_document' => 'documenti_identita'  
'isee_certificate' => 'certificazioni_isee'
'pregnancy_certificate' => 'certificati_gravidanza'
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// Doctor Documents Collections  
'certifications' => 'certificazioni_professionali'
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)

// Doctor Documents Collections  
'certifications' => 'certificazioni_professionali'

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1f9515b (.)
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
=======
// Doctor Documents Collections  
'certifications' => 'certificazioni_professionali'
>>>>>>> dc14e10 (.)
=======
// Doctor Documents Collections  
'certifications' => 'certificazioni_professionali'
>>>>>>> laraxot/develop
// UI/Appearance Collections
'logos' => 'loghi_sistema'
'backgrounds' => 'sfondi_interfaccia' 
'headers' => 'intestazioni'
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
#### 1.2 Configurazione Media Collections
// In ogni modello che usa media
public function registerMediaCollections(): void
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
```

=======
>>>>>>> dc14e10 (.)
#### 1.2 Configurazione Media Collections
// In ogni modello che usa media
public function registerMediaCollections(): void
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
#### 1.2 Configurazione Media Collections
// In ogni modello che usa media
public function registerMediaCollections(): void
>>>>>>> laraxot/develop
    $this->addMediaCollection('tessere_sanitarie')
        ->acceptsMimeTypes(['image/jpeg', 'image/png', 'application/pdf'])
        ->singleFile();
        
    $this->addMediaCollection('documenti_identita')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
    $this->addMediaCollection('certificazioni_isee')
        ->acceptsMimeTypes(['application/pdf'])
    $this->addMediaCollection('certificati_gravidanza')
### **Fase 2: Migrazione Componenti UI Base**
#### 2.1 Creazione Componenti Standardizzati
// Modules/UI/app/Filament/Components/SpatieDocumentUpload.php
class SpatieDocumentUpload
<<<<<<< HEAD
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
        ->acceptsMimeTypes(['image/jpeg', 'image/png', 'application/pdf'])
        ->singleFile();
        
=======
>>>>>>> dc14e10 (.)
    $this->addMediaCollection('certificazioni_isee')
        ->acceptsMimeTypes(['application/pdf'])
    $this->addMediaCollection('certificati_gravidanza')
### **Fase 2: Migrazione Componenti UI Base**
#### 2.1 Creazione Componenti Standardizzati
// Modules/UI/app/Filament/Components/SpatieDocumentUpload.php
class SpatieDocumentUpload
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
    public static function make(string $name, string $collection): SpatieMediaLibraryFileUpload
    {
        return SpatieMediaLibraryFileUpload::make($name)
            ->collection($collection)
            ->disk('local')
            ->preserveFilenames()
            ->openable()
            ->downloadable()
            ->previewable()
            ->maxSize(10240) // 10MB
            ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf']);
    }
    
    public static function forHealthCard(): SpatieMediaLibraryFileUpload
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
        return static::make('health_card', 'tessere_sanitarie')
            ->imagePreviewHeight('150')
            ->maxSize(5120); // 5MB per documenti leggeri
    public static function forCertifications(): SpatieMediaLibraryFileUpload
<<<<<<< HEAD
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
    {
=======
>>>>>>> dc14e10 (.)
        return static::make('health_card', 'tessere_sanitarie')
            ->imagePreviewHeight('150')
            ->maxSize(5120); // 5MB per documenti leggeri
    public static function forCertifications(): SpatieMediaLibraryFileUpload
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
        return static::make('certifications', 'certificazioni_professionali')
            ->multiple()
            ->enableReordering()
            ->maxFiles(10)
            ->acceptedFileTypes(['application/pdf']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
#### 2.2 Helper per Immagini UI
// Modules/UI/app/Filament/Components/SpatieImageUpload.php  
class SpatieImageUpload
    public static function forLogo(string $collection = 'logos'): SpatieMediaLibraryFileUpload
        return SpatieMediaLibraryFileUpload::make('logo')
<<<<<<< HEAD
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
    }
}
```

=======
>>>>>>> dc14e10 (.)
#### 2.2 Helper per Immagini UI
// Modules/UI/app/Filament/Components/SpatieImageUpload.php  
class SpatieImageUpload
    public static function forLogo(string $collection = 'logos'): SpatieMediaLibraryFileUpload
        return SpatieMediaLibraryFileUpload::make('logo')
<<<<<<< HEAD
            ->collection($collection)
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
            ->image()
            ->disk('public')
            ->imagePreviewHeight('100')
            ->maxSize(2048) // 2MB
            ->singleFile();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
    public static function forBackground(string $collection = 'backgrounds'): SpatieMediaLibraryFileUpload
        return SpatieMediaLibraryFileUpload::make('background')
            ->imagePreviewHeight('200')
            ->maxSize(5120) // 5MB
### **Fase 3: Implementazione Progressiva**
#### 3.1 PatientResource - Priorità MASSIMA (Documenti Sensibili)
<<<<<<< HEAD
<<<<<<< HEAD

```php
<<<<<<< HEAD
<<<<<<< HEAD
// Modules/<nome progetto>/app/Filament/Resources/PatientResource.php - getFormSchema()
=======
// Modules/<nome modulo>/app/Filament/Resources/PatientResource.php - getFormSchema()
>>>>>>> 3057426 (.)
=======
=======
>>>>>>> 4d64b9a (.)
// Modules/<nome modulo>/app/Filament/Resources/PatientResource.php - getFormSchema()
// Modules/SaluteOra/app/Filament/Resources/PatientResource.php - getFormSchema()
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
    public static function forBackground(string $collection = 'backgrounds'): SpatieMediaLibraryFileUpload
        return SpatieMediaLibraryFileUpload::make('background')
            ->imagePreviewHeight('200')
            ->maxSize(5120) // 5MB
### **Fase 3: Implementazione Progressiva**
#### 3.1 PatientResource - Priorità MASSIMA (Documenti Sensibili)
<<<<<<< HEAD

```php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// Modules/SaluteOra/app/Filament/Resources/PatientResource.php - getFormSchema()

>>>>>>> 1f9515b (.)
=======
=======
>>>>>>> a63dc48 (.)
=======
>>>>>>> dc14e10 (.)
// Modules/<nome modulo>/app/Filament/Resources/PatientResource.php - getFormSchema()
// Modules/SaluteOra/app/Filament/Resources/PatientResource.php - getFormSchema()
<<<<<<< HEAD
>>>>>>> 727968c (.)

>>>>>>> 8ee2a17 (.)
=======
// Modules/<nome modulo>/app/Filament/Resources/PatientResource.php - getFormSchema()

>>>>>>> 7eb1087 (.)
=======
>>>>>>> dc14e10 (.)
=======
// Modules/<nome modulo>/app/Filament/Resources/PatientResource.php - getFormSchema()
// Modules/SaluteOra/app/Filament/Resources/PatientResource.php - getFormSchema()
>>>>>>> laraxot/develop
// PRIMA (FileUpload standard)
'health_card' => Forms\Components\FileUpload::make('health_card')
    ->disk('private')
    ->directory('patient-documents/health-cards')
    ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
    ->maxSize(5120),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 8ee2a17 (.)
=======

>>>>>>> 7eb1087 (.)
=======
>>>>>>> dc14e10 (.)
=======
>>>>>>> laraxot/develop
// DOPO (SpatieMediaLibraryFileUpload)  
'health_card' => \Modules\UI\Filament\Components\SpatieDocumentUpload::forHealthCard()
    ->label(trans('<nome progetto>::patients.fields.health_card.label'))
    ->helperText(trans('<nome progetto>::patients.fields.health_card.help')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
    ->label(trans('saluteora::patients.fields.health_card.label'))
    ->helperText(trans('saluteora::patients.fields.health_card.help')),
#### 3.2 UI Blocks - Standardizzazione Architettura
// Modules/UI/app/Filament/Blocks/Image.php - Refactoring Completo
// PRIMA
FileUpload::make('image'),
<<<<<<< HEAD
=======

// DOPO (SpatieMediaLibraryFileUpload)  
'health_card' => \Modules\UI\Filament\Components\SpatieDocumentUpload::forHealthCard()
    ->label(trans('saluteora::patients.fields.health_card.label'))
    ->helperText(trans('saluteora::patients.fields.health_card.help')),
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
=======
=======
    ->label(trans('saluteora::patients.fields.health_card.label'))
    ->helperText(trans('saluteora::patients.fields.health_card.help')),
>>>>>>> 727968c (.)
>>>>>>> a63dc48 (.)
```

=======
    ->label(trans('saluteora::patients.fields.health_card.label'))
    ->helperText(trans('saluteora::patients.fields.health_card.help')),
>>>>>>> dc14e10 (.)
#### 3.2 UI Blocks - Standardizzazione Architettura
// Modules/UI/app/Filament/Blocks/Image.php - Refactoring Completo
// PRIMA
FileUpload::make('image'),
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
// DOPO  
\Modules\UI\Filament\Components\SpatieImageUpload::make('image', 'content_images')
    ->imagePreviewHeight('250')
    ->conversion('thumbnail'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
### **Fase 4: Migrazione Database e Conversioni**
#### 4.1 Migrazione Dati Esistenti
// Database/Migrations/migrate_file_uploads_to_media_library.php
public function up(): void
    // Migrazione automatica dei file esistenti
    $patients = Patient::whereNotNull('health_card')->get();
<<<<<<< HEAD
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
```

=======
>>>>>>> dc14e10 (.)
### **Fase 4: Migrazione Database e Conversioni**
#### 4.1 Migrazione Dati Esistenti
// Database/Migrations/migrate_file_uploads_to_media_library.php
public function up(): void
    // Migrazione automatica dei file esistenti
    $patients = Patient::whereNotNull('health_card')->get();
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
    foreach($patients as $patient) {
        if($patient->health_card && Storage::exists($patient->health_card)) {
            $patient->addMediaFromUrl(Storage::url($patient->health_card))
                ->toMediaCollection('tessere_sanitarie');
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
#### 4.2 Rimozione Campi Database Obsoleti
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
    }
}
```

#### 4.2 Rimozione Campi Database Obsoleti

```php
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1f9515b (.)
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
=======
#### 4.2 Rimozione Campi Database Obsoleti
>>>>>>> dc14e10 (.)
=======
#### 4.2 Rimozione Campi Database Obsoleti
>>>>>>> laraxot/develop
// Dopo migrazione completa - rimuovere colonne file paths
Schema::table('users', function (Blueprint $table) {
    $table->dropColumn([
        'health_card',
        'identity_document', 
        'isee_certificate',
        'pregnancy_certificate',
        'certifications'
    ]);
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
## 🔧 Implementazione Tecnica Dettagliata
### **Media Collections Configuration**
<<<<<<< HEAD

```php
<<<<<<< HEAD
<<<<<<< HEAD
// Modules/<nome progetto>/app/Models/User.php - Aggiunta registerMediaCollections
=======
// Modules/<nome modulo>/app/Models/User.php - Aggiunta registerMediaCollections
>>>>>>> 3057426 (.)
=======
=======
>>>>>>> 4d64b9a (.)
// Modules/<nome modulo>/app/Models/User.php - Aggiunta registerMediaCollections
// Modules/SaluteOra/app/Models/User.php - Aggiunta registerMediaCollections
<<<<<<< HEAD
>>>>>>> 727968c (.)
>>>>>>> ef5ce98 (.)

public function registerMediaCollections(): void
{
=======
>>>>>>> 4d64b9a (.)
=======
## 🔧 Implementazione Tecnica Dettagliata
### **Media Collections Configuration**
// Modules/<nome modulo>/app/Models/User.php - Aggiunta registerMediaCollections
// Modules/SaluteOra/app/Models/User.php - Aggiunta registerMediaCollections
>>>>>>> laraxot/develop
    // Documenti paziente
        ->singleFile()
        ->useDisk('private');
    // Certificazioni dottore (multiple)
    $this->addMediaCollection('certificazioni_professionali')
public function registerMediaConversions(Media $media = null): void
<<<<<<< HEAD
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
```

---

=======
>>>>>>> dc14e10 (.)
## 🔧 Implementazione Tecnica Dettagliata
### **Media Collections Configuration**
<<<<<<< HEAD

```php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// Modules/SaluteOra/app/Models/User.php - Aggiunta registerMediaCollections
=======
// Modules/<nome modulo>/app/Models/User.php - Aggiunta registerMediaCollections
>>>>>>> 8ee2a17 (.)
=======
// Modules/<nome modulo>/app/Models/User.php - Aggiunta registerMediaCollections
>>>>>>> 7eb1087 (.)
=======
=======
>>>>>>> dc14e10 (.)
// Modules/<nome modulo>/app/Models/User.php - Aggiunta registerMediaCollections
// Modules/SaluteOra/app/Models/User.php - Aggiunta registerMediaCollections
<<<<<<< HEAD
>>>>>>> 727968c (.)
>>>>>>> a63dc48 (.)

public function registerMediaCollections(): void
{
=======
>>>>>>> dc14e10 (.)
    // Documenti paziente
        ->singleFile()
        ->useDisk('private');
    // Certificazioni dottore (multiple)
    $this->addMediaCollection('certificazioni_professionali')
public function registerMediaConversions(Media $media = null): void
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
    $this->addMediaConversion('thumbnail')
        ->width(300)
        ->height(300)
        ->sharpen(10)
        ->performOnCollections('tessere_sanitarie', 'documenti_identita');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
    $this->addMediaConversion('preview')
        ->width(600)
        ->height(400)
### **Accessors per Backward Compatibility**
<<<<<<< HEAD
<<<<<<< HEAD

```php
<<<<<<< HEAD
<<<<<<< HEAD
// Modules/<nome progetto>/app/Models/User.php - Accessors di transizione
=======
// Modules/<nome modulo>/app/Models/User.php - Accessors di transizione
>>>>>>> 3057426 (.)
=======
=======
>>>>>>> 4d64b9a (.)
// Modules/<nome modulo>/app/Models/User.php - Accessors di transizione
// Modules/SaluteOra/app/Models/User.php - Accessors di transizione
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
        
=======
>>>>>>> dc14e10 (.)
    $this->addMediaConversion('preview')
        ->width(600)
        ->height(400)
### **Accessors per Backward Compatibility**
<<<<<<< HEAD

```php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// Modules/SaluteOra/app/Models/User.php - Accessors di transizione

>>>>>>> 1f9515b (.)
=======
=======
>>>>>>> a63dc48 (.)
=======
>>>>>>> dc14e10 (.)
// Modules/<nome modulo>/app/Models/User.php - Accessors di transizione
// Modules/SaluteOra/app/Models/User.php - Accessors di transizione
<<<<<<< HEAD
>>>>>>> 727968c (.)

>>>>>>> 8ee2a17 (.)
=======
// Modules/<nome modulo>/app/Models/User.php - Accessors di transizione

>>>>>>> 7eb1087 (.)
=======
>>>>>>> dc14e10 (.)
=======
// Modules/<nome modulo>/app/Models/User.php - Accessors di transizione
// Modules/SaluteOra/app/Models/User.php - Accessors di transizione
>>>>>>> laraxot/develop
/**
 * Accessor per compatibilità con codice esistente.
 * Restituisce URL del primo media nella collection health_card.
 */
public function getHealthCardAttribute(): ?string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
    return $this->getFirstMediaUrl('tessere_sanitarie');
 * Accessor per array di certificazioni (dottori).
public function getCertificationsAttribute(): array
    return $this->getMedia('certificazioni_professionali')
        ->map(fn($media) => $media->getUrl())
        ->toArray();
### **View Components Integration**
<<<<<<< HEAD
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
{
=======
>>>>>>> dc14e10 (.)
    return $this->getFirstMediaUrl('tessere_sanitarie');
 * Accessor per array di certificazioni (dottori).
public function getCertificationsAttribute(): array
    return $this->getMedia('certificazioni_professionali')
        ->map(fn($media) => $media->getUrl())
        ->toArray();
### **View Components Integration**
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
```blade
{{-- resources/views/components/patient-documents.blade.php --}}
<div class="grid grid-cols-2 gap-4">
    @if($patient->hasMedia('tessere_sanitarie'))
        <div class="document-preview">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            <h4>{{ __('<nome progetto>::patients.health_card') }}</h4>
=======
>>>>>>> 1f9515b (.)
            <h4>{{ __('saluteora::patients.health_card') }}</h4>
=======
            <h4>{{ __('<nome progetto>::patients.health_card') }}</h4>
>>>>>>> 8ee2a17 (.)
=======
            <h4>{{ __('<nome progetto>::patients.health_card') }}</h4>
>>>>>>> 7eb1087 (.)
=======
=======
>>>>>>> dc14e10 (.)
            <h4>{{ __('<nome progetto>::patients.health_card') }}</h4>
            <h4>{{ __('saluteora::patients.health_card') }}</h4>
<<<<<<< HEAD
>>>>>>> 727968c (.)
>>>>>>> a63dc48 (.)
=======
>>>>>>> dc14e10 (.)
=======
            <h4>{{ __('<nome progetto>::patients.health_card') }}</h4>
            <h4>{{ __('saluteora::patients.health_card') }}</h4>
>>>>>>> laraxot/develop
            <img src="{{ $patient->getFirstMediaUrl('tessere_sanitarie', 'thumbnail') }}" 
                 alt="Tessera Sanitaria"
                 class="w-full h-32 object-cover rounded">
            <a href="{{ $patient->getFirstMediaUrl('tessere_sanitarie') }}" 
               target="_blank" 
               class="text-blue-600 text-sm">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                {{ __('<nome progetto>::common.view_document') }}
=======
>>>>>>> 1f9515b (.)
                {{ __('saluteora::common.view_document') }}
            </a>
        </div>
    @endif
<<<<<<< HEAD
    @if($patient->hasMedia('certificazioni_isee'))
            <h4>{{ __('<nome progetto>::patients.isee_certificate') }}</h4>
=======
    
    @if($patient->hasMedia('certificazioni_isee'))
        <div class="document-preview">
>>>>>>> 1f9515b (.)
            <h4>{{ __('saluteora::patients.isee_certificate') }}</h4>
=======
=======
>>>>>>> 7eb1087 (.)
=======
>>>>>>> a63dc48 (.)
=======
>>>>>>> dc14e10 (.)
=======
>>>>>>> laraxot/develop
                {{ __('<nome progetto>::common.view_document') }}
                {{ __('saluteora::common.view_document') }}
            </a>
        </div>
    @endif
    @if($patient->hasMedia('certificazioni_isee'))
            <h4>{{ __('<nome progetto>::patients.isee_certificate') }}</h4>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
=======
=======
            <h4>{{ __('saluteora::patients.isee_certificate') }}</h4>
>>>>>>> 727968c (.)
>>>>>>> a63dc48 (.)
=======
            <h4>{{ __('saluteora::patients.isee_certificate') }}</h4>
>>>>>>> dc14e10 (.)
=======
            <h4>{{ __('saluteora::patients.isee_certificate') }}</h4>
>>>>>>> laraxot/develop
            <div class="bg-red-100 h-32 flex items-center justify-center rounded">
                <i class="fas fa-file-pdf text-red-600 text-3xl"></i>
            </div>
            <a href="{{ $patient->getFirstMediaUrl('certificazioni_isee') }}" 
               target="_blank"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
                {{ __('<nome progetto>::common.download_pdf') }}
                {{ __('saluteora::common.download_pdf') }}
</div>
## 🚀 Vantaggi della Migrazione
<<<<<<< HEAD
=======
               class="text-blue-600 text-sm">
                {{ __('saluteora::common.download_pdf') }}
=======
               class="text-blue-600 text-sm">
<<<<<<< HEAD
                {{ __('<nome progetto>::common.download_pdf') }}
<<<<<<< HEAD
>>>>>>> 8ee2a17 (.)
=======
               class="text-blue-600 text-sm">
                {{ __('<nome progetto>::common.download_pdf') }}
>>>>>>> 7eb1087 (.)
=======
=======
                {{ __('saluteora::common.download_pdf') }}
>>>>>>> 727968c (.)
>>>>>>> a63dc48 (.)
            </a>
        </div>
    @endif
=======
                {{ __('<nome progetto>::common.download_pdf') }}
                {{ __('saluteora::common.download_pdf') }}
>>>>>>> dc14e10 (.)
</div>
## 🚀 Vantaggi della Migrazione
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
### **Tecnici**
- ✅ **Conversioni Automatiche**: Thumbnail, preview, optimized images
- ✅ **Storage Flessibile**: Multiple disks, cloud storage ready
- ✅ **Meta Data**: Tracking automatico di size, type, nome originale
- ✅ **Security**: Private/public disk management integrato
- ✅ **Performance**: Lazy loading, CDN ready, caching automatico
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
### **Business Logic**
- ✅ **Audit Trail**: Chi ha caricato cosa e quando
- ✅ **Versioning**: Storia completa delle modifiche documenti
- ✅ **Compliance**: GDPR ready con deletion policies
- ✅ **Multi-tenant**: Isolamento automatico per studio
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
### **Developer Experience**
- ✅ **Type Safety**: Interface HasMedia garantisce contratti
- ✅ **IDE Support**: Autocompletamento metodi media
- ✅ **Testing**: Mock integrato per unit tests
- ✅ **Documentation**: Spatie docs comprehensive
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
### **User Experience**
- ✅ **Drag & Drop**: Upload intuitivo
- ✅ **Preview**: Anteprima immediata documenti
- ✅ **Progress**: Indicatori di upload avanzati
- ✅ **Error Handling**: Gestione errori professionale
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
## 🛡️ Sicurezza e Privacy
### **GDPR Compliance**
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)

---

=======
>>>>>>> dc14e10 (.)
## 🛡️ Sicurezza e Privacy
### **GDPR Compliance**
<<<<<<< HEAD
```php
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
## 🛡️ Sicurezza e Privacy
### **GDPR Compliance**
>>>>>>> laraxot/develop
// Auto-deletion per privacy compliance
$this->addMediaCollection('documenti_temporanei')
    ->acceptsMimeTypes(['application/pdf'])
    ->useDisk('temp')
    ->deleteIfFileExists(true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/develop
// Retention policies
public function scopeExpiredDocuments($query)
    return $query->whereHas('media', function($q) {
        $q->where('created_at', '<', now()->subYears(7));
    });
### **Access Control**
// Policy-based access
public function downloadDocument(Media $media): Response
    $this->authorize('download', $media);
<<<<<<< HEAD
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)

=======
>>>>>>> dc14e10 (.)
// Retention policies
public function scopeExpiredDocuments($query)
    return $query->whereHas('media', function($q) {
        $q->where('created_at', '<', now()->subYears(7));
    });
### **Access Control**
// Policy-based access
public function downloadDocument(Media $media): Response
    $this->authorize('download', $media);
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
    if($media->collection_name === 'tessere_sanitarie') {
        // Log accesso a documento sensibile
        activity()
            ->performedOn($media)
            ->log('downloaded_health_card');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    return response()->download($media->getPath());
## 📋 Checklist Migrazione
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
    }
    
=======
>>>>>>> dc14e10 (.)
    return response()->download($media->getPath());
## 📋 Checklist Migrazione
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
    return response()->download($media->getPath());
## 📋 Checklist Migrazione
>>>>>>> laraxot/develop
### **Pre-Migrazione**
- [ ] Backup completo database e files
- [ ] Analisi spazio disco necessario (conversioni)
- [ ] Test environment setup
- [ ] Performance baseline measurement
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
### **Durante Migrazione**
- [ ] Implementazione per feature (non tutto insieme)
- [ ] Test regression dopo ogni batch
- [ ] Monitoring storage usage
- [ ] User communication su downtime
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
### **Post-Migrazione**  
- [ ] Cleanup file obsoleti
- [ ] Performance comparison
- [ ] User training su nuove features
- [ ] Documentation update completa
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
## 🔗 Collegamenti e Riferimenti
### **Documentazione Correlata**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Spatie Media Library Official Docs](https://spatie.be/docs/laravel-medialibrary)
- [Filament Plugin Documentation](https://filamentphp.com/plugins/filament-spatie-media-library)
- [UI Components Docs](./filament-components-rules.md)
- [<nome progetto> Models Architecture](../<nome progetto>/docs/models-architecture.md)
=======
=======
>>>>>>> ef5ce98 (.)
=======
>>>>>>> 4d64b9a (.)
=======
=======
>>>>>>> 7eb1087 (.)

---

=======
>>>>>>> dc14e10 (.)
## 🔗 Collegamenti e Riferimenti
### **Documentazione Correlata**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
=======
>>>>>>> a63dc48 (.)
=======
>>>>>>> dc14e10 (.)
=======
## 🔗 Collegamenti e Riferimenti
### **Documentazione Correlata**
>>>>>>> laraxot/develop
- [Spatie Media Library Official Docs](https://spatie.be/project_docs/laravel-medialibrary)
- [Filament Plugin Documentation](https://filamentphp.com/plugins/filament-spatie-media-library)
- [UI Components Docs](./filament-components-rules.md)
- [Modulo Generico Models Architecture](../<nome modulo>/docs/models-architecture.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3057426 (.)
=======
=======
=======
>>>>>>> 4d64b9a (.)
- [Spatie Media Library Official Docs](https://spatie.be/docs/laravel-medialibrary)
- [SaluteOra Models Architecture](../SaluteOra/docs/models-architecture.md)
<<<<<<< HEAD
>>>>>>> 727968c (.)
>>>>>>> ef5ce98 (.)

=======
>>>>>>> 4d64b9a (.)
=======
- [Spatie Media Library Official Docs](https://spatie.be/docs/laravel-medialibrary)
- [SaluteOra Models Architecture](../SaluteOra/docs/models-architecture.md)
>>>>>>> laraxot/develop
### **Repository e Risorse**
- [GitHub Filament Plugin](https://github.com/filamentphp/spatie-laravel-media-library-plugin)
- [Spatie Media Library](https://github.com/spatie/laravel-medialibrary)
## 📝 Note di Implementazione
<<<<<<< HEAD
=======

---

## 🔗 Collegamenti e Riferimenti

### **Documentazione Correlata**
=======
=======
>>>>>>> a63dc48 (.)
=======
>>>>>>> dc14e10 (.)
- [Spatie Media Library Official Docs](https://spatie.be/docs/laravel-medialibrary)
- [SaluteOra Models Architecture](../SaluteOra/docs/models-architecture.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)
=======
>>>>>>> 727968c (.)
>>>>>>> a63dc48 (.)

=======
>>>>>>> dc14e10 (.)
### **Repository e Risorse**
- [GitHub Filament Plugin](https://github.com/filamentphp/spatie-laravel-media-library-plugin)
- [Spatie Media Library](https://github.com/spatie/laravel-medialibrary)
## 📝 Note di Implementazione
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
### **Ordine di Priorità**
1. **CRITICO**: PatientResource (documenti sensibili)
2. **ALTO**: DoctorResource (certificazioni professionali)  
3. **MEDIO**: UI Blocks (contenuti pubblici)
4. **BASSO**: Appearance pages (configurazioni admin)
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
### **Rollback Strategy**
- Mantenere FileUpload come fallback per 30 giorni
- Feature flags per switch graduale
- Monitoring errori upload dettagliato
- Rollback automatico su threshold errori
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
### **Performance Considerations**
- Conversions su queue per files grandi
- CDN configuration per immagini pubbliche
- Database indexing su media collections
- Cleanup automatico temporary uploads
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
*Ultimo aggiornamento: Dicembre 2024*  
*Versione: 1.0*  
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
*Compatibilità: Laraxot <nome progetto>, Spatie Media Library 11.x, Filament 4.x* 
=======
*Compatibilità: Laraxot , Spatie Media Library 11.x, Filament 3.x* 
>>>>>>> 3057426 (.)
=======
=======
>>>>>>> 4d64b9a (.)
*Compatibilità: Laraxot , Spatie Media Library 11.x, Filament 3.x* 
*Compatibilità: Laraxot SaluteOra, Spatie Media Library 11.x, Filament 3.x* 
<<<<<<< HEAD
>>>>>>> 727968c (.)
>>>>>>> ef5ce98 (.)
=======
>>>>>>> 4d64b9a (.)
=======
>>>>>>> da29ca4 (.)
=======
=======
>>>>>>> 8ee2a17 (.)
=======
>>>>>>> 7eb1087 (.)

---

*Ultimo aggiornamento: Dicembre 2024*  
*Versione: 1.0*  
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
*Compatibilità: Laraxot SaluteOra, Spatie Media Library 11.x, Filament 4.x* 
>>>>>>> 1f9515b (.)
=======
<<<<<<< HEAD
*Compatibilità: Laraxot SaluteOra, Spatie Media Library 11.x, Filament 4.x* 
=======
*Compatibilità: Laraxot SaluteOra, Spatie Media Library 11.x, Filament 3.x* 
>>>>>>> 1899c5f (.)
>>>>>>> e08c55c (.)
=======
*Compatibilità: Laraxot , Spatie Media Library 11.x, Filament 3.x* 
>>>>>>> 8ee2a17 (.)
=======
*Compatibilità: Laraxot , Spatie Media Library 11.x, Filament 3.x* 
>>>>>>> 7eb1087 (.)
=======
=======
*Ultimo aggiornamento: Dicembre 2024*  
*Versione: 1.0*  
>>>>>>> dc14e10 (.)
*Compatibilità: Laraxot , Spatie Media Library 11.x, Filament 3.x* 
*Compatibilità: Laraxot SaluteOra, Spatie Media Library 11.x, Filament 3.x* 
<<<<<<< HEAD
>>>>>>> 727968c (.)
>>>>>>> a63dc48 (.)
=======
>>>>>>> dc14e10 (.)
=======
*Ultimo aggiornamento: Dicembre 2024*  
*Versione: 1.0*  
*Compatibilità: Laraxot , Spatie Media Library 11.x, Filament 3.x* 
*Compatibilità: Laraxot SaluteOra, Spatie Media Library 11.x, Filament 3.x* 
>>>>>>> laraxot/develop
