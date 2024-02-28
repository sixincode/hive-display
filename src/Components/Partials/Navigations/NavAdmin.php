<?php

namespace Sixincode\HiveDisplay\Components\Partials\Navigations;

use Sixincode\HiveDisplay\Components\Base\Partials\NavigationTemplateElement;

class NavAdmin extends NavigationTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.navigations.navigationsAdminSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.navigations.defaultNavigationAdmin');
    }
}
