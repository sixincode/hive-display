<?php

namespace Sixincode\HiveDisplay\Components\Layouts;

use Illuminate\View\Component;

class DefaultApp extends Component
{
    public $component;
    public array $nav;
    public array $sidebar;
    public array $footer;
    public array $properties;
    public array $meta;
    public bool $auth = true;

    public function __construct(
      $component = '',
      $nav = [],
      $sidebar = [],
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
        $this->nav = [
          'component' => config('display.defaultViews.appNav.user'),
        ];
        $this->sidebar = [
          'component' => config('display.defaultViews.appSidebar.user'),
        ];
        $this->footer = [
          'component' => config('display.defaultViews.appFooter.user'),
        ];
        $this->properties = [
          'theme'   => 'default',
          'primary' => 'gray',
        ];
    }
}
