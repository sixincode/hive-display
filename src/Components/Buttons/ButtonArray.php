<?php

namespace Sixincode\HiveDisplay\Components\Buttons;

use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

class ButtonArray extends CardTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display-views.buttonsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display-views.defaultButtonArray');
    }

    public function setDefaultBase()
    {
      return $this->base = config('hive-display.defaultViewsBase');
    }
}
