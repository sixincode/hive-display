<?php

namespace Sixincode\HiveDisplay\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveDisplay\Traits\RenderingViewTrait;
use Illuminate\Support\Str;
use Sixincode\HiveDisplay\Traits\NavBehaviour;
use Sixincode\HiveDisplay\Traits\SidebarBehaviour;
use Sixincode\HiveDisplay\Traits\FooterBehaviour;

class LayoutTemplateElement extends Component
{
    use RenderingViewTrait;
    use NavBehaviour;
    use SidebarBehaviour;
    use FooterBehaviour;

    public $name;
    public $identification;
    public $source;
    public $component;
    public $class;
    public $padding;
    public $type;
    public $baseLayout;
    public array $meta;
    public array $details;
    public array $texts;
    public array $content;
    public array $buttons;
    public array $images;
    public array $properties;

    public function __construct(
      $name = null,
      $identification = null,
      $source = null,
      $component = null,
      $class = null,
      $type = null,
      $baseLayout = null,
      $padding = false,
      $details = [],
      $texts = [],
      $content = [],
      $buttons = [],
      $images = [],
      $properties = [],
      $meta = [],
      $sidebar = [],
      $footer = [],
      $navigation = [],
    )
    {
      $this->name = $name;
      $this->identification = $identification;
      $this->source = $source;
      $this->padding = $padding;
      $this->component = $component;
      $this->class = $class;
      $this->type = $type;
      $this->details = array_merge_recursive($details);
      // $this->details = Arr::collapse($details);

      $this->texts = array_merge_recursive($texts);
      $this->content = array_merge_recursive($content);
      $this->buttons[] = $buttons;
      $this->images[] = $images;
      $this->properties = $properties;
      $this->meta = $meta;
      $this->baseLayout = $baseLayout;
      $this->mountSidebarBehaviour($sidebar);
      $this->mountNavigationBehaviour($navigation);
      $this->mountFooterBehaviour($footer);
      $this->renderViewSettings();
    }

    public function setDefaultBase()
    {
      if (function_exists('base_layouts')) {
        return $this->base = base_layouts();
      }else{
        return $this->base = $this->getBlankBase();
      }
    }


}
