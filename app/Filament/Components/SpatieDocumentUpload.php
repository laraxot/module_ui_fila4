<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Components;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

/**
 * Helper standardizzato per upload documenti usando Spatie Media Library.
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
 * Filosofia: Centralizzazione della configurazione per garantire coerenza sistemica.
 * Politica: Type safety, GDPR compliance, multi-tenant isolation.
 * Zen: Semplicità attraverso la standardizzazione, non la duplicazione.
 */
final class SpatieDocumentUpload
{
    /**
     * Configurazione base per upload documenti con collection specifica.
     *
     * @param string $name       Nome del campo
     * @param string $collection Nome della media collection
     */
    public static function make(string $name, string $collection): SpatieMediaLibraryFileUpload
    {
        return SpatieMediaLibraryFileUpload::make($name)
            ->collection($collection)
            ->disk('private') // Documenti sempre privati per GDPR compliance
            ->preserveFilenames()
            ->openable()
            ->downloadable()
            ->previewable()
            ->maxSize(10240) // 10MB - limite ragionevole per documenti
            ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
            ->imagePreviewHeight('150');
    }

    /**
     * Upload documento identità - documento sensibile paziente.
<<<<<<< HEAD
     *
     * Collection: 'documenti_identita'
     * Security: Private disk, audit trail
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
     *
     * Collection: 'documenti_identita'
     * Security: Private disk, audit trail
<<<<<<< HEAD
=======
     *
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     * 
     * Collection: 'documenti_identita'
     * Security: Private disk, audit trail
     * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     *
     * Collection: 'documenti_identita'
     * Security: Private disk, audit trail
     *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @return SpatieMediaLibraryFileUpload
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
     */
    public static function forIdentityDocument(): SpatieMediaLibraryFileUpload
    {
        return self::make('identity_document', 'documenti_identita')
            ->maxSize(5120)
            ->conversion('thumbnail')
            ->conversion('preview');
    }

    /**
     * Upload certificazione ISEE - documento fiscale sensibile.
<<<<<<< HEAD
     *
     * Collection: 'certificazioni_isee'
     * Formats: Solo PDF per documenti ufficiali
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
     *
     * Collection: 'certificazioni_isee'
     * Formats: Solo PDF per documenti ufficiali
<<<<<<< HEAD
=======
     *
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     * 
     * Collection: 'certificazioni_isee'
     * Formats: Solo PDF per documenti ufficiali
     * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     *
     * Collection: 'certificazioni_isee'
     * Formats: Solo PDF per documenti ufficiali
     *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @return SpatieMediaLibraryFileUpload
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
     */
    public static function forIseeDocument(): SpatieMediaLibraryFileUpload
    {
        return self::make('isee_certificate', 'certificazioni_isee')
            ->acceptedFileTypes(['application/pdf'])
            ->maxSize(5120);
    }

    /**
     * Upload certificato gravidanza - documento medico sensibile.
<<<<<<< HEAD
     *
     * Collection: 'certificati_gravidanza'
     * GDPR: Retention policy automatica
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
     *
     * Collection: 'certificati_gravidanza'
     * GDPR: Retention policy automatica
<<<<<<< HEAD
=======
     *
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     * 
     * Collection: 'certificati_gravidanza'
     * GDPR: Retention policy automatica
     * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     *
     * Collection: 'certificati_gravidanza'
     * GDPR: Retention policy automatica
     *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @return SpatieMediaLibraryFileUpload
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
     */
    public static function forPregnancyDocument(): SpatieMediaLibraryFileUpload
    {
        return self::make('pregnancy_certificate', 'certificati_gravidanza')
            ->acceptedFileTypes(['application/pdf'])
            ->maxSize(5120);
    }

    /**
     * Upload certificazioni professionali mediche - documenti multipli.
<<<<<<< HEAD
     *
     * Collection: 'certificazioni_professionali'
     * Multiple: Supporta caricamento multiplo con riordinamento
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
     *
     * Collection: 'certificazioni_professionali'
     * Multiple: Supporta caricamento multiplo con riordinamento
<<<<<<< HEAD
=======
     *
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     * 
     * Collection: 'certificazioni_professionali'
     * Multiple: Supporta caricamento multiplo con riordinamento
     * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     *
     * Collection: 'certificazioni_professionali'
     * Multiple: Supporta caricamento multiplo con riordinamento
     *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @return SpatieMediaLibraryFileUpload
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
     */
    public static function forCertifications(): SpatieMediaLibraryFileUpload
    {
        return self::make('certifications', 'certificazioni_professionali')
            ->multiple()
            ->enableReordering()
            ->maxFiles(10) // Max 10 certificazioni per dottore
            ->acceptedFileTypes(['application/pdf'])
            ->maxSize(10240); // 10MB per certificazioni multiple
    }

    /**
     * Upload documento generico con collection personalizzata.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
     *
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * @param string        $name       Nome del campo
     * @param string        $collection Nome della collection
     * @param array<string> $mimeTypes  Tipi MIME accettati
     * @param int           $maxSize    Dimensione massima in KB
<<<<<<< HEAD
     */
    public static function custom(
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     * @param string $name Nome del campo
     * @param string $collection Nome della collection
     * @param array<string> $mimeTypes Tipi MIME accettati
     * @param int $maxSize Dimensione massima in KB
     * @return SpatieMediaLibraryFileUpload
>>>>>>> 6c0b3515 (.)
     */
    public static function custom(
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
        string $name,
        string $collection,
        array $mimeTypes = ['image/jpeg', 'image/png', 'application/pdf'],
        int $maxSize = 10240,
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        string $name, 
        string $collection, 
        array $mimeTypes = ['image/jpeg', 'image/png', 'application/pdf'],
        int $maxSize = 10240
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        string $name,
        string $collection,
        array $mimeTypes = ['image/jpeg', 'image/png', 'application/pdf'],
        int $maxSize = 10240,
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
    ): SpatieMediaLibraryFileUpload {
        return SpatieMediaLibraryFileUpload::make($name)
            ->collection($collection)
            ->disk('private')
            ->preserveFilenames()
            ->openable()
            ->downloadable()
            ->previewable()
            ->maxSize($maxSize)
            ->acceptedFileTypes($mimeTypes)
            ->imagePreviewHeight('150');
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
