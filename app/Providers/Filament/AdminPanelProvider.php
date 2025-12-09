<?php

declare(strict_types=1);

namespace Modules\UI\Providers\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
use Override;
use Filament\Panel;
use Filament\SpatieLaravelTranslatablePlugin;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

<<<<<<< HEAD
=======
use Filament\Panel;
use Filament\Support\Assets\Js;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Filament\SpatieLaravelTranslatablePlugin;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
//use LaraZeus\Bolt\BoltPlugin;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'UI';

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
    #[Override]
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
<<<<<<< HEAD
=======
    public function panel(Panel $panel): Panel
    {
        $panel=parent::panel($panel);
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
        // FilamentAsset::register(
        //     [
        //         Css::make('filament-navigation-styles', __DIR__.'/../../resources/dist/plugin.css'),
        //         Js::make('filament-navigation-scripts', __DIR__.'/../../resources/dist/plugin.js'),
        //     ],
        //     'filament-navigation'
        // );
        /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
         * $spatieLaravelTranslatablePlugin = SpatieLaravelTranslatablePlugin::make()
         * ->defaultLocales(['it', 'en']);
         *
         * $boltPlugin = BoltPlugin::make();
         *
         * $plugins = [
         * $spatieLaravelTranslatablePlugin,
         * $boltPlugin
         * ];
         *
         * $panel->plugins($plugins);
         */
<<<<<<< HEAD
=======
        $spatieLaravelTranslatablePlugin = SpatieLaravelTranslatablePlugin::make()
            ->defaultLocales(['it', 'en']);

        $boltPlugin = BoltPlugin::make();

        $plugins = [
            $spatieLaravelTranslatablePlugin,
            $boltPlugin
        ];
        
        $panel->plugins($plugins);
        */
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
        return $panel;
    }
}
