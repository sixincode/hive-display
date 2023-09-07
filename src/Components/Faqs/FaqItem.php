<?php

namespace Sixincode\HiveDisplay\Components\Faqs;

use Illuminate\View\Component;
use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

class FaqItem extends CardTemplateElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-display.defaultViews.faqItemSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-display.defaultViews.defaultFaqItem');
  }
}
