<?php

namespace Sixincode\HiveDisplay\Components\Buttons;

use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

class ButtonDouble extends CardTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.buttonsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.defaultButtonDouble');
    }

    public function setDefaultBase()
    {
      return $this->base = config('hive-display.defaultViewsBase');
    }
}
