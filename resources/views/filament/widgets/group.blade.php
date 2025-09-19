<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> 727968c (.)
<x-filament-widgets::widget>
    <x-filament::section collapsible icon="{{ $icon }}">
        <x-slot name="description">
            {{ $title }}
        </x-slot>
        @if (count($widgets) == 1)
            @livewire($widgets[0]['class'], $widgets[0]['properties'])
        @endif


        @if (count($widgets) == 3)
<<<<<<< HEAD
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <div class="col-span-1">
                    @livewire($widgets[0]['class'], $widgets[0]['properties'])

                </div>
                <div class="col-span-1">
                    @livewire($widgets[1]['class'], $widgets[1]['properties'])<br />
                    @livewire($widgets[2]['class'], $widgets[2]['properties'])
                </div>
            </div>
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
>>>>>>> 727968c (.)
        @endif
    </x-filament::section>
</x-filament-widgets::widget>
