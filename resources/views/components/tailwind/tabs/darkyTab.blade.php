<div class="{{$class}}">
  <div
    x-data="{ activeTab: '{{$active}}' }"
    x-init="activeTab = window.location.hash ? window.location.hash.replace('#', '') : '{{$active}}'"
    >
      <ul class="grid grid-cols-{{count($tabs)}} rounded-md text-gray-400   bg-gray-50">
        @foreach($tabs as $index => $tab)
        <li>
          <a
           x-on:click="activeTab = '{{$tab}}'"
           :class="{ 'bg-gray-200 text-gray-600 font-medium': activeTab === '{{$tab}}' }"
           href="#{{$tab}}"
           class="
           @if($loop->first) rounded-l-md @endif @if($loop->last) rounded-r-md @endif
           px-3 py-1.5 flex inline-wrap capitalize justify-center items-center hover:bg-gray-100 text-md hover:text-gray-700"
          >
           {{$tab}}
          </a>
        </li>
        @endforeach
      </ul>
    <div class="mt-4">
      {{$tabsContent}}
    </div>
  </div>

</div>
