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
    'action-message' => Components\Actions\Message::class,
    'banner'       => Components\Banners\Banner::class,
    'button-double'=> Components\Buttons\ButtonDouble::class,
    'button-array' => Components\Buttons\ButtonArray::class,
    'card'         => Components\Cards\Card::class,
    'dialog-modal' => Components\SlideOvers\DialogModal::class,
    'dropdown'     => Components\Dropdowns\Dropdown::class,
    'faq'          => Components\Faqs\Faq::class,
    'faq-item'     => Components\Faqs\FaqItem::class,
    // 'form'         => Components\Forms\Form::class,
    'form-layout'  => Components\Forms\FormLayout::class,
    'list'         => Components\Lists\List::class,
    'link'         => Components\Links\Link::class,
    'mega-menu'    => Components\Dropdowns\MegaMenu::class,
    'menu-dots'    => Components\Dropdowns\MenuDots::class,
    'modal'        => Components\SlideOvers\Modal::class,
    'page'         => Components\Pages\Page::class,
    'section'      => Components\Cards\SectionCard::class,
    'section-title'  => Components\Section\SectionTitle::class,
    'section-border' => Components\Section\SectionBorder::class,
    'tabs'         => Components\Tabs\Tab::class,
    'table'        => Components\Tables\Table::class,
    'table-item'   => Components\Tables\TableItem::class,
    'slide-over'   => Components\SlideOvers\SlideOver::class,

    'chapter-contact' => Components\Chapters\Contact::class,

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
  | This value will set a prefix for all Hive Display Components.
  | By default it's 'hive-display'. This is useful if you want to avoid
  | collision with components from other libraries.
  |
  | For example, it's reference components like:
  |
  | <x-hive-display />
  | <livewire:hive-display />
  |
  */
  'prefix' => 'hive-display',
];
