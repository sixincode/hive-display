<?php

namespace Sixincode\HiveDisplay;

use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use Sixincode\HiveDisplay\Commands\HiveDisplayCommand;
use Sixincode\HiveDisplay\Components\Layouts\DefaultApp;
use Sixincode\HiveDisplay\Components\Partials\Footers\DefaultFooter;
use Sixincode\HiveDisplay\Components\Partials\Navigation\DefaultNav;
use Sixincode\HiveDisplay\Components\Partials\Sidebars\DefaultSidebar;
use Sixincode\HiveDisplay\Components\Banners\Banner;
use Sixincode\HiveDisplay\Components\Cards\Card;
use Sixincode\HiveDisplay\Components\Lists\Listing;
use Sixincode\HiveDisplay\Components\Profiles\DefaultProfile;
use Sixincode\HiveDisplay\Components\Sections\Section;
use Sixincode\HiveDisplay\Components\Pages\DefaultPage;
use Sixincode\HiveDisplay\Components\Forms\DefaultForm;
use Sixincode\HiveDisplay\Components\Links\DefaultLink;


class HiveDisplayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/sixincode/hive-template
         */
        $package
            ->name('hive-display')
            ->hasConfigFile(['hive-display','hive-menu'])
            ->hasViews()
            ->hasMigration('create_hive-display_table')
            ->hasCommand(HiveDisplayCommand::class)
            ->hasViewComponents(
                'hive-display',
                DefaultApp::class,
                DefaultFooter::class,
                DefaultNav::class,
                DefaultSidebar::class,
                Banner::class,
                Card::class,
                DefaultApp::class,
                Listing::class,
                DefaultLink::class,
                DefaultProfile::class,
                Section::class,
                DefaultPage::class,
                DefaultForm::class,
              );
    }
}
