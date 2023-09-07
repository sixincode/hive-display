<?php

namespace Sixincode\HiveDisplay\Components\Tables;

use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

class Table extends CardTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.tablesSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.defaultTable');
    }

    public function setDefaultBase()
    {
      return $this->base = config('hive-display.defaultViewsBase');
    }
}
