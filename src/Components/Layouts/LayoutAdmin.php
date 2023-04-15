<?php

namespace Sixincode\HiveDisplay\Components\Layouts;


use Sixincode\HiveDisplay\Components\Base\LayoutTemplateElement;

class LayoutAdmin extends LayoutTemplateElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-display.defaultViews.layouts.layoutsAdminSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-display.defaultViews.layouts.defaultLayoutAdmin');
  }
}
