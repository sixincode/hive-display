@props([
    // title of the card
    'title' => '',
    // should the card be displayed with a shadow
    'has_shadow' => 'true',
    // for backward compatibility with Laravel 8
    'hasShadow' => 'true',
    // reduce padding within the card
    'reduce_padding' => 'false',
    // for backward compatibility with Laravel 8
    'reducePadding' => 'false',
    // content to display as card header
    'header' => '',
    // content to display as card footer
    'footer' => '',
    // additional css
    'class' => '',
])
@php
    // reset variables for Laravel 8 support
    $has_shadow = $hasShadow;
    $reduce_padding = $reducePadding;
@endphp
<nav id="navigation" class=" {{$class}}">
  <div class="sticky top-0 z-10 shrink-0 flex h-16 bg-white dark:bg-secondary-900 md:bg-transparent md:dark:bg-transparent backdrop-filter backdrop-blur-md shadow md:shadow-none md:py-4 md:h-auto border-b border-transparent md:border-secondary-200 dark:border-secondary-700">
    <button @click.stop="sidebarOpen = true" class="px-4 border-r border-secondary-200 dark:border-secondary-700 text-secondary-500 focus:outline-none focus:bg-secondary-100 dark:focus:bg-secondary-800 focus:text-secondary-600 dark:focus:text-secondary-500 md:hidden" aria-label="Open sidebar">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
        </svg>
    </button>
    <div class="flex-1 px-4 sm:px-6 md:px-8 flex justify-between">
        <div class="flex-1 flex">

        </div>
        @auth
        <div class="ml-4 flex items-center md:ml-6 space-x-4">
            <a x-tooltip.raw="View Site" href="http://ngodere.com" target="_blank" class="text-secondary-500 hover:text-secondary-900 dark:text-secondary-400 dark:hover:text-white">
                <svg class="h-5 w-5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </a>
            <!-- Profile dropdown -->
            <div wire:id="R2MVnpNlmc0ffjRFUeUZ" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false" x-on:notify.window="open = false" class="relative">
    <div @click="open = ! open">
        <button class="max-w-xs flex items-center text-sm rounded-full overflow-hidden focus:outline-none hover:bg-secondary-50 dark:focus:bg-secondary-700 dark:hover:bg-secondary-800 lg:p-1.5 lg:rounded-md">
            <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=John+Doe&amp;color=1d4ed8&amp;background=dbeafe" alt="admin@admin.com">
            <span class="hidden ml-3 text-secondary-900 dark:text-white text-sm leading-5 font-medium lg:block">{{ Auth::user()->name }}</span>
            <svg class="hidden shrink-0 ml-1 h-5 w-5 text-secondary-400 lg:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
</svg>        </button>
    </div>

    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 mt-2 w-56 rounded-md shadow-lg origin-top-left right-1" style="display: none;" role="menu" @click="open = false">
        <div class="rounded-md shadow-xs bg-white dark:bg-secondary-800 text-left">
            <div class="px-4 py-3">
            <p class="text-sm leading-5 txt-secondary-900 dark:text-white">
                Signed in with
            </p>
            <p class="text-sm leading-5 font-medium text-secondary-900 dark:text-white truncate">
                {{ Auth::user()->email }}
            </p>
        </div>
                    <div class="border-t border-secondary-100 dark:border-secondary-700"></div>
            <div class="py-1">
                <a class="group flex items-center px-4 py-2 text-sm leading-5 text-secondary-700 dark:text-secondary-400 hover:bg-secondary-100 dark:hover:bg-secondary-700 hover:text-secondary-900 dark:hover:text-white transition duration-150 ease-in-out" href="http://ngodere.com/shopper/products/create"><svg class="mr-3 h-5 w-5 text-secondary-400 group-hover:text-secondary-500 group-focus:text-secondary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
</svg>                    Add product</a>
            </div>
                <div class="border-t border-secondary-100 dark:border-secondary-700"></div>
        <div class="py-1">
            <a class="group flex items-center px-4 py-2 text-sm leading-5 text-secondary-700 dark:text-secondary-400 hover:bg-secondary-100 dark:hover:bg-secondary-700 hover:text-secondary-900 dark:hover:text-white transition duration-150 ease-in-out" href="http://ngodere.com/shopper/profile"><svg class="mr-3 h-5 w-5 text-secondary-400 group-hover:text-secondary-500 group-focus:text-secondary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
</svg>                Personal Account</a>
                            <a class="group flex items-center px-4 py-2 text-sm leading-5 text-secondary-700 dark:text-secondary-400 hover:bg-secondary-100 dark:hover:bg-secondary-700 hover:text-secondary-900 dark:hover:text-white transition duration-150 ease-in-out" href="http://ngodere.com/shopper/setting/management"><svg class="mr-3 h-5 w-5 text-secondary-400 group-hover:text-secondary-500 group-focus:text-secondary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
</svg>                    Manage Users</a>
                    </div>
        <div class="border-t border-secondary-100 dark:border-secondary-700"></div>
        <div class="py-1">
                            <a class="group flex items-center px-4 py-2 text-sm leading-5 text-secondary-700 dark:text-secondary-400 hover:bg-secondary-100 dark:hover:bg-secondary-700 hover:text-secondary-900 dark:hover:text-white transition duration-150 ease-in-out" href="http://ngodere.com/shopper/setting"><svg class="mr-3 h-5 w-5 text-secondary-400 group-hover:text-secondary-500 group-focus:text-secondary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
</svg>                    Settings</a>
                    </div>
        <div class="border-t border-secondary-100 dark:border-secondary-700"></div>
        <div class="py-1">
            <a class="group flex items-center px-4 py-2 text-sm leading-5 text-secondary-700 dark:text-secondary-400 hover:bg-secondary-100 dark:hover:bg-secondary-700 hover:text-secondary-900 dark:hover:text-white transition duration-150 ease-in-out" href="http://ngodere.com/shopper/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><svg class="mr-3 h-5 w-5 text-secondary-400 group-hover:text-secondary-500 group-focus:text-secondary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
</svg>                Sign out</a>
            <form id="logout-form" action="http://ngodere.com/shopper/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="yTf0BBtN5ASgAztMj74mThPYfdbXWnW0uYcSKHQB">            </form>
        </div>
        </div>
    </div>
</div>
  </div>
  @endauth
    </div>
</div>
</nav>
