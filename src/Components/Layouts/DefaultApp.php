<?php

namespace Sixincode\HiveDisplay\Components\Layouts;

use Sixincode\HiveDisplay\Traits\NavBehaviour;
use Sixincode\HiveDisplay\Traits\SidebarBehaviour;
use Sixincode\HiveDisplay\Traits\FooterBehaviour;
use Illuminate\View\Component;

class DefaultApp extends Component
{
    use NavBehaviour;
    use SidebarBehaviour;
    use FooterBehaviour;

    public $component;
    public array $nav;
    public array $sidebar;
    public array $footer;
    public array $properties;
    public array $meta;
    public bool $auth = true;

    public function __construct(
      $component = null,
      $nav = [],
      $sidebar = [
        'component' => ''
      ],
      $footer = [],
      $properties = [],
      $meta = [],
      $auth = true,
    )
    {
      $this->component = $component;
      
      if($this->component == null){
         $this->component = config('hive-display.defaultViews.appLayout.user');
      }
      if($sidebar['component'] == null){
         $this->sidebar['component'] = config('hive-display.defaultViews.appLayout.user');
      }
      // $this->component = config('hive-display.defaultViews.appLayout.user');
      $this->nav = $nav;
      $this->sidebar = $sidebar;
      $this->footer = $footer;
      $this->properties = $properties;
      $this->meta = $meta;
      $this->auth = $auth;
    }

    public function render()
    {
        return view('hive-display::components.layouts.'.$this->component);
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
