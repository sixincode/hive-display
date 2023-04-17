@props([
'title' => '',
'description' => '',
'class' => '',
'footer' => ''
])
  <div class="flex p-2 {{$class}} bg-white border shadow-sm border-slate-100 rounded-lg">
    <span class="">
      {{ $image ?? '' }}
    </span>
    <div class="ml-3">
      <p class="font-semibold text-gray-800">{{$title ?? ''}}</p>
      <p class="text-gray-500">{{$slot}}</p>
    </div>
  </div>
