<?php

namespace Sixincode\HiveDisplay\Components\Partials\Navigation;

use Sixincode\HiveDisplay\Components\Base\Partials\NavigationTemplateElement;

class Nav extends NavigationTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.navigations.navigationsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.navigations.defaultNavigation');
    }
}
