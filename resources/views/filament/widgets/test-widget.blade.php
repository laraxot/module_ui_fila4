<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
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
>>>>>>> laraxot/develop
{{--
<div>
    @foreach ($widgets as $widget)
        @livewire($widget['class'], $widget['properties'])
    @endforeach

</div>
--}}
{{--
<x-filament::section icon="heroicon-o-user" collapsible>
    AAAAAAAA



--}}
<x-filament-widgets::widget>
    <x-filament::section collapsible>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="col-span-1">
                @livewire($widgets[0]['class'], $widgets[0]['properties'])

            </div>
            <div class="col-span-1">
                @livewire($widgets[1]['class'], $widgets[1]['properties'])<br />
                @livewire($widgets[2]['class'], $widgets[2]['properties'])
            </div>
        </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
        <x-filament::grid lg='2'>
            <x-filament::grid.column>
=======
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="col-span-1">
>>>>>>> b93ef594b4 (.)
                @livewire($widgets[0]['class'], $widgets[0]['properties'])

            </div>
            <div class="col-span-1">
                @livewire($widgets[1]['class'], $widgets[1]['properties'])<br />
                @livewire($widgets[2]['class'], $widgets[2]['properties'])
<<<<<<< HEAD
            </x-filament::grid.column>
        </x-filament::grid>
>>>>>>> a12f125f4a (.)
=======
            </div>
        </div>
>>>>>>> b93ef594b4 (.)
=======
        <x-filament::grid lg='2'>
            <x-filament::grid.column>
                @livewire($widgets[0]['class'], $widgets[0]['properties'])

            </x-filament::grid.column>
            <x-filament::grid.column>
                @livewire($widgets[1]['class'], $widgets[1]['properties'])<br />
                @livewire($widgets[2]['class'], $widgets[2]['properties'])
            </x-filament::grid.column>
        </x-filament::grid>
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
    </x-filament::section>
</x-filament-widgets::widget>
