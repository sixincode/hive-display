<?php

namespace Sixincode\HiveDisplay\Components\Cards;

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
}
