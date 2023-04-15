<?php

namespace Sixincode\HiveDisplay\Components\Cards;

use Sixincode\HiveDisplay\Components\Base\FormTemplateElement;

class Form extends FormTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.formsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.defaultForm');
    }
}
