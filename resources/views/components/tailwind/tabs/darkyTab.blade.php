@props([
        'active' => '',
        'class' => '',
        'tabsContent' => '',
        ])
<div class="{{$class}}">
  <div
    x-data="{ activeTab: '{{$active}}' }"
    >
      <ul class="grid grid-cols-{{count($tabs)}} rounded-md text-gray-400   bg-gray-50">
        @foreach($tabs as $index => $tab)
        <li>
          <a
           x-on:click="activeTab = '{{$tab['name']}}'"
           :class="{ 'bg-gray-200 text-gray-600 font-medium': activeTab === '{{$tab['name']}}' }"
           href="#{{$tab['name']}}"
           class="hover:cursor-pointer
           @if($loop->first) rounded-l-md @endif @if($loop->last) rounded-r-md @endif
           px-3 py-1.5 flex inline-wrap capitalize justify-center items-center hover:bg-gray-100 text-md hover:text-gray-700"
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
