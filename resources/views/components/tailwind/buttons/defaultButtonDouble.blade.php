@props([
    'align' => '',
    'route_main' => '',
    'route_second' => '',
    'color_main' => 'blue',
    'color_second' => 'simple',
    'title_main' => '',
    'title_second' => __("Cancel"),
    'title_third' => '',
    'size' => '',
    'align' => 'right',
])
@php
  switch($align){
    case 'right':
      $align = 'end';
      break;
    case 'left':
      $align = 'start';
      break;
    case 'center':
      $align = 'center';
      break;
    default:
      $align = 'end';
      break;
  }
@endphp
<div
  class=" {{$class}}"
>
 <div class="grid sm:flex items-center gap-4 sm:justify-{{$align}}">


    <x-hive-form-button
    color='{{$color_second}}'
    tag='a'
    href="{{$route_second}}"
    title='{{$title_second}}'
     />

   @if($color_main == 'disabled')
   <x-hive-form-button
   color='{{$color_main}}'
   title='{{$title_main}}'
    />
   @else
    <x-hive-form-button
    color='{{$color_main}}'
    title='{{$title_main}}'
    {{ $attributes }}
     />
   @endif
  </div>
</div>
