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
     
        @php
        /*
        dddx([
            'field'=>$field,
            'state'=>$field->getStateFromRecord($record),
            'field_methods'=>get_class_methods($field),
            'record'=>$record,
        ]);
        */
            /*
            $state=$field->record($record)->getState();
            if($state==null){
                continue;
            }
            */
            /*
            try{
                $out=str_replace(', ',',<br/>',$state).'<br/>';
            }catch(\TypeError $e){
                $out=$field->record($record)->render();
            }
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
        
    @endforeach
</div>
