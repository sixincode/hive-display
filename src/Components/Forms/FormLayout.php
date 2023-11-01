<?php

namespace Sixincode\HiveDisplay\Components\Forms;

use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

class FormLayout extends CardTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.formLayoutsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.defaultFormLayouts');
    }
}
