<?php

namespace Sixincode\HiveDisplay;

use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use Sixincode\HiveDisplay\Components\Layouts\Layout;
use Sixincode\HiveDisplay\Components\Layouts\LayoutAuth;
use Sixincode\HiveDisplay\Components\Layouts\LayoutApp;
use Sixincode\HiveDisplay\Components\Partials\Footers\Footer;
use Sixincode\HiveDisplay\Components\Partials\Footers\FooterApp;
use Sixincode\HiveDisplay\Components\Partials\Navigation\Nav;
use Sixincode\HiveDisplay\Components\Partials\Navigation\NavApp;
use Sixincode\HiveDisplay\Components\Partials\Sidebars\Sidebar;
use Sixincode\HiveDisplay\Components\Partials\Sidebars\SidebarApp;
use Sixincode\HiveDisplay\Components\Banners\Banner;
use Sixincode\HiveDisplay\Components\Cards\Card;
use Sixincode\HiveDisplay\Components\Lists\Listing;
use Sixincode\HiveDisplay\Components\Profiles\DefaultProfile;
use Sixincode\HiveDisplay\Components\Sections\Section;
use Sixincode\HiveDisplay\Components\Pages\DefaultPage;
use Sixincode\HiveDisplay\Components\Forms\DefaultForm;
use Sixincode\HiveDisplay\Components\Links\DefaultLink;
use Sixincode\HiveDisplay\Commands\HiveDisplayCommand;


class HiveDisplayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('hive-display')
            ->hasConfigFile(['hive-display','hive-menu'])
            ->hasViews()
            ->hasMigration('create_hive-display_table')
            ->hasCommand(HiveDisplayCommand::class)
            ->hasViewComponents(
                'hive-display',
                Layout::class,
                LayoutApp::class,
                LayoutAuth::class,
                Footer::class,
                FooterApp::class,
                Nav::class,
                NavApp::class,
                Sidebar::class,
                SidebarApp::class,

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
