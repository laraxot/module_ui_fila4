<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
@props(['post'])

@if ($post->published_at)
    Published on {{ $post->published_at->format('M jS, Y') }} —
    in <a href="{{ route('post.index', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
@else
    [Not published]
@endif
