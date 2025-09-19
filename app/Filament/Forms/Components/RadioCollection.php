<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Closure;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Field;
use Illuminate\Support\Collection;
=======
use Illuminate\Support\Collection;
use Filament\Forms\Components\Field;
>>>>>>> 727968c (.)
=======
use Filament\Forms\Components\Field;
use Illuminate\Support\Collection;
>>>>>>> ef3c5fa (.)
use Modules\Xot\Actions\Cast\SafeStringCastAction;

class RadioCollection extends Field
{
    protected string $view = 'ui::filament.forms.components.radio-collection';
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)

    /**
     * Callback per ottenere gli studi.
     */
    protected Closure|Collection|null $options = null;
    protected string $itemView;
    protected string $valueKey = 'id';

    /**
     * Set the options collection for the radio buttons.
     */
    public function options(Closure|Collection|null $options): static
    {
        $this->options = $options;

        return $this;
    }

<<<<<<< HEAD
=======
    
     /**
     * Callback per ottenere gli studi.
     */
    protected Closure | Collection | null $options = null;
    protected string $itemView;
    protected string $valueKey = 'id';
    
    /**
     * Set the options collection for the radio buttons.
     */
    public function options(Closure | Collection | null $options): static
    {
        $this->options = $options;
        
        return $this;
    }
    
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    /**
     * Set the custom item view template.
     */
    public function itemView(string $view): static
    {
        $this->itemView = $view;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)

        return $this;
    }

<<<<<<< HEAD
=======
        
        return $this;
    }
    
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    /**
     * Set the key to use as the value for each option.
     */
    public function valueKey(string $key): static
    {
        $this->valueKey = $key;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)

        return $this;
    }

<<<<<<< HEAD
=======
        
        return $this;
    }
    
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    /**
     * Get the options collection.
     */
    public function getOptions(): Collection
    {
        $options = $this->evaluate($this->options);
        return $options;
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 727968c (.)
=======

>>>>>>> ef3c5fa (.)
    /**
     * Get the item view template path.
     */
    public function getItemView(): string
    {
        return $this->itemView ?? 'ui::filament.forms.components.radio-collection-item';
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 727968c (.)
=======

>>>>>>> ef3c5fa (.)
    /**
     * Get the value key for options.
     */
    public function getValueKey(): string
    {
        return $this->valueKey;
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)

    /**
     * Comparazione type-safe per determinare se un'opzione è selezionata.
     *
<<<<<<< HEAD
=======
    
    /**
     * Comparazione type-safe per determinare se un'opzione è selezionata.
     * 
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
     * @param mixed $option
     * @return bool
     */
    public function isOptionSelected($option): bool
    {
        $state = SafeStringCastAction::cast($this->getState());
        $currentValue = (string) $state;
        $optionData = data_get($option, $this->getValueKey());
        /** @phpstan-ignore-next-line */
        $optionValue = SafeStringCastAction::cast($optionData);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)

        return $currentValue === $optionValue;
    }
}
<<<<<<< HEAD
=======
        
        return $currentValue === $optionValue;
    }
}
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
