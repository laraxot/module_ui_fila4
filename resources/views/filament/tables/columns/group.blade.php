<?php

declare(strict_types=1);

?>
@php
    $fields=$getFields();
    $record=$getRecord();
@endphp
<div
    {{
        $attributes
            ->merge($getExtraAttributes(), escape: false)
            ->class([
                'fi-ta-icon flex flex-wrap gap-1.5',
                'px-3 py-4' => ! $isInline(),
                //'flex-col' => $isListWithLineBreaks(),
                'flex-col' => true,
            ])
    }}
>
    @foreach ($fields as $field)
<<<<<<< HEAD
<<<<<<< HEAD
        @php
=======
     
        @php
=======
     
        @php
>>>>>>> 2dcb12a (.)
        /*
        dddx([
            'field'=>$field,
            'state'=>$field->getStateFromRecord($record),
            'field_methods'=>get_class_methods($field),
            'record'=>$record,
        ]);
        */
            /*
<<<<<<< HEAD
>>>>>>> 19f3650 (.)
=======
>>>>>>> 2dcb12a (.)
            $state=$field->record($record)->getState();
            if($state==null){
                continue;
            }
<<<<<<< HEAD
<<<<<<< HEAD
=======
            */
            /*
>>>>>>> 19f3650 (.)
=======
            */
            /*
>>>>>>> 2dcb12a (.)
            try{
                $out=str_replace(', ',',<br/>',$state).'<br/>';
            }catch(\TypeError $e){
                $out=$field->record($record)->render();
            }
<<<<<<< HEAD
<<<<<<< HEAD
        @endphp
        {!! $out !!}
=======
            */
            //$out=$field->record($record)->render();
            /*
            $field_record=$field->record($record);
             try{
            $out = $field_record->toHtmlString();
             }catch(\LogicException $e){
                $out = $e->getMessage();
             }
             */
             $name=$field->getName();
             $out=$record->getAttribute($name);
             /*
            dddx([
                'test'=>$field->toHtmlString(),
                'field_record'=>$field_record,
                'methods'=>get_class_methods($field_record),
            ]);
            */
        @endphp
        {!! $out !!}<br/>
        
>>>>>>> 19f3650 (.)
=======
            */
            //$out=$field->record($record)->render();
            /*
            $field_record=$field->record($record);
             try{
            $out = $field_record->toHtmlString();
             }catch(\LogicException $e){
                $out = $e->getMessage();
             }
             */
             $name=$field->getName();
             $out=$record->getAttribute($name);
             /*
            dddx([
                'test'=>$field->toHtmlString(),
                'field_record'=>$field_record,
                'methods'=>get_class_methods($field_record),
            ]);
            */
        @endphp
        {!! $out !!}<br/>
        
>>>>>>> 2dcb12a (.)
    @endforeach
</div>
