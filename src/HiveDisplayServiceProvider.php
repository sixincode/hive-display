<?php

namespace Sixincode\HiveDisplay;

use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;

use Sixincode\HiveDisplay\Components\Profiles\DefaultProfile;
use Sixincode\HiveDisplay\Components\Pages\DefaultPage;
use Sixincode\HiveDisplay\Components\Forms\DefaultForm;
use Sixincode\HiveDisplay\Commands\HiveDisplayCommand;
use Livewire\Livewire;
use Illuminate\Support\Facades\Blade;

class HiveDisplayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('hive-display')
            ->hasConfigFile(['hive-display','hive-display-layouts','hive-display-components','hive-menu'])
            ->hasViews()
            ->hasIcons()
            ->hasMigration('create_hive-display_table')
            ->hasCommand(HiveDisplayCommand::class);
    }

    public function packageBooted()
    {
      $this->bootHiveDisplayBladeAndLivewireComponents();
    }

    public function bootHiveDisplayBladeAndLivewireComponents()
    {
      $prefix = config('hive-display-components.prefix', 'hive-display');
      foreach (config('hive-display-components.blade', []) as $alias => $component) {
          $alias = $prefix ? "$prefix-$alias" : $alias;
          Blade::component($alias, $component);
        }
      foreach (config('hive-display-components.livewire', []) as $alias => $component) {
          $alias = $prefix ? "$prefix-$alias" : $alias;
          Livewire::component($alias, $component);
        }
     }
}
