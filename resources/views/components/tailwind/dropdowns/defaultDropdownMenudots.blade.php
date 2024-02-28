@props([
'align' => 'right',
'margin' => 'mt-2',
'position' => 'absolute',
'width' => '48',
'height' => '72',
'classContent' => '',
'class' => ''
])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'origin-top-left left-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'none':
    case 'false':
        $alignmentClasses = '';
        break;
    case 'right':
    default:
        $alignmentClasses = 'origin-top-right right-0';
        break;
}

switch ($width) {
    case '48':
        $width = '48';
        break;
}
@endphp
<div class="relative">
<div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">
      <button type="button" class="-m-1.5 block p-1.5 text-gray-500 hover:text-gray-900 hover:bg-slate-100/80 rounded-full" id="options-menu-0-button" x-ref="button"  @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
        <span class="sr-only">Open options</span>
        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z"></path>
        </svg>
      </button>
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="{{ $class }} {{ $position }} z-50 {{ $margin }} w-{{ $width }} rounded shadow-lg {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
          {{ $header ?? '' }}
         <div class="rounded ring-1 ring-black ring-opacity-5 {{ $classContent }} bg-white dark:bg-gray-700 max-h-{{$height}} overflow-auto">
            {{ $slot }}
        </div>
           {{ $footer ?? '' }}
     </div>
  </div>
</div>
