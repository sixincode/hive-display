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
      'appLayout'                  => [
        'central' => '',
        'user'    => 'app.defaultAppLayout',
      ],
      'appNav'                  => [
        'central' => '',
        'user'    => 'app.defaultAppNav',
      ],
      'appSidebar'                  => [
        'central' => '',
        'user'    => 'app.appSidebar',
      ],
      'appSidebarLink'              => [
        'central' => '',
        'user'    => 'defaultLink',
      ],
      'appFooter'                  => [
        'central' => '',
        'user'    => 'app.defaultAppFooter',
      ],
      'sectionsSource'   => 'sections',
      'sectionsSource'   => 'sections',
      'cardsSource'   => 'cards',

      'defaultCard'     => 'defaultCard',
      'defaultSource'   => 'sections',
      'defaultComponent'   => 'defaultSection',
      'boxedSection'   => 'defaultSection',
      'card'   => 'defaultCard',

    ],

];
