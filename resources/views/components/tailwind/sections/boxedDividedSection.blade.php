<x-hive-display-section component='boxedSection' class='{{$class}}'>
  <div class="grid xl:grid-cols-6 gap-2 ">
    <div class="xl:col-span-4">
        {{ $mainSec ?? $slot }}
    </div>
    <div class="xl:col-span-2">
        {{ $secondSec ?? ''}}
     </div>
    </div>
</x-hive-display-section>
