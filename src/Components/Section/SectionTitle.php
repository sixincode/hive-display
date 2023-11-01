<?php

namespace Sixincode\HiveDisplay\Components\Section;

use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

use Illuminate\View\Component;
use Illuminate\View\View;

class SectionTitle extends CardTemplateElement
{
  public function setDefaultSource()
  {
    $this->source = config('hive-display.defaultViews.sectionsTitleSource');
  }

  public function setDefaultComponent()
  {
    $this->component = config('hive-display.defaultViews.defaultSectionTitle');
  }

  public function setDefaultBase()
  {
    return $this->base = config('hive-display.defaultViewsBase');
  }
}
