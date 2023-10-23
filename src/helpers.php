<?php
function check_getLayoutApp()
{
  if(function_exists('getLayoutApp')) {
      return getLayoutApp();
  }else{
      return config('hive-display-layouts.app.default');
  }
}
