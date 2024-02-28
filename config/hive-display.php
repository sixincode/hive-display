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

      'accordionsSource'     => 'tabs.accordions',
      'accordionsItemSource' => 'tabs.accordions.items',
      'bannersSource'        => 'banners',
      'cardsSource'          => 'cards',
      'dropdownsSource'      => 'dropdowns',
      'faqSource'            => 'faqs',
      'faqItemSource'        => 'faqs',
      'formsSource'          => 'forms',
      'formLayoutsSource'    => 'formLayouts',
      'linksSource'          => 'links',
      'listsSource'          => 'lists',
      'modalsSource'         => 'modals',
      'pagesSource'          => 'pages',
      'sectionsSource'       => 'sections',
      'sectionsBorderSource' => 'sectionComponents',
      'sectionsTitleSource'  => 'sectionComponents',
      'slideOversSource'     => 'slideOvers',
      'tabSource'            => 'tabs',
      'tablesSource'         => 'tables',
      'tablesItemSource'     => 'tables.items',

      'defaultAccordion'     => 'defaultAccordion',
      'defaultAccordionItem' => 'defaultAccordionItem',
      'defaultBanner'        => 'defaultBanner',
      'defaultCard'          => 'defaultCard',
      'defaultDropdown'      => 'defaultDropdown',
      'defaultFaq'           => 'defaultFaq',
      'defaultFaqItem'       => 'defaultFaqItem',
      'defaultForm'          => 'defaultForm',
      'defaultFormLayouts'   => 'defaultFormLayout',
      'defaultLink'          => 'defaultLink',
      'defaultList'          => 'defaultList',
      'defaultMegaMenu'      => 'defaultMegaMenu',
      'defaultModal'         => 'defaultModal',
      'defaultPage'          => 'defaultPage',
      'defaultSlideOver'     => 'defaultSlideOver',
      'defaultSection'       => 'defaultSection',
      'defaultSectionTitle'  => 'defaultSectionTitle',
      'defaultSectionBorder' => 'defaultSectionBorder',
      'defaultTab'           => 'defaultTab',
      'defaultTable'         => 'defaultTable',
      'defaultTableItem'     => 'defaultTableItem',


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
