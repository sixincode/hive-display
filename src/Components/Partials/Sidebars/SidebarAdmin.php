<?php

namespace Sixincode\HiveDisplay\Components\Partials\Sidebars;

use Sixincode\HiveDisplay\Components\Base\Partials\SidebarTemplateElement;

class SidebarAdmin extends SidebarTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.sidebars.sidebarsAdminSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.sidebars.defaultSidebarAdmin');
    }
}
