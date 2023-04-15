<?php

namespace Sixincode\HiveDisplay\Components\Layouts;


use Sixincode\HiveDisplay\Components\Base\LayoutTemplateElement;

class Layout extends LayoutTemplateElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-display.defaultViews.layouts.layoutsSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-display.defaultViews.layouts.defaultLayout');
  }

}
