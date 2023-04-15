@props([
    'headerClass' => '',
    'bodyClass' => ''
])
<div class="grid">
     <button
       x-on:click="{{$name}} = {{$name}} === '{{$identification}}' ? false : '{{$identification}}'"
       :class="{ 'button-active bg-gray-50 hidden': {{$name}} === '{{$identification}}' }"
       class="{{$headerClass}} button flex px-4 py-2.5 items-center hover:bg-gray-200/60 text-gray-600 font-semibold"
     >
       {{$header}}
     </button>
     <div x-cloak x-show="{{$name}} === '{{$identification}}'" x-collapse>
       <div class="{{$bodyClass}} content px-4 py-2 bg-gray-50">
         {{$body}}
       </div>
     </div>
</div>
