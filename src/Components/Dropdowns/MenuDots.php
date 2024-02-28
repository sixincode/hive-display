<?php

namespace Sixincode\HiveDisplay\Components\Dropdowns;

use Sixincode\HiveDisplay\Components\Base\DropdownTemplateElement;

class MenuDots extends DropdownTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display-views.dropdownsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display-views.defaultDropdownMenudots');
    }
}
