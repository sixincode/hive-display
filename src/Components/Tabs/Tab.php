<?php

namespace Sixincode\HiveDisplay\Components\Tabs;

use Illuminate\View\Component;
use Sixincode\HiveDisplay\Components\Base\TabTemplateElement;

class Tab extends TabTemplateElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-display.defaultViews.tabSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-display.defaultViews.defaultTab');
  }
}
