<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Closure;
<<<<<<< HEAD
use Filament\Forms\Components\Field;
use Illuminate\Support\Collection;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Field;
use Illuminate\Support\Collection;
=======
use Illuminate\Support\Collection;
use Filament\Forms\Components\Field;
>>>>>>> a12f125f4a (.)
=======
use Filament\Forms\Components\Field;
use Illuminate\Support\Collection;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Collection;
use Filament\Forms\Components\Field;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use Modules\Xot\Actions\Cast\SafeStringCastAction;

class RadioCollection extends Field
{
    protected string $view = 'ui::filament.forms.components.radio-collection';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

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
=======
    
     /**
=======

    /**
>>>>>>> b93ef594b4 (.)
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
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
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
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    /**
     * Set the custom item view template.
     */
    public function itemView(string $view): static
    {
        $this->itemView = $view;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

        return $this;
    }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        return $this;
    }
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        return $this;
    }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    /**
     * Set the key to use as the value for each option.
     */
    public function valueKey(string $key): static
    {
        $this->valueKey = $key;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

        return $this;
    }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        return $this;
    }
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        return $this;
    }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    /**
     * Get the options collection.
     */
    public function getOptions(): Collection
    {
        $options = $this->evaluate($this->options);
        return $options;
    }
<<<<<<< HEAD

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
    /**
     * Get the item view template path.
     */
    public function getItemView(): string
    {
        return $this->itemView ?? 'ui::filament.forms.components.radio-collection-item';
    }
<<<<<<< HEAD

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
    /**
     * Get the value key for options.
     */
    public function getValueKey(): string
    {
        return $this->valueKey;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

    /**
     * Comparazione type-safe per determinare se un'opzione è selezionata.
     *
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    
    /**
     * Comparazione type-safe per determinare se un'opzione è selezionata.
     * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    /**
     * Comparazione type-safe per determinare se un'opzione è selezionata.
     *
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

        return $currentValue === $optionValue;
    }
}
<<<<<<< HEAD
=======
=======
        
        return $currentValue === $optionValue;
    }
}
>>>>>>> a12f125f4a (.)
=======

        return $currentValue === $optionValue;
    }
}
>>>>>>> b93ef594b4 (.)
=======
        
        return $currentValue === $optionValue;
    }
}
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
