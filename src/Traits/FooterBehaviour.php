<?php

namespace Sixincode\HiveDisplay\Traits;

trait FooterBehaviour
{
  public array $footer;

  public function mountFooterBehaviour()
  {
    $this->footer = [

     ];
  }

  public function resetToDefaultAppFooter()
  {
    $this->footer = [
      'component' => config('display.defaultViews.appFooter.user'),
    ];
   }


}
