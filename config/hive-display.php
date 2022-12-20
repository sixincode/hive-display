<?php

// config for Sixincode/HiveDisplay
return [
  'name' => 'hiveDisplay',
  'identification' => 'hive-finance',
  'models'          => [
      'banner'                       => Sixincode\HiveDisplay\Models\Banner::class,
   ],
  'table_names'     => [
      'banners'                      => 'banners',
    ],
  'column_names'    => [
      'global_key'                  => 'global',
      'owner_morph_key'             => 'owner_id',
      'owner_morph_type'
    ],
  'defaultViews'    => [
      'appSidebarLink'              => [
        'central' => '',
        'user'    => 'defaultLink',
      ],
      'sectionsSource'   => 'sections',
      'sectionsSource'   => 'sections',
      'cardsSource'   => 'cards',

      'defaultCard'     => 'defaultCard',
      'defaultSource'   => 'sections',
      'defaultComponent'   => 'defaultSection',
      'boxedSection'   => 'defaultSection',
      'card'   => 'defaultCard',


  'layout'                  => [
      'central' => [
        'user'    => 'central.defaultCentralUserLayout',
        'admin'   => 'central.defaultCentralAdminLayout',
      ],
      'app'     => [
        'user'    => 'app.defaultAppUserLayout',
        'admin'   => 'app.defaultAppAdminLayout',
      ],
      'auth'    => [
        'user'    => 'auth.defaultAuthUserLayout',
        'admin'   => 'auth.defaultAuthAdminLayout',
      ],
    ],

    'navigation'                  => [
        'central' => [
          'user'    => 'central.defaultCentralUserNav',
          'admin'   => 'central.defaultCentralAdminNav',
        ],
        'app'     => [
          'user'    => 'app.defaultAppUserNav',
          'admin'   => 'app.defaultAppAdminNav',
        ],
        'auth'    => [
          'user'   =>  'auth.defaultAuthUserNav',
          'admin'  =>  'auth.defaultAuthAdminNav',
        ],
      ],

  'sidebar'                  => [
      'central' => [
        'user'    => 'central.defaultCentralUserSideBar',
        'admin'   => 'central.defaultCentralAdminSideBar',
      ],
      'app'     => [
        'user'    => 'app.defaultAppUserSideBar',
        'admin'   => 'app.defaultAppAdminSideBar',
      ],
      'auth'    => [
        'user'   =>  'auth.defaultAuthUserSideBar',
        'admin'  =>  'auth.defaultAuthAdminSideBar',
      ],
    ],

    'header'                  => [
      'central' => [
        'user'    => 'central.defaultCentralUserHeader',
        'admin'   => 'central.defaultCentralAdminHeader',
      ],
        'auth'    => [
          'user'   =>  'auth.defaultAuthUserHeader',
          'admin'  =>  'auth.defaultAuthAdminHeader',
        ],
      ],

  'footer'                  => [
      'central' => [
        'user'    => 'central.defaultCentralUserFooter',
        'admin'   => 'central.defaultCentralAdminFooter',
      ],
      'app'     => [
        'user'    => 'app.defaultAppUserFooter',
        'admin'   => 'app.defaultAppAdminFooter',
      ],
      'auth'    => [
        'user'   =>  'auth.defaultAuthUserFooter',
        'admin'  =>  'auth.defaultAuthAdminFooter',
      ],
    ],



    ],

];
