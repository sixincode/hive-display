@props([
        'active' => '',
        'class' => '',
        'tabsContent' => '',
        ])
@php
  $tabContentClass='';
  $buttonClass = 'inline-flex shrink-0 items-center gap-2 border-2 border-transparent px-3 pb-3 font-semibold text-slate-500 hover:border-gray-300 hover:text-gray-700';
  $buttonClassActive = 'border bg-blue-100/40 border-blue-500 text-blue-600 font-semibold';
@endphp
<div class="{{$class}}">
  <div
    x-data="{ activeTab: '{{$active}}' }"
    >
      <ul class="grid grid-cols-{{count($tabs)}} gap-2 text-gray-500 hover:text-gray-700">
        @foreach($tabs as $index => $tab)
        <li>
          <a
           x-on:click="activeTab = '{{$tab['name']}}'"
           :class="{ '{{$buttonClassActive}}': activeTab === '{{$tab['name']}}' }"
           class="cursor-pointer px-3 py-1.5 flex inline-wrap rounded-md capitalize justify-center items-center bg-slate-50/70"
          >
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
