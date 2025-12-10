<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> 727968c (.)
@props(['widget'])
<div>
    {{--  
    <x-dynamic-component :component="$widget" />
    --}}
    
    @livewire($widget, $block->data)
</div>
