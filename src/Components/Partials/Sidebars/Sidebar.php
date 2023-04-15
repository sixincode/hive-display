<?php

namespace Sixincode\HiveDisplay\Components\Partials\Sidebars;

use Sixincode\HiveDisplay\Components\Base\Partials\SidebarTemplateElement;

class Sidebar extends SidebarTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.sidebars.sidebarsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.sidebars.defaultSidebar');
    }
}
