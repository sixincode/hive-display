<?php

namespace Sixincode\HiveDisplay\Components\Links;

use Illuminate\View\Component;

class DefaultLink extends Component
{
    public $component;
    public $color;
    public $title;
    public $url;
    public $icon;
    public $source;
    public $identifiant;
    public $class;
    public $type;
    public array $texts;
    public array $content;
    public array $urls;
    public array $images;
    public array $properties;

    public function __construct(
      $component = null,
      $color = '',
      $title = '',
      $url = '',
      $icon = '',
      $source = 'links',
      $identifiant = null,
      $class = null,
      $type = null,
      $texts = [],
      $content = [],
      $urls = [],
      $images = [],
      $properties = [],
    )
    {
      $this->color = $color;
      $this->source = $source;
      $this->component = $component;
      if($this->component == null ){
        $this->component = config('hive-display.defaultViews.appSidebarLink.user');
      }
      $this->identifiant = $identifiant;
      $this->title = $title;
      $this->url = $url;
      $this->icon = $icon;
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
      return view('hive-display::components.partials.'.$this->source.'.'.$this->component);
    }
}
