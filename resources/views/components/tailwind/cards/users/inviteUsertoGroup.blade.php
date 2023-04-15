<div>
 <x-hive-display-slide-over
 title="{{__('New member')}}"
 description="{{__('Invite new member to join the community')}}"
 identification="{{$identification}}"
 >
 <x-slot:trigger>
 <x-hive-form-button
  id='cancel-{{$identification}}'
  name='cancel-{{$identification}}'
  tag='button'
  size='regular'
  color='white'
  title='{{_("Invite member")}}'
  type='button'
  class='ml-auto'
  x-on:click="{{$identification}} = !{{$identification}}"
  />


 </x-slot>
 <div class="flex flex-col space-y-6 py-6 sm:space-y-0 sm:divide-y sm:divide-gray-200 sm:py-0 overflow-y-scroll">
         <!-- Project name -->
         <div class="space-y-1 px-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:space-y-0 sm:px-6 sm:py-5">
           <div>
             <label for="project-name" class="block text-sm font-medium text-gray-900 sm:mt-px sm:pt-2">Project name</label>
           </div>
           <div class="sm:col-span-2">
             <input type="text" name="project-name" id="project-name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
           </div>
         </div>

         <!-- Project description -->
         <div class="space-y-1 px-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:space-y-0 sm:px-6 sm:py-5">
           <div>
             <label for="project-description" class="block text-sm font-medium text-gray-900 sm:mt-px sm:pt-2">Description</label>
           </div>
           <div class="sm:col-span-2">
             <textarea id="project-description" name="project-description" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
           </div>
         </div>

         <!-- Team members -->
         <div class="space-y-2 px-4 sm:grid sm:grid-cols-3 sm:items-center sm:gap-4 sm:space-y-0 sm:px-6 sm:py-5">
           <div>
             <h3 class="text-sm font-medium text-gray-900">Team Members</h3>
           </div>
           <div class="sm:col-span-2">
             <div class="flex space-x-2">
               <a href="#" class="flex-shrink-0 rounded-full hover:opacity-75">
                 <img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Tom Cook">
               </a>

               <a href="#" class="flex-shrink-0 rounded-full hover:opacity-75">
                 <img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Whitney Francis">
               </a>

               <a href="#" class="flex-shrink-0 rounded-full hover:opacity-75">
                 <img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Leonard Krasner">
               </a>

               <a href="#" class="flex-shrink-0 rounded-full hover:opacity-75">
                 <img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Floyd Miles">
               </a>

               <a href="#" class="flex-shrink-0 rounded-full hover:opacity-75">
                 <img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Emily Selman">
               </a>

               <button type="button" class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full border-2 border-dashed border-gray-200 bg-white text-gray-400 hover:border-gray-300 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                 <span class="sr-only">Add team member</span>
                 <!-- Heroicon name: mini/plus -->
                 <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                   <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                 </svg>
               </button>
             </div>
           </div>
         </div>

         <!-- Privacy -->
         <fieldset class="space-y-2 px-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:space-y-0 sm:px-6 sm:py-5">
           <legend class="sr-only">Privacy</legend>
           <div class="text-sm font-medium text-gray-900" aria-hidden="true">Privacy</div>
           <div class="space-y-5 sm:col-span-2">
             <div class="space-y-5 sm:mt-0">
               <div class="relative flex items-start">
                 <div class="absolute flex h-5 items-center">
                   <input id="public-access" name="privacy" aria-describedby="public-access-description" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500" checked>
                 </div>
                 <div class="pl-7 text-sm">
                   <label for="public-access" class="font-medium text-gray-900">Public access</label>
                   <p id="public-access-description" class="text-gray-500">Everyone with the link will see this project</p>
                 </div>
               </div>
               <div class="relative flex items-start">
                 <div class="absolute flex h-5 items-center">
                   <input id="restricted-access" name="privacy" aria-describedby="restricted-access-description" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                 </div>
                 <div class="pl-7 text-sm">
                   <label for="restricted-access" class="font-medium text-gray-900">Private to Project Members</label>
                   <p id="restricted-access-description" class="text-gray-500">Only members of this project would be able to access</p>
                 </div>
               </div>
               <div class="relative flex items-start">
                 <div class="absolute flex h-5 items-center">
                   <input id="private-access" name="privacy" aria-describedby="private-access-description" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                 </div>
                 <div class="pl-7 text-sm">
                   <label for="private-access" class="font-medium text-gray-900">Private to you</label>
                   <p id="private-access-description" class="text-gray-500">You are the only one able to access this project</p>
                 </div>
               </div>
             </div>
             <hr class="border-gray-200">
             <div class="space-between sm:space-between flex flex-col space-y-4 sm:flex-row sm:items-center sm:space-y-0">
               <div class="flex-1">
                 <a href="#" class="group flex items-center space-x-2.5 text-sm font-medium text-indigo-600 hover:text-indigo-900">
                   <!-- Heroicon name: mini/link -->
                   <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                     <path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z" />
                     <path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z" />
                   </svg>
                   <span>Copy link</span>
                 </a>
               </div>
               <div>
                 <a href="#" class="group flex items-center space-x-2.5 text-sm text-gray-500 hover:text-gray-900">
                   <!-- Heroicon name: mini/question-mark-circle -->
                   <svg class="h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                     <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                   </svg>
                   <span>Learn more about sharing</span>
                 </a>
               </div>
             </div>
           </div>
         </fieldset>
       </div>
</x-hive-display-slide-over>
</div>
