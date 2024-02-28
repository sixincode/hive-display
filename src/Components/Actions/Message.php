<?php

namespace Sixincode\HiveDisplay\Components\Actions;

use Sixincode\HiveDisplay\Components\Base\BlankTemplateElement;

class Message extends BlankTemplateElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-display-views.actionsMessageSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-display-views.defaultActionsMessage');
  }

  public function setDefaultBase()
  {
    return $this->base = config('hive-display.defaultViewsBase');
  }
}
