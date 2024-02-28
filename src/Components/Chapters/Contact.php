<?php

namespace Sixincode\HiveDisplay\Components\Chapters;

use Sixincode\HiveDisplay\Components\Base\BlankTemplateElement;

class Contact extends BlankTemplateElement
{
  public function setDefaultSource()
  {
    return $this->source = config('hive-display-views.chapterContactSource');
  }

  public function setDefaultComponent()
  {
    return $this->component = config('hive-display-views.defaultChapterContact');
  }

  public function setDefaultBase()
  {
    return $this->base = config('hive-display.defaultViewsBase');
  }
}
