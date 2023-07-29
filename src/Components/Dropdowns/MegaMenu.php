<?php

namespace Sixincode\HiveDisplay\Components\Dropdowns;

use Sixincode\HiveDisplay\Components\Base\DropdownTemplateElement;

class MegaMenu extends DropdownTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.dropdownsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.defaultMegaMenu');
    }
}
