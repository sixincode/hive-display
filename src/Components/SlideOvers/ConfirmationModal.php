<?php

namespace Sixincode\HiveDisplay\Components\SlideOvers;

use Sixincode\HiveDisplay\Components\Base\SlideOverTemplateElement;

class ConfirmationModal extends SlideOverTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display-views.defaultViews.confirmationModalsSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display-views.defaultViews.defaultConfirmationModal');
    }
}
