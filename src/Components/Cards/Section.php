<?php

namespace Sixincode\HiveDisplay\Components\Cards;

use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

class Section extends CardTemplateElement
{
  public function setDefaultSource()
  {
    $this->source = config('hive-display.defaultViews.sectionsSource');
  }

  public function setDefaultComponent()
  {
    $this->component = config('hive-display.defaultViews.defaultSection');
  }
}
