@props(['active' => '', 'classButton' => '', 'tabContentClass' => ''])

@php
  $tabContentClass='';
  $buttonClass = 'inline-flex shrink-0 items-center gap-2 border-b-2 border-transparent px-3 pb-3 font-semibold text-slate-500 hover:border-gray-300 hover:text-gray-700';
  $buttonClassActive = 'border-blue-500 text-blue-600';
@endphp
<div class="{{$class}}">
  <div
    x-data="{ activeTab: '{{$active}}' }"
    >
     <div class="border-b border-gray-200">
     <x-hive-display-section source='sections' component='boxedXSection'>
      <nav class="-mb-px flex space-x-8" aria-label="Tabs">
         @foreach($tabs as $index => $tab)
          <a
           x-on:click="activeTab = '{{$tab['name']}}'"
           :class="{ '{{$buttonClassActive}}': activeTab === '{{$tab['name']}}' }"
           href="#{{$tab['name']}}"
           class="{{$buttonClass}} {{$classButton}} transition-all">
           @if(!empty($icons))
           <x-hive-form-icon
            path='{{$tab["icon"]}}'
            width='4'
            height='4'
            size='1.5'
            />
            @endif
           <span>
             {{headline($tab['name'])}}
           </span>
          </a>
        @endforeach
      </nav>
    </x-hive-display-section>
    </div>
     <div class="{{$tabContentClass}}">
      {{$tabsContent}}
    </div>
  </div>

</div>
