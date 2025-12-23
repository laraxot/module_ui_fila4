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
@props(['image' => ''])

@php
    $background = $image ? 'bg-black' : 'bg-gray-100';
@endphp

<div class="relative min-h-[200px] flex items-center justify-center {{ $background }}">
    @if ($image)
        <div
            class="absolute inset-0 z-0 opacity-50"
            style="background-image: url({{ $image }}); background-size: cover; background-position: center;"
        ></div>
    @endif

    <div class="relative z-1 p-2 text-4xl text-gray-700 lg:text-6xl">
        {!! $slot !!}
    </div>
</div>
