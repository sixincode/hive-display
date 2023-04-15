@props([
'title' => '',
'description' => '',
'class' => '',
'footer' => ''
])
<div>
  <div class="{{$class}} bg-white grid border shadow-sm border-slate-100 rounded-lg">
    <div class="grid p-4 xl:p-6 gap-6">
    @if($title || $description)
    <div class="">
      <div>
        <h2 class="text-lg sm:text-xl text-slate-800 font-bold">
          {{$title}}
        </h2>
      </div>
      <div class="text-sm text-gray-500">
          {{ $description ?? '' }}
      </div>
    </div>
    @endif
    <div class="">
        {{ $slot }}
    </div>
  </div>
  @if($footer)
     <div class="bg-slate-50 py-2.5 px-4 xl:px-6">
      {{ $footer }}
    </div>
  @endif
  </div>
</div>
