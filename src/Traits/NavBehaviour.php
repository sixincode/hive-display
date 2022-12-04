<?php

namespace Sixincode\HiveDisplay\Traits;

trait NavBehaviour
{
  public array $navigation;

  public function mountNavigationBehaviour()
  {
    $this->navigation = [

     ];
  }

  public function resetToDefaultAppNav()
  {
    $this->navigation = [
      'component' => config('display.defaultViews.appNav.user'),
    ];
  }

}
