<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> 727968c (.)
@props(['text', 'level'])
@if($level != null)
    <{{ $level }}>{{ $text }}</{{ $level }}>
@else
    {{ $text }}
@endif
