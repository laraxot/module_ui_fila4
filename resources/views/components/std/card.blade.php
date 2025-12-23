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
@props(['post'])

<div>
    <a class="block text-black" href="{{ route('post.show', ['slug' => $post->slug]) }}">
        <img
            class="h-[200px] w-full object-cover object-center bg-gray-100"
            src="{{ $post->getMainImage() }}"
            alt=""
            loading="lazy"
        >
        <h2 class="mt-3 text-xl">{{ $post->title }}</h2>
    </a>
    <div class="mt-1">
        {{-- must be inside BLOG Module
        <x-post-meta :post="$post" />
        --}}
    </div>
</div>
