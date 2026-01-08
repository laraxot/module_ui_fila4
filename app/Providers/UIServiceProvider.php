<?php

declare(strict_types=1);

namespace Modules\UI\Providers;

<<<<<<< HEAD
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Modules\Xot\Providers\XotBaseServiceProvider;

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Modules\UI\Services\UIService;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Modules\Xot\Providers\XotBaseServiceProvider;

use function Safe\realpath;
<<<<<<< HEAD
=======
=======
use function Safe\realpath;
use Illuminate\Support\Facades\Blade;
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Modules\UI\Services\UIService;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Providers\XotBaseServiceProvider;

use function Safe\realpath;
>>>>>>> b93ef594b4 (.)
=======
use function Safe\realpath;
use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\AliasLoader;
use Modules\UI\Services\UIService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

>>>>>>> 6c0b3515 (.)
/**
 * Service Provider per il modulo UI.
 *
 * Nota: la registrazione dei Blade components modulari avviene tramite GetModulePathByGeneratorAction
 * per garantire la corretta risoluzione dei path secondo la struttura dei moduli.
 *
 * @phpstan-type ModuleConfig array{name: string, alias: string, description: string, keywords: array<int, string>, priority: int, providers: array<int, class-string>}
 */
class UIServiceProvider extends XotBaseServiceProvider
{
    /**
     * Nome del modulo.
     */
    public string $name = 'UI';

    /**
     * Directory del modulo.
     */
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    /**
     * Boot del service provider.
     *
     * Configura i componenti Blade e altre funzionalità del modulo UI.
     *
     * @return void
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
    public function boot(): void
    {
        parent::boot();

=======
    public function boot(): void
    {
        parent::boot();
        
>>>>>>> origin/develop
        // La registrazione dei Blade components modulari avviene tramite GetModulePathByGeneratorAction
        // per garantire la corretta risoluzione dei path secondo la struttura dei moduli
        // $componentViewPath = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
        // Blade::anonymousComponentPath($componentViewPath);
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)

    /**
     * Registra i servizi del provider.
     *
     * @return void
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
    
>>>>>>> 6c0b3515 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    

=======
=======
>>>>>>> origin/develop
    public function register(): void
    {
        parent::register();
        // AliasLoader e BladeIcons sono gestiti a livello di XotBaseServiceProvider
    }
    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    /**
     * Restituisce il percorso delle viste dei componenti UI.
     */
    public function getComponentViewPath(): string
    {
        return app(GetModulePathByGeneratorAction::class)->execute($this->name, 'component-view');
    }
}
