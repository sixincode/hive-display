@props(['active', 'class'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center text-base leading-6 font-medium p-1.5 rounded hover:bg-blue-400/20 focus:outline-none transition ease-in-out duration-150 '.$class
            : 'inline-flex items-center text-base leading-6 font-medium p-1.5 rounded hover:bg-blue-400/20 focus:outline-none transition ease-in-out duration-150 '.$class;
@endphp
<li {{ $attributes->merge(['class' => $classes]) }}>
<a href="{{$url}}" x-tooltip.raw="{{$title}}">
  <x-hive-form-icon
  path='{{$icon}}'
  width='5'
  height='5'
  class='m-0'
  margin='0'
  iconWidth='1.5'
  />
</a>
</li>
