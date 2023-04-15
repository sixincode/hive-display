<?php

namespace Sixincode\HiveDisplay\Components\Partials\Headers;

use Sixincode\HiveDisplay\Components\Base\Partials\HeaderTemplateElement;

class Header extends HeaderTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.headers.headersSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.headers.defaultHeader');
    }
}
