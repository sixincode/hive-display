<?php

namespace Sixincode\HiveDisplay\Components;

use Illuminate\View\Component;
use Illuminate\Support\Arr;

class TemplateElement extends Component
{
    public $source;
    public $component;
    public $identifiant;
    public $class;
    public $type;
    public array $details;
    public array $texts;
    public array $content;
    public array $buttons;
    public array $images;
    public array $properties;

    public function __construct(
      $source = null,
      $component = null,
      $identifiant = null,
      $class = null,
      $type = null,
      $details = [],
      $texts = [],
      $content = [],
      $buttons = [],
      $images = [],
      $properties = [],
    )
    {
      $this->source = $source;
      $this->component = $component;
      $this->identifiant = $identifiant;
      $this->class = $class;
      $this->type = $type;
      $this->details = array_merge_recursive($details);
      // $this->details = Arr::collapse($details);

      $this->texts = array_merge_recursive($texts);
      $this->content = array_merge_recursive($content);
      $this->buttons[] = $buttons;
      $this->images[] = $images;
      $this->properties = $properties;

      if(! $this->source){
        $this->setDefaultSource()
        ?? $this->setBlankSource()
        ;
      }
      if(! $this->component){
        $this->setDefaultComponent()
        ?? $this->setBlankComponent()
        ;
      }
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
      return view('hive-display::components.'.$this->source.'.'.$this->component);
    }

    public function setBlankSource()
    {
      $this->source = config('hive-display.defaultViews.defaultSource');
    }

    public function setBlankComponent()
    {
      $this->component = config('hive-display.defaultViews.defaultComponent');
    }
}
