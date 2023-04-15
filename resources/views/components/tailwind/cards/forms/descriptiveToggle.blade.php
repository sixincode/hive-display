@props([
    'title' => '',
    'description' => '',
    'value' => '',
    'name' => '',
    'hook' => '',
    'identification' => ''
])
<div>
<div class="flex justify-between items-center ">
  <!-- Left -->
  <div>
      <div class="text-slate-800 font-semibold">{{$title ?? ''}}</div>
      <div class="text-sm">{{$description ?? ''}}</div>
  </div>
  <!-- Right -->
  <x-hive-form-toggle
   name="{{$name}}"
   component="toggleIndication"
   value="{{$value}}"
   id="{{$identification}}"
   wire:model.delay="{{$hook}}"
   />
 </div>
</div>
