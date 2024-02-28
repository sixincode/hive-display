<?php

namespace Sixincode\HiveDisplay\Components\Cards;

use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

class SectionCard extends CardTemplateElement
{
  public function setDefaultSource()
  {
    $this->source = config('hive-display.defaultViews.sectionsSource');
  }

  public function setDefaultComponent()
  {
    $this->component = config('hive-display.defaultViews.defaultSection');
  }

  public function setDefaultBase()
  {
    return $this->base = config('hive-display.defaultViewsBase');
  }
}
