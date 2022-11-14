<div class="py-4 border-b border-secondary-200 dark:border-secondary-700 space-y-3 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0">
<span class="flex items-center">
  <span class="text-gray-500">
  <x-hive-form-icon
  path='post'
  width='10'
  height='10'
  iconWidth='1'
  />
</span>
  <h2 class="text-2xl font-bold leading-6 tracking-normal text--900 dark:text-white sm:text-3xl sm:leading-9 sm:truncate">
   {{ $texts[0]}}
  </h2>
</span>
<div class="flex space-x-3">
   @if($details["create"])
  <span class="shadow-sm rounded-md">
   <a href="{{($details['create']['url'])}}"
   class="inline-flex items-center px-4 py-2 border border-transparent font-semibold rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-none   focus:ring-blue-500" link="{{$details['create']['url']}}">
   <!-- <x-hive-form-icon
   path='plus'
   width='5'
   height='5'
   iconWidth='3'
   /> -->
   {{$details["create"]["text"]}}
   </a>
  </span>
  @endif
 </div>
</div>
