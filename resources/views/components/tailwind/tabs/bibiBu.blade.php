@props([
        'active' => '',
        'class' => '',
        'tabsContent' => '',
        ])
<div class="{{$class}}">
  <div
    x-data="{ {{$naming}}: '{{$active}}' }"
    >
      <ul class="grid grid-cols-{{count($tabs)}} space-x-4 rounded-md text-slate-400">
        @foreach($tabs as $index => $tab)
        <!-- @if($loop->first) rounded-l-md @endif @if($loop->last) rounded-r-md @endif -->
         <li>
          <a
           x-on:click="{{$naming}} = '{{$tab['name']}}'"
           :class="{ 'bg-slate-100 text-slate-500': {{$naming}} === '{{$tab['name']}}' }"
           href="#{{$tab['name']}}"
           class="
           rounded-md

           px-2 py-1.5 flex inline-wrap capitalize justify-center items-center hover:bg-blue-50  hover:text-blue-500"
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
