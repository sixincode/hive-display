<?php

namespace Sixincode\HiveDisplay\Components\Links;

use Sixincode\HiveForm\Components\Base\TemplateButtonElement;

class Link extends TemplateButtonElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.linksSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.defaultLink');
    }

    public function setDefaultBase()
    {
      return $this->base = config('hive-display.defaultViewsBase');
    }
}
