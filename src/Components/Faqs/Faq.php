<?php

namespace Sixincode\HiveDisplay\Components\Faqs;

use Illuminate\View\Component;
use Sixincode\HiveDisplay\Components\Base\FaqTemplateElement;

class Faq extends FaqTemplateElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-display.defaultViews.faqSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-display.defaultViews.defaultFaq');
  }
}
