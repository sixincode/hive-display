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
<aside id="sidebar" class=" {{$class}}">
      <div class="hidden h-screen lg:flex">
        <div class="lg:w-52">
        <!-- Navigation -->
        <nav class="p-3 grid h-full">
          <div class="space-y-1.5">
            <x-hive-display-default-link
            title='{{__("Home")}}'
            url='{{route("user.home")}}'
            icon='home'
            active='{{request()->routeIs( "user.home")}}'
            iconWidth='1.5'/>
            <x-hive-display-default-link
            title='{{__("Posts")}}'
            url='#'
            icon='post'
            iconWidth='1.5'/>
            <x-hive-display-default-link
            title='{{__("Calendar")}}'
            url='#'
            icon='calendar'
            iconWidth='1.5'/>
            <x-hive-display-default-link
            title='{{__("Teams")}}'
            url='#'
            icon='team'
            iconWidth='1.5'/>
            <x-hive-display-default-link
            title='{{__("Bookmarks")}}'
            url='#'
            icon='bookmark'
            iconWidth='1.5'/>

            <x-hive-display-default-link
            title='{{__("Announcements")}}'
            url='#'
            icon='announcement'
            iconWidth='1.5'/>




          </div>
          <div class="mt-auto space-y-1">
            <x-hive-display-default-link
              title='{{__("Settings")}}'
              url='#'
              icon='settings'
              iconWidth='2'/>
          </div>
        </nav>
      </div>

      </div>
</aside>
