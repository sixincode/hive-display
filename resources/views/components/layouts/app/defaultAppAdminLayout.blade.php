<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Hive Display') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.9.0/cdn.min.js" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles
        @stack('styles')

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
       <body
      class="font-inter antialiased bg-slate-100 text-slate-600"
      :class="{ 'sidebar-expanded': sidebarExpanded }"
      x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
      x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
  >
        <div class="min-h-screen bg-white overflow-hidden dark:bg-gray-700 " x-data="{ sidebarOpen : true, modalOpen : false }">
             <!-- Page Content -->
               <main id="main">
              {{ $slot }}
              </main>
              <x-hive-display-footer />
         </div>
        @stack('modals')
        @livewireScripts
        @stack('scripts')
    </body>
</html>
