@props([
'title' => '',
'description' => '',
'class' => '',
'footer' => ''
])
  <div class="flex p-2 {{$class}} space-x-3 flex-shrink-0 bg-white border shadow-sm border-slate-100 rounded-lg">
    <div class="">
      {{ $image ?? '' }}
    </div>
    <div class="min-w-0 flex-1">
      <p class="font-semibold text-gray-800">{{$title ?? ''}}</p>
      <p class="text-gray-500">{{$slot}}</p>
    </div>
  </div>
