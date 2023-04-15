<div class="{{$class}}">
  <div
    x-data="{ {{$naming}}: '{{$active}}' }"
    x-init="{{$naming}} = window.location.hash ? window.location.hash.replace('#', '') : '{{$active}}'"
    >
      <ul class="grid grid-cols-{{count($tabs)}} space-x-4 rounded-md text-slate-400">
        @foreach($tabs as $index => $tab)
        <!-- @if($loop->first) rounded-l-md @endif @if($loop->last) rounded-r-md @endif -->

        <li>
          <a
           x-on:click="{{$naming}} = '{{$tab}}'"
           :class="{ 'bg-slate-100 text-slate-500': {{$naming}} === '{{$tab}}' }"
           href="#{{$tab}}"
           class="
           rounded-md

           px-2 py-1.5 flex inline-wrap capitalize justify-center items-center hover:bg-blue-50  hover:text-blue-500"
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
