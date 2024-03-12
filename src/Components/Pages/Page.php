<?php

namespace Sixincode\HiveDisplay\Components\Pages;

use Sixincode\HiveDisplay\Components\Base\PageTemplateElement;

class Page extends PageTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.pagesSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.defaultPage');
    }

    public function setDefaultFramework()
    {
      return $this->cssFramework = config('hive-display.cssFrameworks.null');
    }
}
