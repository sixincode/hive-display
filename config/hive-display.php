<?php

// config for Sixincode/HiveDisplay
return [
  'name' => 'hiveDisplay',
  'identification'     => 'hive-display',
  'models'             => [
      'banner'                       => Sixincode\HiveDisplay\Models\Banner::class,
   ],
  'table_names'        => [
      'banners'                      => 'banners',
    ],
  'column_names'       => [
    //
    ],
  'defaultViewsBase'     => 'hive-display::components',
  'defaultViews'       => [
      'appSidebarLink'              => [
        'central' => '',
        'user'    => 'defaultLink',
      ],
      'defaultSource'        => 'default',
      'defaultComponent'     => 'defaultComponent',

      'bannersSource'        => 'banners',
      'cardsSource'          => 'cards',
      'dropdownsSource'      => 'dropdowns',
      'formsSource'          => 'forms',
      'linksSource'          => 'links',
      'listsSource'          => 'lists',
      'modalsSource'         => 'modals',
      'pagesSource'          => 'pages',
      'sectionsSource'       => 'sections',
      'slideOversSource'     => 'slideOvers',
      'tabSource'            => 'tabs',

      'defaultBanner'        => 'defaultBanner',
      'defaultCard'          => 'defaultCard',
      'defaultDropdown'      => 'defaultDropdown',
      'defaultForm'          => 'defaultForm',
      'defaultLink'          => 'defaultLink',
      'defaultList'          => 'defaultList',
      'defaultModal'         => 'defaultModal',
      'defaultPage'          => 'defaultPage',
      'defaultSlideOver'     => 'defaultSlideOver',
      'defaultSection'       => 'defaultSection',
      'defaultTab'           => 'defaultTab',

      'accordionsSource'     => 'tabs.accordions',
      'accordionsItemSource' => 'tabs.accordions.items',
      'defaultAccordion'     => 'defaultAccordion',
      'defaultAccordionItem' => 'defaultAccordionItem',


      'layouts'               => [
        'layoutsSource'           => 'layouts.main',
        'layoutsAdminSource'      => 'layouts.admin',
        'layoutsAppSource'        => 'layouts.app',
        'defaultLayout'           => 'defaultLayout',
        'defaultLayoutAdmin'      => 'defaultLayoutAdmin',
        'defaultLayoutApp'        => 'defaultLayoutApp',
        ],
      'navigations'               => [
        'navigationsSource'           => 'partials.navigations.main',
        'navigationsAdminSource'      => 'partials.navigations.admin',
        'navigationsAppSource'        => 'partials.navigations.app',
        'defaultNavigation'       => 'defaultNav',
        'defaultNavigationAdmin'  => 'defaultNavAdmin',
        'defaultNavigationApp'    => 'defaultNavApp',
        ],
      'sidebars'               => [
        'sidebarsSource'           => 'partials.sidebars.main',
        'sidebarsAdminSource'      => 'partials.sidebars.admin',
        'sidebarsAppSource'        => 'partials.sidebars.app',
        'defaultSidebar'           => 'defaultSidebar',
        'defaultSidebarAdmin'      => 'defaultSidebarAdmin',
        'defaultSidebarApp'        => 'defaultSidebarApp',
        ],
      'headers'               => [
        'headersSource'            => 'partials.headers.main',
        'headersAdminSource'       => 'partials.headers.admin',
        'headersAppSource'         => 'partials.headers.app',
        'defaultHeader'            => 'defaultHeader',
        'defaultHeaderAdmin'       => 'defaultHeaderAdmin',
        'defaultHeaderApp'         => 'defaultHeaderApp',
        ],
      'footers'               => [
        'footersSource'            => 'partials.footers.main',
        'footersAdminSource'       => 'partials.footers.admin',
        'footersAppSource'         => 'partials.footers.app',
        'defaultFooter'            => 'defaultFooter',
        'defaultFooterAdmin'       => 'defaultFooterAdmin',
        'defaultFooterApp'         => 'defaultFooterApp',
        ],
    ],

    'cssFrameworks'    => [
      'tailwind'            => 'tailwind',
      'bootstrap'           => 'bootstrap',
      ],

];
