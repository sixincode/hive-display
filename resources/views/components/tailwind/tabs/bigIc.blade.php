@props([
        'active' => '',
        'class' => '',
        'tabsContent' => '',
        ])
@php
  $tabContentClass='';
  $buttonClass = ' border-b-4 cursor-pointer px-3 py-1.5 gap-x-2 flex inline-wrap capitalize text-sm sm:text-lg md:text-2xl justify-center items-center';
  $buttonClassActive = 'border-blue-500 text-blue-600 font-semibold';
@endphp
<div class="{{$class}}">
  <div
    x-data="{ activeTab: '{{$active}}' }"
    >
      <ul class="grid grid-cols-{{count($tabs)}} text-gray-500 hover:text-gray-700">
        @foreach($tabs as $index => $tab)
        <li>
          <a
           x-on:click="activeTab = '{{$tab['name']}}'"
           :class="{ '{{$buttonClassActive}}': activeTab === '{{$tab['name']}}' }"
           class="{{$buttonClass}}"
          >
          @if($tab['icon'])
            <img
            :class="{ 'opacity-100': activeTab === '{{$tab['name']}}' }"
            class="opacity-65 h-20 w-20 p-0 rounded-full" src="{{$tab['icon']}}" alt="">
          @endif
          {{headline($tab['name'])}}
          </a>
        </li>
        @endforeach
      </ul>
    <div class="mt-4">
      {{$tabsContent}}
    </div>
  </div>

</div>
