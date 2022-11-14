@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-200/90 bg-opacity-100 text-gray-900 group flex items-center px-2 py-1.5 text-base leading-5 font-medium rounded'
            : 'text-gray-600 hover:text-gray-900 hover:bg-gray-200/60 group flex items-center px-2 py-1.5 text-base leading-5 font-medium rounded';
$iconClasses = ($active ?? false)
            ? 'text-gray-500'
            : 'text-gray-400 group-hover:text-gray-500';
@endphp
<div>
   <a href="{{$url}}" aria-current="page" {{ $attributes->merge(['class' => $classes]) }}>

 <span class="mr-2 {{$iconClasses}}">
    <x-hive-form-icon
    path='{{$icon}}'
    width='6'
    height='6'
    class=' '
    />
  </span>
    {{$title}}
  </a>
</div>
