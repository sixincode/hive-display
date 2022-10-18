<?php

namespace Sixincode\HiveDisplay;

use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use Sixincode\HiveDisplay\Commands\HiveDisplayCommand;
use Sixincode\HiveDisplay\Components\Layouts\DefaultApp;
use Sixincode\HiveDisplay\Components\Partials\Footers\DefaultFooter;
use Sixincode\HiveDisplay\Components\Partials\Navigation\DefaultNav;
use Sixincode\HiveDisplay\Components\Partials\Sidebars\DefaultSidebar;
use Sixincode\HiveDisplay\Components\Banners\DefaultBanner;
use Sixincode\HiveDisplay\Components\Cards\DefaultCard;
use Sixincode\HiveDisplay\Components\Lists\DefaultList;
use Sixincode\HiveDisplay\Components\Profiles\DefaultProfile;
use Sixincode\HiveDisplay\Components\Sections\DefaultSection;
use Sixincode\HiveDisplay\Components\Pages\DefaultPage;
use Sixincode\HiveDisplay\Components\Forms\DefaultForm;


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
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_hive-display_table')
            ->hasCommand(HiveDisplayCommand::class)
            ->hasViewComponents(
                'hive-display',
                DefaultApp::class,
                DefaultFooter::class,
                DefaultNav::class,
                DefaultSidebar::class,
                DefaultBanner::class,
                DefaultCard::class,
                DefaultApp::class,
                DefaultList::class,
                DefaultProfile::class,
                DefaultSection::class,
                DefaultPage::class,
                DefaultForm::class,
              );
    }
}
