<?php

namespace Sixincode\HiveDisplay\Components\Base;

use Illuminate\View\Component;
use Illuminate\Support\Str;
use Sixincode\HiveDisplay\Traits\RenderingViewTrait;

class DropdownTemplateElement extends Component
{
    use RenderingViewTrait;

    public $name;
    public $identification;
    public $source;
    public $component;
    public $class;
    public $classContent;
    public $align;
    public $type;
    public $width;
    public $height;

    public function __construct(
      $name = null,
      $identification = null,
      $source = null,
      $component = null,
      $class = null,
      $classContent = null,
      $width = null,
      $height = null,
      $align = null
    )
    {
      $this->name = $name;
      $this->identification = $identification;
      $this->source = $source;
      $this->component = $component;
      $this->class = $class;
      $this->classContent = $classContent;
      $this->align = $align;
      $this->width = $width;
      $this->height = $height;

      $this->renderViewSettings();

    }


}
