<?php

namespace Sixincode\HiveDisplay\Traits;

trait FooterBehaviour
{
  public function resetToDefaultAppFooter()
  {
    $this->footer = [
      'component' => config('display.defaultViews.appFooter.user'),
    ];
   }


}
