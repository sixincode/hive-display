<x-hive-display-card component='pollen' class='mt-4'>
    @if($title)
      <div class="overflow-hidden bg-slate-50 p-4 py-2 rounded-t-lg">
        <p class="font-semibold leading-6 text-gray-900">
          {{$title}}
        </p>
      </div>
    @endif
    <div class="">
      @if($type = 'regular')
        <dl class="divide-y divide-slate-100">
          {{$slot}}
        </dl>
      @elseif($type = 'complex')
        {{$slot}}
      @else
        {{$slot}}
      @endif
    </div>
</x-hive-display-card>
