<?php

namespace Sixincode\HiveDisplay\Components\Layouts;

use Sixincode\HiveDisplay\Traits\NavBehaviour;
use Sixincode\HiveDisplay\Traits\SidebarBehaviour;
use Sixincode\HiveDisplay\Traits\FooterBehaviour;
use Illuminate\View\Component;

class LayoutApp extends Component
{
    use NavBehaviour;
    use SidebarBehaviour;
    use FooterBehaviour;

    public $component;
    public array $properties;
    public array $meta;

    public function __construct(
      $component = null,
      $sidebar = null,
      $footer = null,
      $navigation = null,
      $properties = [],
      $meta = [],
    )
    {
       $this->getComponentToDisplay($component);
       $this->mountSidebarBehaviour($sidebar);
       $this->mountNavigationBehaviour($navigation);
       $this->mountFooterBehaviour($footer);

       $this->properties = $properties;
       $this->meta = $meta;
    }

    public function render()
    {
        return view('hive-display::components.layouts.'.$this->component);
    }

    public function getComponentToDisplay($component)
    {
      switch($component)
      {
       case('admin'):
         $this->component = config('hive-display.defaultViews.layout.auth.admin');
         break;
       default:
         $this->component = config('hive-display.defaultViews.layout.auth.user');
       }
    }

    public function getSidebar()
    {
      switch($sidebar['component'])
      {
       case('admin'):
         $this->sidebar['component'] =  config('hive-display.defaultViews.sidebar.auth.admin') ;
         break;
       default:
         $this->component = config('hive-display.defaultViews.layout.auth.user');
       }
    }

    public function setDefault()
    {
        $this->resetToDefaultAppNav();
        $this->resetToDefaultAppSidebar();
        $this->resetToDefaultAppFooter();

        $this->properties = [
          'theme'   => 'default',
          'primary' => 'gray',
        ];
    }
}
