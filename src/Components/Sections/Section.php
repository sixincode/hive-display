<?php

namespace Sixincode\HiveDisplay\Components\Sections;

use Sixincode\HiveDisplay\Components\TemplateElement;

class Section extends TemplateElement
{
  public function setDefaultSource()
  {
    $this->source = config('hive-display.defaultViews.sectionsSource');
  }

  public function setDefaultComponent()
  {
    $this->component = config('hive-display.defaultViews.boxedSection');
  }
}
