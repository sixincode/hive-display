@props(['active' => '', 'classButton' => '', 'tabContentClass' => ''])

@php
  $tabContentClass='';
  $buttonClass = 'cursor-pointer rounded-full inline-flex shrink-0 items-center gap-2 text-sm sm:text-md p-1.5 sm:p-3 font-semibold text-gray-500 border hover:border-gray-300 hover:text-gray-700';
  $buttonClassActive = 'bg-black text-white hover:text-white border-black';
@endphp
<div class="{{$class}}">
  <div
    x-data="{ activeTab: '{{$active}}' }"
    >
     <div class="p-2 sm:px-6">
     <x-hive-display-section source='sections' component='boxedXSection'>
      <ul class="flex mx-auto gap-4 sm:justify-center overflow-y-auto py-3" aria-label="Tabs">
         @foreach($tabs as $index => $tab)
          <li
           x-on:click="activeTab = '{{$tab['name']}}'"
           :class="{ '{{$buttonClassActive}}': activeTab === '{{$tab['name']}}' }"
           class="{{$buttonClass}}">
           @if(!empty($icons))
           <x-hive-form-icon
            path='{{$tab["icon"]}}'
            width='4'
            height='4'
            size='1.5'
            />
            @endif
           <span>
             {{$tab['title']}}
           </span>
         </li>
        @endforeach
      </ul>
    </x-hive-display-section>
    </div>
     <div class="{{$tabContentClass}}">
      {{$tabsContent}}
    </div>
  </div>

</div>
