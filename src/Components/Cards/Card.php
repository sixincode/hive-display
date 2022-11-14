<?php

namespace Sixincode\HiveDisplay\Components\Cards;

use Sixincode\HiveDisplay\Components\TemplateElement;

class Card extends TemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.cardsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.defaultCard');
    }
}
