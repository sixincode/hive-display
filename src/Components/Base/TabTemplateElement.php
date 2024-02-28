<?php

namespace Sixincode\HiveDisplay\Components\Base;

use Illuminate\View\Component;
use Sixincode\HiveDisplay\Traits\RenderingViewTrait;
use Illuminate\Support\Str;

class TabTemplateElement extends Component
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
    public $naming;
    public array $tabs;
    public array $icons;
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
      $icons = [],
      $content = [],
      $urls = [],
      $images = [],
      $properties = [],
      $naming = 'activeOption',
      $active = null,
      $padding = false,
      $tabs = null,
    )
    {
      $this->name = $name;
      $this->naming = $naming;
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
      $this->icons = $icons;

      $this->renderViewSettings();
      $this->makeTabs($tabs, $icons);

      if(method_exists(self::class,'postConstruct')){
        $this->postConstruct();
      }
     }

     private function makeTabs($tabs, $icons){
      foreach ($tabs as $key => $tab) {
        $this->tabs[Str::snake(strtolower($tab))] = ['name' => $tab, 'icon' => $icons[$key] ?? ''];
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
