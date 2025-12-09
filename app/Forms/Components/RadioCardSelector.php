<?php

declare(strict_types=1);

namespace Modules\UI\Forms\Components;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
use Closure;
use Filament\Forms\Components\Field;

/**
 * Radio Card Selector Component
 *
<<<<<<< HEAD
=======
use Filament\Forms\Components\Field;
use Closure;

/**
 * Radio Card Selector Component
 * 
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
 * Componente riutilizzabile per selezione tramite card radio.
 * Popola automaticamente un TextInput con il nome dell'elemento selezionato.
 */
class RadioCardSelector extends Field
{
    protected string $view = 'ui::forms.components.radio-card-selector';

    /**
     * @var array<int, array<string, mixed>>|Closure
     */
    protected array|Closure $cards = [];

    /**
     * @var string|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $sectionTitle = null;
=======
    protected ?string $sectionTitle = null;
>>>>>>> 727968c (.)
=======
    protected null|string $sectionTitle = null;
>>>>>>> ef3c5fa (.)

    /**
     * @var string|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $sectionSubtitle = null;
=======
    protected ?string $sectionSubtitle = null;
>>>>>>> 727968c (.)
=======
    protected null|string $sectionSubtitle = null;
>>>>>>> ef3c5fa (.)

    /**
     * @var string|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $targetFieldName = null;
=======
    protected ?string $targetFieldName = null;
>>>>>>> 727968c (.)
=======
    protected null|string $targetFieldName = null;
>>>>>>> ef3c5fa (.)

    /**
     * @var string|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $emptyStateTitle = null;
=======
    protected ?string $emptyStateTitle = null;
>>>>>>> 727968c (.)
=======
    protected null|string $emptyStateTitle = null;
>>>>>>> ef3c5fa (.)

    /**
     * @var string|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $emptyStateDescription = null;
=======
    protected ?string $emptyStateDescription = null;
>>>>>>> 727968c (.)
=======
    protected null|string $emptyStateDescription = null;
>>>>>>> ef3c5fa (.)

    /**
     * Imposta le card disponibili per la selezione.
     *
     * @param array<int, array<string, mixed>>|Closure $cards
     * @return static
     */
    public function cards(array|Closure $cards): static
    {
        $this->cards = $cards;

        return $this;
    }

    /**
     * Imposta il titolo della sezione.
     *
     * @param string|null $title
     * @return static
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function sectionTitle(null|string $title): static
=======
    public function sectionTitle(?string $title): static
>>>>>>> 727968c (.)
=======
    public function sectionTitle(null|string $title): static
>>>>>>> ef3c5fa (.)
    {
        $this->sectionTitle = $title;

        return $this;
    }

    /**
     * Imposta il sottotitolo della sezione.
     *
     * @param string|null $subtitle
     * @return static
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function sectionSubtitle(null|string $subtitle): static
=======
    public function sectionSubtitle(?string $subtitle): static
>>>>>>> 727968c (.)
=======
    public function sectionSubtitle(null|string $subtitle): static
>>>>>>> ef3c5fa (.)
    {
        $this->sectionSubtitle = $subtitle;

        return $this;
    }

    /**
     * Campo da popolare quando si seleziona una card.
     *
     * @param string $fieldName
     * @return static
     */
    public function populatesField(string $fieldName): static
    {
        $this->targetFieldName = $fieldName;

        return $this;
    }

    /**
     * Imposta il titolo dello stato vuoto.
     *
     * @param string|null $title
     * @return static
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function emptyStateTitle(null|string $title): static
=======
    public function emptyStateTitle(?string $title): static
>>>>>>> 727968c (.)
=======
    public function emptyStateTitle(null|string $title): static
>>>>>>> ef3c5fa (.)
    {
        $this->emptyStateTitle = $title;

        return $this;
    }

    /**
     * Imposta la descrizione dello stato vuoto.
     *
     * @param string|null $description
     * @return static
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function emptyStateDescription(null|string $description): static
=======
    public function emptyStateDescription(?string $description): static
>>>>>>> 727968c (.)
=======
    public function emptyStateDescription(null|string $description): static
>>>>>>> ef3c5fa (.)
    {
        $this->emptyStateDescription = $description;

        return $this;
    }

    /**
     * Ottiene le card per la visualizzazione.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 727968c (.)
=======
     *
>>>>>>> ef3c5fa (.)
     */
    public function getCards(): array
    {
        $result = $this->evaluate($this->cards);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 727968c (.)
=======

>>>>>>> ef3c5fa (.)
        return is_array($result) ? $result : [];
    }

    /**
     * Ottiene il titolo della sezione.
     *
     * @return string|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getSectionTitle(): null|string
=======
    public function getSectionTitle(): ?string
>>>>>>> 727968c (.)
=======
    public function getSectionTitle(): null|string
>>>>>>> ef3c5fa (.)
    {
        return $this->sectionTitle;
    }

    /**
     * Ottiene il sottotitolo della sezione.
     *
     * @return string|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getSectionSubtitle(): null|string
=======
    public function getSectionSubtitle(): ?string
>>>>>>> 727968c (.)
=======
    public function getSectionSubtitle(): null|string
>>>>>>> ef3c5fa (.)
    {
        return $this->sectionSubtitle;
    }

    /**
     * Ottiene il nome del campo target.
     *
     * @return string|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTargetFieldName(): null|string
=======
    public function getTargetFieldName(): ?string
>>>>>>> 727968c (.)
=======
    public function getTargetFieldName(): null|string
>>>>>>> ef3c5fa (.)
    {
        return $this->targetFieldName;
    }

    /**
     * Ottiene il titolo dello stato vuoto.
     *
     * @return string|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getEmptyStateTitle(): null|string
=======
    public function getEmptyStateTitle(): ?string
>>>>>>> 727968c (.)
=======
    public function getEmptyStateTitle(): null|string
>>>>>>> ef3c5fa (.)
    {
        return $this->emptyStateTitle;
    }

    /**
     * Ottiene la descrizione dello stato vuoto.
     *
     * @return string|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
    public function getEmptyStateDescription(): null|string
    {
        return $this->emptyStateDescription;
    }
}
<<<<<<< HEAD
=======
    public function getEmptyStateDescription(): ?string
    {
        return $this->emptyStateDescription;
    }
} 
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
