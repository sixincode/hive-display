<?php

namespace Sixincode\HiveDisplay\Traits;

trait SidebarBehaviour
{
  public function resetToDefaultAppSidebar()
  {
    $this->sidebar = [
      'component' => config('display.defaultViews.appSidebar.user'),
    ];
  }

  public function generateAppSidebar(array $sidebar = [])
  {
    $this->nav = [
      'component' => config('display.defaultViews.appNav.user'),
    ];

  }


}
