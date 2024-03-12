<?php

namespace Sixincode\HiveDisplay\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveDisplay\Traits\RenderingViewTrait;
use Illuminate\Support\Str;

class PageTemplateElement extends Component
{
    use RenderingViewTrait;

    public $name;
    public $base;
    public $identification;
    public $source;
    public $component;
    public $class;
    public array $properties;
    public array $meta;

    public function __construct(
      $name = null,
      $base = null,
      $identification = null,
      $source = null,
      $component = null,
      $class = null,
      $properties = [],
      $meta = [],
    )
    {
      $this->name = $name;
      $this->base = $base;
      $this->identification = $identification;
      $this->source = $source;
      $this->component = $component;
      $this->class = $class;
      $this->meta = $meta;
      $this->properties = $properties;
      $this->cssFramework = config('hive-display.cssFrameworks.null');
      $this->renderViewSettings();

    }


}
