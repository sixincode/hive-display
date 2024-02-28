@props([
        'title' => '',
        'titleClass' => '',
        'classActive' => '',
        'classFaqElement' => '',
        'class' => '',
        'icon'  => '',
        'iconWidth' => 4,
        'iconHeight' => 4,
        'iconSize' => 1.5,
        'iconClass' => '',
        'iconWrapClass' => '',
        ])
@php
  $classFaqElement='flex text-gray-800 items-center justify-between w-full py-4 text-left select-none font-semibold';
  $classActive = 'text-blue-600';
  $iconWrapClass = 'bg-slate-100 rounded-full p-1';
@endphp
<div x-data="{ id: $id('accordion') }"  class="cursor-pointer group">
  <button type="button"  @click="setActiveAccordion(id)"  class="{{$class}} {{$classFaqElement}}" >
    <div class="flex gap-2 w-5/6">
      @if($icon)
      <span class="{{$iconWrapClass}}">
        <x-hive-form-icon
               path='{{$icon}}'
               width='{{$iconWidth}}'
               height='{{$iconHeight}}'
               class='{{$iconClass}}'
               size='{{$iconSize}}'
               />
      </span>
      @endif
      <div class="{{$titleClass}}" :class="{ '{{$classActive}}' : activeAccordion==id }">
        {{$title}}
      </div>
    </div>
     <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
       <polyline points="6 9 12 15 18 9"></polyline>
     </svg>
  </button>
  <div x-cloak x-show="activeAccordion==id" x-collapse>
    <div class="p-2 pb-4 opacity-70">
      {{$slot}}
      </div>
  </div>
</div>
