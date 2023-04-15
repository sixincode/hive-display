<?php

namespace Sixincode\HiveDisplay\Components\Layouts;


use Sixincode\HiveDisplay\Components\Base\LayoutTemplateElement;

class LayoutApp extends LayoutTemplateElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-display.defaultViews.layouts.layoutsAppSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-display.defaultViews.layouts.defaultLayoutApp');
  }
}
