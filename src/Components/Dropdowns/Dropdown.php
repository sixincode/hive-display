<?php

namespace Sixincode\HiveDisplay\Components\Dropdowns;

use Sixincode\HiveDisplay\Components\Base\DropdownTemplateElement;

class Dropdown extends DropdownTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.dropdownsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.defaultDropdown');
    }
}
