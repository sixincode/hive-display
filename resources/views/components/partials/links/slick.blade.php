@props(['active'])

@php
$classes = ($active ?? false)
            ? 'group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-900 bg-gray-200/60 hover:text-gray-900 hover:bg-gray-200/60'
            : 'group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-200/60';
@endphp
<div>
  <a href="{{$url}}" aria-current="page" {{ $attributes->merge(['class' => $classes]) }}>
  <span class="w-2.5 h-2.5 mr-4 bg-{{$color}}-500 rounded-full" aria-hidden="true"></span>
  <span class="truncate">{{$title}}</span>
  </a>
</div>
