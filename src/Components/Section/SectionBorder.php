<?php

namespace Sixincode\HiveDisplay\Components\Section;

use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

class SectionBorder extends CardTemplateElement
{
  public function setDefaultSource()
  {
    $this->source = config('hive-display.defaultViews.sectionsBorderSource');
  }

  public function setDefaultComponent()
  {
    $this->component = config('hive-display.defaultViews.defaultSectionBorder');
  }

  public function setDefaultBase()
  {
    return $this->base = config('hive-display.defaultViewsBase');
  }
}
