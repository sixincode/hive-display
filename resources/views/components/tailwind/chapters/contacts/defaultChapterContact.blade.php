@props([
'route',
'email'      => '',
'email_text' => '',
'phone'      => '',
'phone_text' => '',
])

<x-hive-display-section component='boxedXSection' class='w-full bg-white dark:bg-gray-900'>
      <div class="sm:flex justify-between items-center rounded bg-white/80">

             <div class="py-4 sm:max-w-3xl md:max-w-4xl">
                 <p class="text-gray-500 dark:text-green-400">Contact us</p>

                 <h1 class="mt-2 text-4xl font-extrabold text-green-800 sm:text-6xl dark:text-white">Get in touch</h1>

                 <p class="mt-3 text-gray-700 dark:text-gray-600 text-3xl">Our friendly team is always here to chat.</p>

                 <div class="grid grid-cols-1 gap-12 mt-10 md:grid-cols-2 lg:grid-cols-3 mt-12 sm:mt-20">
                     <div>
                         <span class="inline-block p-3 text-green-800 rounded-full bg-green-100/80 dark:bg-gray-800">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
                             </svg>
                         </span>

                         <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Email</h2>
                         <p class="mt-2 text-gray-500 dark:text-gray-400">Our friendly team is here to help.</p>
                         <a href="mailto:contact@coinesis.co" class="mt-2 text-green-700 hover:text-green-900 dark:text-green-400">contact@coinesis.co</a>
                     </div>



                     <div>
                         <span class="inline-block p-3 text-green-800 rounded-full bg-green-100/80 dark:bg-gray-800">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path>
                             </svg>
                         </span>

                         <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Phone</h2>
                         <p class="mt-2 text-gray-500 dark:text-gray-400">Mon-Fri from 8am to 5pm.</p>
                         <a href="tel:+12428033903" class="mt-2 text-green-700 hover:text-green-900 dark:text-green-400">+1 (242) 803-3903</a>
                     </div>
                 </div>
             </div>
              <div class="max-w-80 flex-1">
                <img src="http://coinesis.test/vendor/coinesis-core/img/contact/operator.jpg" class="w-full mx-auto" alt="operator">
              </div>

           </div>
  </x-hive-display-section>
