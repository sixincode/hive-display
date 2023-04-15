<?php

namespace Sixincode\HiveDisplay\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveDisplay\Traits\RenderingViewTrait;
use Illuminate\Support\Str;

class CardTemplateElement extends Component
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

    public function __construct(
      $name = null,
      $identification = null,
      $source = null,
      $component = null,
      $class = null,
      $type = null,
      $padding = true,
      $details = [],
      $texts = [],
      $content = [],
      $buttons = [],
      $images = [],
      $properties = [],
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

      $this->renderViewSettings();

    }


}
