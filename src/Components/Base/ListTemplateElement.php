<?php

namespace Sixincode\HiveDisplay\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveDisplay\Traits\RenderingViewTrait;
use Illuminate\Support\Str;

class ListTemplateElement extends Component
{
    use RenderingViewTrait;

    public $name;
    public $source;
    public $component;
    public $identification;
    public $class;
    public $padding;
    public $type;
    public $active;
    public array $tabs;
    public array $content;
    public array $urls;
    public array $images;
    public array $properties;

    public function __construct(
      $name = null,
      $source = null,
      $component = null,
      $identification = null,
      $class = null,
      $type = null,
      $texts = [],
      $content = [],
      $urls = [],
      $images = [],
      $properties = [],
      $active = 'activeOption',
      $padding = false,
      $tabs = [],
    )
    {
      $this->name = $name;
      $this->source = $source;
      $this->component = $component;
      $this->identification = $identification;
      $this->class = $class;
      $this->type = $type;
      $this->texts = $texts;
      $this->content = $content;
      $this->urls = $urls;
      $this->images = $images;
      $this->properties = $properties;
      $this->padding = $padding;
      $this->active = $active;

      $this->renderViewSettings();
      $this->makeTabs($tabs);

      if(method_exists(self::class,'postConstruct')){
        $this->postConstruct();
      }
     }

     public function makeTabs($tabs){
      foreach ($tabs as $key => $tab) {
        $this->tabs[Str::snake(strtolower($tab))] = $tab;
      }

      if(! $this->active){
        $this->active = array_key_first($this->tabs);
      }
     }

     public function setDefaultFramework()
    {
      return $this->cssFramework = config('hive-form.cssFrameworks.tailwind');
    }

}
