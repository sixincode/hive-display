<?php

namespace Sixincode\HiveDisplay\Components\Partials\Footers;

use Illuminate\View\Component;

class FooterApp extends Component
{
    public $source;
    public $component;
    public $identifiant;
    public $class;
    public $type;
    public array $texts;
    public array $content;
    public array $urls;
    public array $images;
    public array $properties;

    public function __construct(
      $source = 'footers',
      $component = '',
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
      $this->source = $source;
      $this->component = $component;
      if($this->component == null){
        $this->component = config('hive-display.defaultViews.footer.app.user');
      }
      $this->identifiant = $identifiant;
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
