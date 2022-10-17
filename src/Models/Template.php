<?php

namespace Sixincode\HiveDisplay\Models;

use Sixincode\HiveAlpha\Models\HiveModel;
use Sixincode\HiveHelpers\Traits\IsActiveTrait;
use Sixincode\HiveHelpers\Traits\IsDefaultTrait;
use Sixincode\HiveHelpers\Traits\IsFeaturedTrait;
use Sixincode\HiveHelpers\Traits\IsPrivateTrait;
use Sixincode\HiveHelpers\Traits\sortOrderTrait;
use Sixincode\HiveHelpers\Traits\HasSlugTrait;
use Sixincode\HiveHelpers\Traits\HasOwnerTrait;
use Sixincode\HiveDisplay\Traits\HasButtonsTrait;
use Sixincode\HiveDisplay\Traits\HasContentsTrait;
use Sixincode\HiveDisplay\Traits\HasImagesTrait;
use Sixincode\HiveDisplay\Traits\HasTextsTrait;
use Sixincode\HiveHelpers\Traits\FieldsTrait;

class Template extends HiveModel
{
  use IsActiveTrait;
  use IsDefaultTrait;
  use IsFeaturedTrait;
  use IsPrivateTrait;
  use sortOrderTrait;
  use HasSlugTrait;
  use HasOwnerTrait;
  use HasButtonsTrait;
  use HasContentsTrait;
  use HasImagesTrait;
  use HasTextsTrait;
  use FieldsTrait;

  public function bootTemplate()
  {
    $this->translatable[] = 'title';
    $this->translatable[] = 'text';
    $this->translatable[] = 'description';
    $this->translatable[] = 'content';
    $this->translatable[] = 'buttons';

    $this->casts['title'] = 'array';
    $this->casts['text'] = 'array';
    $this->casts['description'] = 'array';
    $this->casts['content'] = 'array';
    $this->casts['buttons'] = 'array';
    $this->casts['images'] = 'array';

    $this->filterable[] = 'id';
    $this->filterable[] = 'title';
    $this->filterable[] = 'type';

    $this->orderable[] = 'id';
    $this->orderable[] = 'title';
    $this->orderable[] = 'type';

    $this->fillable[] = 'title';
    $this->fillable[] = 'description';
  }
  protected $appends = [
    'all_texts',
    'all_contents',
    'all_buttons',
    'all_images',
  ];

  protected $orderable = [
      // 'picture',
  ];

  protected $filterable = [
      // 'picture',
  ];

  protected $fillable = [
      // 'slug',
  ];

  protected $translatable = [
      'title',
      'text',
      'content',
      'description',
      'buttons',
  ];

  public static function getTableAttribute()
  {
    return config('hive-display.tables_names.templates');
  }

  public function displayAllTexts()
  {
    return $this->displayAllButtons();
  }

  public function getAllContentsAttribute()
  {
    return $this->displayAllContents();
  }

  public function getAllButtonsAttribute()
  {
      return $this->displayAllButtons();
  }


  public static function slugOriginElement()
  {
    parent:::slugOriginElement();
    return 'code';
  }

  public static function getSlugKeyName()
  {
    return 'code';
  }

}
