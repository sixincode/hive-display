<?php

namespace Sixincode\HiveDisplay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sixincode\HiveDisplay\HiveDisplay
 */
class HiveDisplay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sixincode\HiveDisplay\HiveDisplay::class;
    }
}
