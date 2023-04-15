@props([
'submit' => '',
'title' => '',
'description' => '',
'properties' => [],
])
<div>
  <x-hive-display-section>
    <form wire:submit.prevent="{{ $submit }}">
    <x-hive-display-section component='titleSection'>
        <x-slot name="title">
          {{ $title }}
        </x-slot>
        <x-slot name="description">
          {{ $description }}
        </x-slot>
    </x-hive-display-section>

    <div class="mt-2">
        {{ $slot }}
    </div>


    @if (isset($actions))
      <div>
          {{ $actions ?? ''  }}
      </div>
    @endif
  </form>
 </x-hive-display-section>
</div>
