<?php

namespace Sixincode\HiveDisplay\Components\Lists;

use Sixincode\HiveDisplay\Components\Base\ListTemplateElement;

class List extends ListTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.listsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.defaultList');
    }
}
