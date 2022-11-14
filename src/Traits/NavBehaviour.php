<?php

namespace Sixincode\HiveDisplay\Traits;

trait NavBehaviour
{
  public function resetToDefaultAppNav()
  {
    $this->nav = [
      'component' => config('display.defaultViews.appNav.user'),
    ];
  }


}
