<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> 727968c (.)
@props(['blocks'])
{{-- Blocks  --}}
@foreach ($blocks as $block)
    <x-render.block :block="$block" :model="$model" />
@endforeach
