@props([
    'titleClass' => 'text-sm font-medium leading-6 text-slate-700',
    'bodyClass' => 'text-sm leading-6 text-slate-900',
    'size' => 3
])
<div class="py-1 px-4 sm:grid sm:grid-cols-{{$size}}">
  <dt class="{{$titleClass}}">{{ $title }}</dt>
  <dd class="{{$bodyClass}} sm:col-span-{{$size <= 3 ? 2 : $size-1}}">
       {{$slot}}
  </dd>
</div>
