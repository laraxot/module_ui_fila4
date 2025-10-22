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
@php
    $data=Arr::get($block,'data.gallery.0',null);
    if($data==null){
      return ;
    }    
@endphp

<div>
  @include('ui::components.blocks.'.$tpl.'.'.$data['version'])
</div>
