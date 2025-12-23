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
    S3Test Page - Test page for email functionality
    View: ui::filament.clusters.test.pages.s3test
    Controller: Modules\UI\Filament\Clusters\Test\Pages\S3Test
    
    ✅ CORRETTO: Utilizza wrapper Filament standard
    ✅ DRY: Riutilizza componenti esistenti
    ✅ KISS: Struttura semplice e leggibile
    ✅ Responsive: Layout adattivo
    ✅ Accessibile: Supporto screen reader
--}}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<x-filament::page>
=======
<x-fi<x-filament::page>
>>>>>>> 19f3650 (.)
=======
<x-filament::page>
>>>>>>> 24eb066 (Lint)
=======
<x-filament::page>
>>>>>>> laraxot/develop
    <x-filament::section>
        <x-slot name="heading">
            {{ __('ui::pages.s3test.heading') }}
        </x-slot>

        <x-slot name="description">
            {{ __('ui::pages.s3test.description') }}
        </x-slot>

        {{-- Form per invio email --}}
        <form wire:submit="save" class="space-y-6">
            {{-- Form principale --}}
            <div class="space-y-4">
                {{ $this->form->render() }}
            </div>

            {{-- Azioni del form --}}
            <div class="flex justify-end gap-4 pt-6 border-t border-gray-200 dark:border-gray-700">
                @foreach ($this->getFormActions() as $action)
                    {{ $action }}
                @endforeach
            </div>
        </form>


    </x-filament::section>
</x-filament::page>
