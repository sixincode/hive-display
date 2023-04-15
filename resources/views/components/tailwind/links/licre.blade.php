@props([ 'iconClasses' => '', 'url' => '', 'icon' => ''])

@php
$classes =  'flex items-center px-2.5 py-2 rounded whitespace-nowrap text-slate-600';
$iconClasses = ($current ?? false)
            ? ' '
            : ' ';
@endphp
<li class="mr-0.5 md:mr-0 md:mb-0.5">
  <a  href="#{{$url}}"
      @click.prevent="activeTab = '{{$url}}'"
      :class="{ 'text-blue-500 bg-slate-100' : activeTab === '{{$url}}' }"
      {{ $attributes->merge(['class' => $classes.' space-x-2']) }}
      >
      <span class="{{$iconClasses}}">
         <x-hive-form-icon
         path='{{$icon}}'
         width='4'
         height='4'
         iconWidth='2'
         iconClasses='m-0'
         />
       </span>
        <span class="truncate text-sm font-medium">
          {{$title}}
        </span>
    </a>
</li>
