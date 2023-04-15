<span class="inline-flex items-center justify-center rounded-full bg-blue-100 px-2.5 py-0.5 text-blue-500" >
  <p class="whitespace-nowrap text-sm">
    #{{$tag->shortName}}
  </p>
  <button class="-mr-1 ml-1.5 inline-block rounded-full bg-blue-200 p-0.5 text-blue-600 transition hover:text-blue-700">
    <span class="sr-only">
      {{_("Remove")}}  {{$tag->name}} {{__("tag")}}
    </span>
    <x-hive-form-icon
      path='cross'
      width='3'
      height='3'
      iconWidth='2'
      class='mx-0'
      />
   </button>
  </span>
