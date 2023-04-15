<?php

namespace Sixincode\HiveDisplay\Components;

use Illuminate\View\Component;

class Testing extends Component
{
    public $source;
    public $model;
    public $identification;
    public $class;
    public $type;
    public array $texts;
    public array $content;
    public array $urls;
    public array $images;
    public array $properties;

    public function __construct(
      $source = 'sections',
      $model = 'defaultSection',
      $identification = null,
      $class = null,
      $type = null,
      $texts = [],
      $content = [],
      $urls = [],
      $images = [],
      $properties = [],
    )
    {
      $this->source = $source;
      $this->model = $model;
      $this->identification = $identification;
      $this->class = $class;
      $this->type = $type;
      $this->texts = $texts;
      $this->content = $content;
      $this->urls = $urls;
      $this->images = $images;
      $this->properties = $properties;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('hive-display::components.sections.'.$source.'.'.$model);
    }
}
