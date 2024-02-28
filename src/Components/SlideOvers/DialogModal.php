<?php

namespace Sixincode\HiveDisplay\Components\SlideOvers;

use Sixincode\HiveDisplay\Components\Base\SlideOverTemplateElement;

class DialogModal extends SlideOverTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display-views.defaultViews.dialogModalsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display-views.defaultViews.defaultDialogModal');
    }
}
