<?php

namespace Sixincode\HiveDisplay\Components\Base;

use Illuminate\View\Component;
use Illuminate\Support\Str;
use Sixincode\HiveDisplay\Traits\RenderingViewTrait;

class SlideOverTemplateElement extends Component
{
    use RenderingViewTrait;

    public $name;
    public $title;
    public $description;
    public $identification;
    public $source;
    public $component;
    public $class;
    public $padding;
    public $type;
    public $header;
    public array $details;
    public array $texts;
    public array $content;
    public array $buttons;
    public array $images;
    public array $properties;

    public function __construct(
      $name = null,
      $title = null,
      $description = null,
      $identification = null,
      $source = null,
      $component = null,
      $class = null,
      $type = null,
      $header = true,
      $padding = false,
      $details = [],
      $texts = [],
      $content = [],
      $buttons = [],
      $images = [],
      $properties = [],
    )
    {
      $this->name = $name;
      $this->title = $title;
      $this->description = $description;
      $this->identification = $identification;
      $this->source = $source;
      $this->padding = $padding;
      $this->component = $component;
      $this->class = $class;
      $this->type = $type;
      $this->header = $header;
      $this->details = array_merge_recursive($details);
      $this->texts = array_merge_recursive($texts);
      $this->content = array_merge_recursive($content);
      $this->buttons[] = $buttons;
      $this->images[] = $images;
      $this->properties = $properties;

      if(! $this->identification){
        $this->identification = Str::slug($this->name) ?? rand(1,999);
        ;
      }

      $this->renderViewSettings();

    }


}
