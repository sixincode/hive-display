<?php

namespace Sixincode\HiveDisplay\Components\Tables;

use Illuminate\View\Component;
use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

class TableItem extends CardTemplateElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-display.defaultViews.tablesItemSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-display.defaultViews.defaultTableItem');
  }
}
