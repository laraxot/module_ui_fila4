<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
<x-filament-forms::field-wrapper

    :label="$getLabel()"


    class="filament-navigation"
>
    <div wire:key="navigation-items-wrapper">
        <div
            class="space-y-2"
        >

            @forelse ($getState() as $uuid => $item)
                <x-ui::nav-item :statePath="$getStatePath() . '.' . $uuid" :item="$item" />
            @empty
                <div @class([
                    'w-full bg-white rounded-lg border border-gray-300 px-3 py-2 text-left',
                    'dark:bg-gray-700 dark:border-gray-600',
                ])>
                    {{ __('ui::filament-navigation.items.empty') }}
                </div>
            @endforelse
        </div>
    </div>

    <div class="flex justify-end">
        <x-filament::button wire:click="createItem" type="button" size="sm">
            {{ __('ui::filament-navigation.items.add-item') }}
        </x-filament::button>
    </div>
</x-filament-forms::field-wrapper>
