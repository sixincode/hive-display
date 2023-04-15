<?php

namespace Sixincode\HiveDisplay\Components\Partials\Footers;

use Sixincode\HiveDisplay\Components\Base\Partials\FooterTemplateElement;

class FooterAdmin extends FooterTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.footers.footersAdminSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.footers.defaultFooterAdmin');
    }
}
