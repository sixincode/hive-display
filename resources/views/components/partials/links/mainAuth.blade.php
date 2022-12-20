@props(['current','active' => true])

@php
$classes = ($current ?? false)
            ? 'bg-slate-100/90  text-gray-900 group flex items-center px-2 py-1.5 text-sm leading-5 font-medium rounded'
            : 'text-slate-600 hover:text-gray-900 hover:bg-gray-200/60 group flex items-center px-2 py-1.5 text-sm leading-5 font-medium rounded';
$iconClasses = ($current ?? false)
            ? 'text-gray-500'
            : 'text-gray-400 group-hover:text-gray-500';
@endphp
<div>
   <a href="{{$url}}" {{ $attributes->merge(['class' => $classes.' space-x-3']) }}>

 <span class="{{$iconClasses}}">
    <x-hive-form-icon
    path='{{$icon}}'
    width='6'
    height='6'
    class=' '
    />
  </span>
  <span class="truncate">
    {{$title}}
  </span>

  </a>
</div>
