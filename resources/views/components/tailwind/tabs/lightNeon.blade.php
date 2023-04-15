<div class="{{$class}}">
  <div
    x-data="{ activeTab: '{{$active}}' }"
    x-init="activeTab = window.location.hash ? window.location.hash.replace('#', '') : '{{$active}}'"
    >
    <ul class="grid grid-cols-{{count($tabs)}} rounded-md text-gray-400">
        @foreach($tabs as $index => $tab)
        <li>
          <a
           x-on:click="activeTab = '{{$tab}}'"
           :class="{ 'border-blue-600 text-blue-400 border-b-3': activeTab === '{{$tab}}' }"
           href="#{{$tab}}"
           class="
            capitalize items-center px-6 p-2 justify-center border-b-2 border-gray-100 ext-gray-500 hover:text-blue-500 hover:border-blue-400 whitespace-nowrap flex"
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
