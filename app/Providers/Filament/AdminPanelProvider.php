<?php

declare(strict_types=1);

namespace Modules\UI\Providers\Filament;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Override;
>>>>>>> 6c0b3515 (.)
use Filament\Panel;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

<<<<<<< HEAD
// use LaraZeus\Bolt\BoltPlugin;
=======
<<<<<<< HEAD
=======
=======
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Filament\Panel;
use Filament\SpatieLaravelTranslatablePlugin;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
use Filament\Panel;
use Filament\Support\Assets\Js;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Filament\SpatieLaravelTranslatablePlugin;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
//use LaraZeus\Bolt\BoltPlugin;
>>>>>>> 6c0b3515 (.)

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'UI';

<<<<<<< HEAD
    #[\Override]
    public function panel(Panel $panel): Panel
    {
        return parent::panel($panel);

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    #[Override]
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
<<<<<<< HEAD
=======
=======
    public function panel(Panel $panel): Panel
    {
        $panel=parent::panel($panel);
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
>>>>>>> b93ef594b4 (.)
=======
    public function panel(Panel $panel): Panel
    {
        $panel=parent::panel($panel);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
        // FilamentAsset::register(
        //     [
        //         Css::make('filament-navigation-styles', __DIR__.'/../../resources/dist/plugin.css'),
        //         Js::make('filament-navigation-scripts', __DIR__.'/../../resources/dist/plugin.js'),
        //     ],
        //     'filament-navigation'
        // );
        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        $spatieLaravelTranslatablePlugin = SpatieLaravelTranslatablePlugin::make()
            ->defaultLocales(['it', 'en']);

        $boltPlugin = BoltPlugin::make();

        $plugins = [
            $spatieLaravelTranslatablePlugin,
            $boltPlugin
        ];
        
        $panel->plugins($plugins);
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        return $panel;
>>>>>>> 6c0b3515 (.)
    }
}
