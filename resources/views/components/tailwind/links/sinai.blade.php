@props([
'current',
'active' => true,
'text_color' => 'text-gray-400 hover:text-gray-200',
'bottom_color' => '',
])

@php
$classes = ($current ?? false)
            ? 'bg-slate-100/90 border-b-4 border-transparent text-gray-900 group inline-flex items-center px-2 py-1.5 text-sm leading-5 font-medium'
            : 'nav-item border-b-4 border-transparent hover:border-yellow-400 inline-flex items-center px-3 py-2 text-xl font-semibold';

@endphp
<div>
  <a href="{{$url}}" {{ $attributes->merge(['class' => $classes.' '.$text_color.' space-x-2']) }}>
    {{$title}}
   </a>
</div>
