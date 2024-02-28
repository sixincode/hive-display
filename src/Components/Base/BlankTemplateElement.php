<?php

namespace Sixincode\HiveDisplay\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveDisplay\Traits\RenderingViewTrait;
use Illuminate\Support\Str;

class BlankTemplateElement extends Component
{
    use RenderingViewTrait;

    public $name;
    public $title;
    public $identification;
    public $source;
    public $component;
    public $class;
    public array $properties;

    public function __construct(
      $name = null,
      $title = null,
      $identification = null,
      $source = null,
      $component = null,
      $class = null,
      $properties = [],
    )
    {
      $this->name = $name;
      $this->properties = $properties;
      $title ? $this->title = $title : $this->title = $name;
      $this->identification = $identification;
      $this->source = $source;
      $this->component = $component;
      $this->class = $class;

      if(function_exists('constructing')) {
        $this->constructing();
      }
      $this->renderViewSettings();

    }


}
