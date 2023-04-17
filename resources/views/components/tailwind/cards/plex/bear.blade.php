@props([
'title' => '',
'description' => '',
'class' => '',
'footer' => ''
])
<div>
  <div class="{{$class}} bg-white grid border shadow-sm border-slate-100 rounded-lg">
    <div class="grid p-4 xl:p-6 gap-4">
      <div class="mx-auto max-w-1/3">
          {{ $image ?? '' }}
      </div>
    @if($title || $description)
    <div class="text-center">
      <div>
        <h2 class="sm:text-lg text-slate-600 hover:text-slate-800 font-semibold">
          {{$title ?? ''}}
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
