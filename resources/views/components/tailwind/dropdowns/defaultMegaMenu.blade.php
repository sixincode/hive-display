@props(['align' => 'right', 'width' => '48', 'height' => '72', 'classContent' => 'bg-white', 'class' => '', 'position' => ''])

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
 
@endphp

<div class="{{$position}}" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div    x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute z-50 mt-0.5 mb-2 w-full max-w-{{ $width }} bg-white text-neutral-700 {{ $alignmentClasses }} {{ $class }}"
            style="display: none;"
            @click.away="open = false"
            x-cloak>
            <div class="">
              {{ $header ?? '' }}
            </div>
        <div class="{{ $classContent }} max-h-{{$height}} overflow-auto">
          <div class="absolute border rounded-md shadow-sm border-neutral-200/70 w-{{ $width }} inset-x-0 top-0 -z-10 bg-white">
            {{ $content }}
          </div>
        </div>
        <div class="">
          {{ $footer ?? '' }}
        </div>
    </div>
</div>
