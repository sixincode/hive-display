<?php

namespace Sixincode\HiveDisplay\Components\Tabs;

use Illuminate\View\Component;
use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

class AccordionItem extends CardTemplateElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-display.defaultViews.accordionsItemSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-display.defaultViews.defaultAccordionItem');
  }
}
