<div x-data="{ {{$identification}}: false }" x-on:keydown.window.escape="{{$identification}} = false">

  <div>
    <div>
      {{$trigger ?? ''}}
    </div>

    <div
     x-cloak
     x-show="{{$identification}}"
     x-transition.opacity
     class="fixed inset-0 bg-black/60 z-30"
    ></div>

<div {{ $attributes->merge([
 'class' => "$class fixed inset-y-0 right-0 z-30 w-screen max-w-lg relative",
 'id' => "$identification"]) }}
 aria-labelledby="slide-over-{{$identification}}"
 role="dialog"
 aria-modal="true"
 x-cloak
x-show="{{$identification}}"
x-transition:enter="transition ease-out duration-300"
x-transition:enter-start="translate-x-full"
x-transition:enter-end="translate-x-0"
x-transition:leave="transition ease-in duration-300"
x-transition:leave-start="translate-x-0"
x-transition:leave-end="translate-x-full"
class="fixed inset-y-0 right-0 z-30 w-screen max-w-lg"
>
 <div class="fixed inset-0"></div>

 <div class="fixed inset-0 overflow-hidden">
   <div class="absolute inset-0 overflow-hidden">
     <div class="pointer-events-none absolute inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">
       <div class="pointer-events-auto w-full max-w-2xl" @click.outside="{{$identification}} = !{{$identification}}">
         <form class="grid h-screen bg-white shadow-xl">
             <!-- Header -->
             @if($header)
             <header class="bg-gray-50 px-4 py-6 sm:px-6">
               <div class="flex items-start justify-between space-x-3">
                 <div class="space-y-1">
                   <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">{{$title}}</h2>
                   <p class="text-sm text-gray-500">{{$description}}</p>
                 </div>
                 <div class="flex h-7 items-center">
                   <button type="button" class="text-gray-400 hover:text-gray-500" x-on:click="{{$identification}} = !{{$identification}}">
                     <span class="sr-only">Close panel</span>
                     <!-- Heroicon name: outline/x-mark -->
                     <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                     </svg>
                   </button>
                 </div>
               </div>
              </header>
              @endif
             <!-- Body -->
             {{$slot}}

           <!-- Action buttons -->
           <footer class="border-t border-gray-200 px-4 py-5 sm:px-6">
             <div class="flex justify-end space-x-3">
               <button type="button" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</button>
               <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create</button>
             </div>
           </footer>
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
</div>

</div>
