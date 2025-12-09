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
@props([
    'name' => null,
    'class' => '',
])

@php
$svgPath = __DIR__.'/../../svg/'.$name.'.svg';
$svgContent = file_exists($svgPath) ? file_get_contents($svgPath) : '';
@endphp

{!! $svgContent !!}
