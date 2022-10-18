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
        'user'    => 'defaultAppLayout',
      ],
      'appFooter'                  => [
        'central' => '',
        'user'    => 'defaultAppFooter',
      ],
      'appNav'                  => [
        'central' => '',
        'user'    => 'defaultAppNav',
      ],
    ],

];
