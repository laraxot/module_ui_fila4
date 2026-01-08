<?php

declare(strict_types=1);

namespace Modules\UI\Forms\Components;

<<<<<<< HEAD
use Modules\Xot\Filament\Forms\Components\XotBaseField;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Closure;
use Filament\Forms\Components\Field;
>>>>>>> 6c0b3515 (.)

/**
 * Radio Card Selector Component.
 *
<<<<<<< HEAD
=======
=======
use Filament\Forms\Components\Field;
=======
>>>>>>> b93ef594b4 (.)
use Closure;
use Filament\Forms\Components\Field;

/**
 * Radio Card Selector Component
<<<<<<< HEAD
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms\Components\Field;
use Closure;

/**
 * Radio Card Selector Component
 * 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
 * Componente riutilizzabile per selezione tramite card radio.
 * Popola automaticamente un TextInput con il nome dell'elemento selezionato.
 */
class RadioCardSelector extends XotBaseField
{
    protected string $view = 'ui::forms.components.radio-card-selector';

    /**
     * @var array<int, array<string, mixed>>|\Closure
     */
    protected array|\Closure $cards = [];

<<<<<<< HEAD
    protected ?string $sectionTitle = null;

    protected ?string $sectionSubtitle = null;

    protected ?string $targetFieldName = null;

    protected ?string $emptyStateTitle = null;

    protected ?string $emptyStateDesc = null;
=======
    /**
     * @var string|null
     */
<<<<<<< HEAD
    protected null|string $sectionTitle = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $sectionTitle = null;
=======
    protected ?string $sectionTitle = null;
>>>>>>> a12f125f4a (.)
=======
    protected null|string $sectionTitle = null;
>>>>>>> b93ef594b4 (.)
=======
    protected ?string $sectionTitle = null;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

    /**
     * @var string|null
     */
<<<<<<< HEAD
    protected null|string $sectionSubtitle = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $sectionSubtitle = null;
=======
    protected ?string $sectionSubtitle = null;
>>>>>>> a12f125f4a (.)
=======
    protected null|string $sectionSubtitle = null;
>>>>>>> b93ef594b4 (.)
=======
    protected ?string $sectionSubtitle = null;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

    /**
     * @var string|null
     */
<<<<<<< HEAD
    protected null|string $targetFieldName = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $targetFieldName = null;
=======
    protected ?string $targetFieldName = null;
>>>>>>> a12f125f4a (.)
=======
    protected null|string $targetFieldName = null;
>>>>>>> b93ef594b4 (.)
=======
    protected ?string $targetFieldName = null;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

    /**
     * @var string|null
     */
<<<<<<< HEAD
    protected null|string $emptyStateTitle = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $emptyStateTitle = null;
=======
    protected ?string $emptyStateTitle = null;
>>>>>>> a12f125f4a (.)
=======
    protected null|string $emptyStateTitle = null;
>>>>>>> b93ef594b4 (.)
=======
    protected ?string $emptyStateTitle = null;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

    /**
     * @var string|null
     */
<<<<<<< HEAD
    protected null|string $emptyStateDescription = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $emptyStateDescription = null;
=======
    protected ?string $emptyStateDescription = null;
>>>>>>> a12f125f4a (.)
=======
    protected null|string $emptyStateDescription = null;
>>>>>>> b93ef594b4 (.)
=======
    protected ?string $emptyStateDescription = null;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)

    /**
     * Imposta le card disponibili per la selezione.
     *
     * @param array<int, array<string, mixed>>|\Closure $cards
     */
    public function cards(array|\Closure $cards): static
    {
        $this->cards = $cards;

        return $this;
    }

    /**
     * Imposta il titolo della sezione.
     */
<<<<<<< HEAD
    public function sectionTitle(?string $title): static
=======
<<<<<<< HEAD
    public function sectionTitle(null|string $title): static
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function sectionTitle(null|string $title): static
=======
    public function sectionTitle(?string $title): static
>>>>>>> a12f125f4a (.)
=======
    public function sectionTitle(null|string $title): static
>>>>>>> b93ef594b4 (.)
=======
    public function sectionTitle(?string $title): static
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
    {
        $this->sectionTitle = $title;

        return $this;
    }

    /**
     * Imposta il sottotitolo della sezione.
     */
<<<<<<< HEAD
    public function sectionSubtitle(?string $subtitle): static
=======
<<<<<<< HEAD
    public function sectionSubtitle(null|string $subtitle): static
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function sectionSubtitle(null|string $subtitle): static
=======
    public function sectionSubtitle(?string $subtitle): static
>>>>>>> a12f125f4a (.)
=======
    public function sectionSubtitle(null|string $subtitle): static
>>>>>>> b93ef594b4 (.)
=======
    public function sectionSubtitle(?string $subtitle): static
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
    {
        $this->sectionSubtitle = $subtitle;

        return $this;
    }

    /**
     * Campo da popolare quando si seleziona una card.
     */
    public function populatesField(string $fieldName): static
    {
        $this->targetFieldName = $fieldName;

        return $this;
    }

    /**
     * Imposta il titolo dello stato vuoto.
     */
<<<<<<< HEAD
    public function emptyStateTitle(?string $title): static
=======
<<<<<<< HEAD
    public function emptyStateTitle(null|string $title): static
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function emptyStateTitle(null|string $title): static
=======
    public function emptyStateTitle(?string $title): static
>>>>>>> a12f125f4a (.)
=======
    public function emptyStateTitle(null|string $title): static
>>>>>>> b93ef594b4 (.)
=======
    public function emptyStateTitle(?string $title): static
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
    {
        $this->emptyStateTitle = $title;

        return $this;
    }

    /**
     * Imposta la descrizione dello stato vuoto.
     */
<<<<<<< HEAD
    public function emptyStateDescription(?string $description): static
=======
<<<<<<< HEAD
    public function emptyStateDescription(null|string $description): static
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function emptyStateDescription(null|string $description): static
=======
    public function emptyStateDescription(?string $description): static
>>>>>>> a12f125f4a (.)
=======
    public function emptyStateDescription(null|string $description): static
>>>>>>> b93ef594b4 (.)
=======
    public function emptyStateDescription(?string $description): static
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
    {
        $this->emptyStateDesc = $description;

        return $this;
    }

    /**
     * Ottiene le card per la visualizzazione.
<<<<<<< HEAD
=======
     *
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
>>>>>>> 6c0b3515 (.)
     */
    public function getCards(): array
    {
        $result = $this->evaluate($this->cards);
<<<<<<< HEAD

<<<<<<< HEAD
        return \is_array($result) ? $result : [];
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        return is_array($result) ? $result : [];
>>>>>>> 6c0b3515 (.)
    }

    /**
     * Ottiene il titolo della sezione.
     */
<<<<<<< HEAD
    public function getSectionTitle(): ?string
=======
<<<<<<< HEAD
    public function getSectionTitle(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getSectionTitle(): null|string
=======
    public function getSectionTitle(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function getSectionTitle(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function getSectionTitle(): ?string
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
    {
        return $this->sectionTitle;
    }

    /**
     * Ottiene il sottotitolo della sezione.
     */
<<<<<<< HEAD
    public function getSectionSubtitle(): ?string
=======
<<<<<<< HEAD
    public function getSectionSubtitle(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getSectionSubtitle(): null|string
=======
    public function getSectionSubtitle(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function getSectionSubtitle(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function getSectionSubtitle(): ?string
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
    {
        return $this->sectionSubtitle;
    }

    /**
     * Ottiene il nome del campo target.
     */
<<<<<<< HEAD
    public function getTargetFieldName(): ?string
=======
<<<<<<< HEAD
    public function getTargetFieldName(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTargetFieldName(): null|string
=======
    public function getTargetFieldName(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function getTargetFieldName(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function getTargetFieldName(): ?string
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
    {
        return $this->targetFieldName;
    }

    /**
     * Ottiene il titolo dello stato vuoto.
     */
<<<<<<< HEAD
    public function getEmptyStateTitle(): ?string
=======
<<<<<<< HEAD
    public function getEmptyStateTitle(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getEmptyStateTitle(): null|string
=======
    public function getEmptyStateTitle(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function getEmptyStateTitle(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function getEmptyStateTitle(): ?string
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
    {
        return $this->emptyStateTitle;
    }

    /**
     * Ottiene la descrizione dello stato vuoto.
     */
<<<<<<< HEAD
    public function getEmptyStateDescription(): ?string
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    public function getEmptyStateDescription(): null|string
>>>>>>> 6c0b3515 (.)
    {
        return $this->emptyStateDesc;
    }
}
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function getEmptyStateDescription(): ?string
    {
        return $this->emptyStateDescription;
    }
<<<<<<< HEAD
} 
>>>>>>> a12f125f4a (.)
=======
    public function getEmptyStateDescription(): null|string
    {
        return $this->emptyStateDescription;
    }
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
