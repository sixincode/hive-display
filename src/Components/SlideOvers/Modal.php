<?php

namespace Sixincode\HiveDisplay\Components\SlideOvers;

use Sixincode\HiveDisplay\Components\Base\SlideOverTemplateElement;

class Modal extends SlideOverTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.modalsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.defaultModal');
    }
}
