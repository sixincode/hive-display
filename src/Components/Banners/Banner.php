<?php

namespace Sixincode\HiveDisplay\Components\Banners;

use Sixincode\HiveDisplay\Components\Base\BannerTemplateElement;

class Banner extends BannerTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.bannersSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.defaultBanner');
    }
}
