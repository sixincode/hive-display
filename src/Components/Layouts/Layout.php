<?php

namespace Sixincode\HiveDisplay\Components\Layouts;

use Sixincode\HiveDisplay\Traits\NavBehaviour;
use Sixincode\HiveDisplay\Traits\SidebarBehaviour;
use Sixincode\HiveDisplay\Traits\FooterBehaviour;
use Illuminate\View\Component;

class Layout extends Component
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
         $this->component = config('hive-display.defaultViews.layout.app.admin');
         break;
       default:
         $this->component = config('hive-display.defaultViews.layout.app.user');
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
