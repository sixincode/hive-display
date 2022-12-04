<?php

namespace Sixincode\HiveDisplay\Components\Layouts;

use Sixincode\HiveDisplay\Traits\NavBehaviour;
use Sixincode\HiveDisplay\Traits\SidebarBehaviour;
use Sixincode\HiveDisplay\Traits\FooterBehaviour;
use Illuminate\View\Component;

class LayoutAuth extends Component
{
    use NavBehaviour;
    use SidebarBehaviour;
    use FooterBehaviour;

    public $component;
    public array $properties;
    public array $meta;

    public function __construct(
      $component = null,
      $properties = [],
      $meta = [],
    )
    {
     switch($component) {
      case('admin'):
        $this->component = config('hive-display.defaultViews.layout.auth.admin');
        break;
      default:
        $this->component = config('hive-display.defaultViews.layout.auth.user');
    }

      $this->properties = $properties;
      $this->meta = $meta;
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
