<?php

namespace Sixincode\HiveDisplay\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveDisplay\Traits\RenderingViewTrait;
use Illuminate\Support\Str;

class PageTemplateElement extends Component
{
    use RenderingViewTrait;

    public $name;
    public $identification;
    public $source;
    public $component;
    public $class;
    public $padding;
    public $type;
    public array $details;
    public array $texts;
    public array $content;
    public array $buttons;
    public array $images;
    public array $properties;
    public array $meta;

    public function __construct(
      $name = null,
      $identification = null,
      $source = null,
      $component = null,
      $class = null,
      $type = null,
      $padding = false,
      $details = [],
      $texts = [],
      $content = [],
      $buttons = [],
      $images = [],
      $properties = [],
      $meta = [],
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
      $this->texts = array_merge_recursive($texts);
      $this->content = array_merge_recursive($content);
      $this->buttons = $buttons;
      $this->images = $images;
      $this->meta = $meta;
      $this->properties = $properties;

      $this->renderViewSettings();

    }


}
