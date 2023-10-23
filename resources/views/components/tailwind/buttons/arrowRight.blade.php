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
<button type="button" class="group text-gray-200 hover:text-sky-600 transition ease-in-out duration-200">
   {{$title_main}}
   <span aria-hidden="true" class="inline-block translate-x-0 group-hover:translate-x-1 transition-transform ease-in-out duration-200">→</span>
 </button>
