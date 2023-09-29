@props([
    'title' => '',
    'icon' => 'translation',
    'route' => '',
    'align' => '',
    'values' => [
        'en',
        'fr'
    ],
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
      $align = 'center';
      break;
  }
@endphp
<x-hive-display-dropdown>
  <x-slot name="trigger">
    <button
        type="button"
        class="flex items-center gap-4 bg-white/20 hover:bg-white/80 hover:text-gray-800 text-gray-300 px-5 py-1.5 rounded-md "
    >
    <x-hive-form-icon
    path='{{$icon}}'
    width='6'
    height='6'
    class=' '
    />
  </button>
  </x-slot>
  <x-slot name="content">
    <div class="grid divide-slate-200">
      @foreach($values as $value)
        <a href="?{{check_lang_route()}}={{$value}}" class="hover:bg-slate-50">
          {{config('hive-helpers-translations.supportedLocales["value"]["native"]')}}
        </a>
      @endforeach
    </div>
  </x-slot>
</x-hive-display-dropdown>
