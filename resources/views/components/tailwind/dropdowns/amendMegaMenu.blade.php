@props([
'current',
'active' => true,
'text_color' => 'text-gray-400 hover:text-gray-200',
'bottom_color' => '',
'class' => '',
'contenClass' => '',
])

@php
$classes = ($current ?? false)
            ? 'bg-slate-100/90 border-b-4 border-transparent text-gray-900 group inline-flex items-center px-2 py-1.5 text-sm leading-5 font-medium'
            : 'nav-item border-b-4 border-transparent hover:border-yellow-400 focus:border-yellow-400 inline-flex items-center px-3 py-2 text-xl font-semibold';

@endphp
<x-hive-display-dropdown class="mt-0" position="fixed">
    <x-slot name="trigger">
      <button {{ $attributes->merge(['class' => $classes.' '.$text_color.' space-x-2']) }} aria-expanded="false">
          {{$title}}
          <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
      </button>
    </x-slot>
    <x-slot name="content">
    <div  class="absolute w-full inset-x-0 top-0 -z-10 bg-white shadow-lg ring-1 ring-gray-900/5 {{$contenClass}}">
       {{$slot}}
    </div>
  </x-slot>
</x-hive-display-dropdown>
