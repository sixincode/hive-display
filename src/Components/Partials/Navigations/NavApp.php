<?php

namespace Sixincode\HiveDisplay\Components\Partials\Navigations;

use Sixincode\HiveDisplay\Components\Base\Partials\NavigationTemplateElement;

class NavApp extends NavigationTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.navigations.navigationsAppSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.navigations.defaultNavigationApp');
    }
}
