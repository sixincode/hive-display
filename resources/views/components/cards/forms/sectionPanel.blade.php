@props([
'title' => '',
])
<div>
  <x-hive-display-section>
    <div class="">
      <h2 class="text-2xl text-slate-800 font-bold mb-5">{{$title}}</h2>
    </div>
    <div class="">
        {{ $description ?? '' }}
    </div>
    <div class="mt-4">
        {{ $slot }}
    </div>

 </x-hive-display-section>
</div>
