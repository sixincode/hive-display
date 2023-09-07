<?php

namespace Sixincode\HiveDisplay\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveDisplay\Traits\RenderingViewTrait;
use Illuminate\Support\Str;

class ListTemplateElement extends Component
{
    use RenderingViewTrait;

    public $name;
    public $title;
    public $identification;
    public $source;
    public $component;
    public $class;
    public $padding;
    public $type;
    public array $properties;

    public function __construct(
      $name = null,
      $title = null,
      $identification = null,
      $source = null,
      $component = null,
      $class = null,
      $type = null,
      $padding = true,
      $properties = [],
    )
    {
      $this->name = $name;
      $this->title = $title;
      $this->identification = $identification;
      $this->source = $source;
      $this->padding = $padding;
      $this->component = $component;
      $this->class = $class;
      $this->type = $type;
      $this->properties = $properties;

      $this->renderViewSettings();

    }


}
