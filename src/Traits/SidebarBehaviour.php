<?php

namespace Sixincode\HiveDisplay\Traits;

trait SidebarBehaviour
{
  public array $sidebar;

  public function mountSideBarBehaviour($sidebar)
  {
    $this->sidebar = [
      'component' => $sidebar
     ];
  }

  public function setSidebarBehaviour()
  {
//     switch($sidebar['component']) {
//             case('user'):
//             $this->sidebar['component'] =  config('hive-display.defaultViews.sidebar.auth.user') ;
//             case('admin'):
//             $this->sidebar['component'] =  config('hive-display.defaultViews.sidebar.auth.admin') ;
//             break;
//           default:
//             $this->sidebar['component'] =  config('hive-display.defaultViews.sidebar.auth.app') ;
//       }
  }
  public function resetToDefaultAppSidebar()
  {
    $this->sidebar = [
      'component' => config('display.defaultViews.sidebar.app.user'),
    ];
  }

  public function generateAppSidebar(array $sidebar = [])
  {
    $this->nav = [
      'component' => config('display.defaultViews.appNav.user'),
    ];

  }


}
