<?php

use Sixincode\HiveDisplay\Components as Components;

return [
  /*
  |--------------------------------------------------------------------------
  | Blade Components
  |--------------------------------------------------------------------------
  | Below are listed all the blade components that should be loaded
  | by the packageBooted method on the package ServiceProder.
  */

  'blade' => [
    'accordion' => Components\Tabs\Accordion::class,
    'accordion-item' => Components\Tabs\AccordionItem::class,
    'banner'       => Components\Banners\Banner::class,
    'card'         => Components\Cards\Card::class,
    'dropdown'     => Components\Dropdowns\Dropdown::class,
    // 'form'         => Components\Forms\Form::class,
    'list'         => Components\Lists\List::class,
    'link'         => Components\Links\Link::class,
    'modal'        => Components\SlideOvers\Modal::class,
    // 'page'         => Components\Pages\Page::class,
    'section'      => Components\Cards\Section::class,
    'tabs'         => Components\Tabs\Tab::class,
    'slide-over'   => Components\SlideOvers\SlideOver::class,

    'layout'       => Components\Layouts\Layout::class,
    'layout-app'   => Components\Layouts\LayoutApp::class,
    'layout-admin' => Components\Layouts\LayoutAdmin::class,
    'sidebar'      => Components\Partials\Sidebars\Sidebar::class,
    'sidebar-app'  => Components\Partials\Sidebars\SidebarApp::class,
    'sidebar-admin'=> Components\Partials\Sidebars\SidebarAdmin::class,
    'nav'          => Components\Partials\Navigations\Nav::class,
    'nav-app'      => Components\Partials\Navigations\NavApp::class,
    'nav-admin'    => Components\Partials\Navigations\NavAdmin::class,
    'header'       => Components\Partials\Headers\Header::class,
    'header-app'   => Components\Partials\Headers\HeaderApp::class,
    'header-admin' => Components\Partials\Headers\HeaderAdmin::class,
    'footer'       => Components\Partials\Footers\Footer::class,
    'footer-app'   => Components\Partials\Footers\FooterApp::class,
    'footer-admin' => Components\Partials\Footers\FooterAdmin::class,
    ],
  /*
  |--------------------------------------------------------------------------
  | Livewire Components
  |--------------------------------------------------------------------------
  | Below are listed all the Livewire components that should be loaded
  | by the bootingPackage method on the package ServiceProder.
  */
  'livewire' => [
   //
  ],

  /*
  |--------------------------------------------------------------------------
  | Components Prefix
  |--------------------------------------------------------------------------
  |
  | This value will set a prefix for all Shopper Admin components.
  | By default it's shopper. This is useful if you want to avoid
  | collision with components from other libraries.
  |
  | For example, it's reference components like:
  |
  | <x-hive-index />
  | <livewire:hive-index />
  |
  */
  'prefix' => 'hive-display',
];