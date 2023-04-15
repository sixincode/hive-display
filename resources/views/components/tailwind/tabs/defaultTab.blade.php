<div class="{{$class}}">
  <div
    x-data="{ activeTab: '{{$active}}' }"
    x-init="activeTab = window.location.hash ? window.location.hash.replace('#', '') : '{{$active}}'"
    >
      <ul class="grid grid-cols-{{count($tabs)}} gap-2 text-gray-500 hover:text-gray-700">
        @foreach($tabs as $index => $tab)
        <li>
          <a
           x-on:click="activeTab = '{{$tab}}'"
           :class="{ 'bg-blue-50 text-blue-500 font-medium': activeTab === '{{$tab}}' }"
           href="#{{$tab}}"
           class=" px-3 py-1.5 flex inline-wrap rounded-md capitalize justify-center items-center bg-slate-50/70"
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
