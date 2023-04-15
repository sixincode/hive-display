<?php

namespace Sixincode\HiveDisplay\Components\Partials\Sidebars;

use Sixincode\HiveDisplay\Components\Base\Partials\SidebarTemplateElement;

class SidebarApp extends SidebarTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.sidebars.sidebarsAppSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.sidebars.defaultSidebarApp');
    }
}
