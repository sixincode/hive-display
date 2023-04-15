@props([ 'title' => '', 'description' => '', 'titleClass' => '', 'descriptionClass' => '',])
@php
$classes =  'flex items-center px-2.5 py-2 rounded whitespace-nowrap text-slate-600';
$iconClasses = ($current ?? false)
            ? ' '
            : ' ';
@endphp
<x-hive-display-section class='{{$class}}'>
  <div class="">
    <h2 class="{{$titleClass}} font-semibold text-slate-400 mb-2">
      {{$title}}
    </h2>
    <div class="{{$descriptionClass}} mt-2 text-gray-400 text-sm">
        {{ $description }}
    </div>
  </div>
</x-hive-display-section>
