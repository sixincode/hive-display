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

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100 overflow-hidden dark:bg-gray-700 flex" x-data="{ sidebarOpen : true, modalOpen : false }">
            <!-- Page Sidebar -->
            <div class="">
              <x-hive-display-default-sidebar component='{{$sidebar}}'/>
            </div>
            <!-- Page Content -->
            <div class="">
              <x-hive-display-default-nav component='{{$nav}}'/>
              <main id="main">
              {{ $slot }}
              </main>
              <x-hive-display-default-footer component='{{$footer}}'/>
            </div>

        </div>

        @stack('modals')
        @stack('scripts')
        @include('layouts.central.partials.Common')

        @livewireScripts
    </body>
</html>
