<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Support\Facades\View;
use Tests\TestCase;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\View;
use Tests\TestCase;
=======
namespace Modules\UI\Tests\Feature\CategoryTabsComponentTest;

namespace Modules\UI\Tests\Feature;

use Illuminate\Support\Facades\View;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Support\Facades\View;
use Tests\TestCase;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Facades\View;
use Tests\TestCase;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

uses(TestCase::class);

beforeEach(function () {
    if (function_exists('config')) {
        config(['app.locale' => 'en']);
    }
});

test('category tabs component renders without errors', function () {
    $componentData = [
        'base_url' => '/markets',
        'show_counts' => true,
        'mobile_scrollable' => true,
        'active_category' => 'all',
    ];

    $view = View::make('pub_theme::components.blocks.navigation.category-tabs', $componentData);
<<<<<<< HEAD

    expect($view)->not()->toBeNull();

=======
<<<<<<< HEAD

    expect($view)->not()->toBeNull();

=======
    
    expect($view)->not()->toBeNull();
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    $html = $view->render();
    expect($html)->toContain('/markets');
    expect($html)->toContain('All Markets');
});

test('category tabs shows all expected categories', function () {
    $view = View::make('pub_theme::components.blocks.navigation.category-tabs', [
        'base_url' => '/markets',
        'show_counts' => true,
    ]);
<<<<<<< HEAD

    $html = $view->render();

=======
<<<<<<< HEAD

    $html = $view->render();

=======
    
    $html = $view->render();
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    // Check for all category names
    expect($html)->toContain('All Markets');
    expect($html)->toContain('Politics');
    expect($html)->toContain('Sports');
    expect($html)->toContain('Economics');
    expect($html)->toContain('Technology');
    expect($html)->toContain('Entertainment');
    expect($html)->toContain('Crypto');
});

test('category tabs shows counts when enabled', function () {
    $view = View::make('pub_theme::components.blocks.navigation.category-tabs', [
        'show_counts' => true,
    ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

    $html = $view->render();

    // Should contain count indicators
    expect($html)->toContain('250'); // All markets count
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
    expect($html)->toContain('45'); // Politics count
    expect($html)->toContain('67'); // Sports count
    expect($html)->toContain('34'); // Economics count
    expect($html)->toContain('28'); // Technology count
    expect($html)->toContain('23'); // Entertainment count
    expect($html)->toContain('19'); // Crypto count
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
    
    $html = $view->render();
    
    // Should contain count indicators
    expect($html)->toContain('250'); // All markets count
>>>>>>> origin/develop
    expect($html)->toContain('45');  // Politics count
    expect($html)->toContain('67');  // Sports count
    expect($html)->toContain('34');  // Economics count
    expect($html)->toContain('28');  // Technology count
<<<<<<< HEAD
    expect($html)->toContain('23');  // Entertainment count
    expect($html)->toContain('19');  // Crypto count
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    expect($html)->toContain('23');  // Entertainment count  
    expect($html)->toContain('19');  // Crypto count
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
});

test('category tabs hides counts when disabled', function () {
    $view = View::make('pub_theme::components.blocks.navigation.category-tabs', [
        'show_counts' => false,
    ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

    $html = $view->render();

    // Should not contain specific count numbers in count badges
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
    expect($html)
        ->not()
        ->toContain('<span class="ml-1 px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded-full">45</span>');
    expect($html)
        ->not()
        ->toContain('<span class="ml-1 px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded-full">67</span>');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    expect($html)->not()->toContain('<span class="ml-1 px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded-full">45</span>');
    expect($html)->not()->toContain('<span class="ml-1 px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded-full">67</span>');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    
    $html = $view->render();
    
    // Should not contain specific count numbers in count badges
    expect($html)->not()->toContain('<span class="ml-1 px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded-full">45</span>');
    expect($html)->not()->toContain('<span class="ml-1 px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded-full">67</span>');
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
});

test('category tabs has mobile scrollable styling', function () {
    $view = View::make('pub_theme::components.blocks.navigation.category-tabs', [
        'mobile_scrollable' => true,
    ]);
<<<<<<< HEAD

    $html = $view->render();

=======
<<<<<<< HEAD

    $html = $view->render();

=======
    
    $html = $view->render();
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    expect($html)->toContain('overflow-x-auto');
    expect($html)->toContain('scrollbar-hide');
});

test('category tabs has proper responsive classes', function () {
    $view = View::make('pub_theme::components.blocks.navigation.category-tabs');
<<<<<<< HEAD

    $html = $view->render();

=======
<<<<<<< HEAD

    $html = $view->render();

=======
    
    $html = $view->render();
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    expect($html)->toContain('flex-nowrap md:flex-wrap');
    expect($html)->toContain('justify-start md:justify-center');
});

test('category tabs generates correct urls', function () {
    $view = View::make('pub_theme::components.blocks.navigation.category-tabs', [
        'base_url' => '/markets',
    ]);
<<<<<<< HEAD

    $html = $view->render();

=======
<<<<<<< HEAD

    $html = $view->render();

=======
    
    $html = $view->render();
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    expect($html)->toContain('href="/markets"'); // All markets
    expect($html)->toContain('href="/markets?category=politics"');
    expect($html)->toContain('href="/markets?category=sports"');
    expect($html)->toContain('href="/markets?category=economics"');
    expect($html)->toContain('href="/markets?category=technology"');
    expect($html)->toContain('href="/markets?category=entertainment"');
    expect($html)->toContain('href="/markets?category=crypto"');
});

test('category tabs highlights active category', function () {
    $view = View::make('pub_theme::components.blocks.navigation.category-tabs', [
        'active_category' => 'politics',
    ]);
<<<<<<< HEAD

    $html = $view->render();

=======
<<<<<<< HEAD

    $html = $view->render();

=======
    
    $html = $view->render();
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    // Should contain active state styling for politics
    expect($html)->toContain('bg-blue-600 text-white');
});

test('category tabs has proper dark mode classes', function () {
    $view = View::make('pub_theme::components.blocks.navigation.category-tabs');
<<<<<<< HEAD

    $html = $view->render();

=======
<<<<<<< HEAD

    $html = $view->render();

=======
    
    $html = $view->render();
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    expect($html)->toContain('dark:bg-slate-800');
    expect($html)->toContain('dark:border-slate-700');
    expect($html)->toContain('dark:text-slate-300');
    expect($html)->toContain('dark:hover:text-white');
});

test('category tabs has sticky positioning', function () {
    $view = View::make('pub_theme::components.blocks.navigation.category-tabs');
<<<<<<< HEAD

    $html = $view->render();

=======
<<<<<<< HEAD

    $html = $view->render();

=======
    
    $html = $view->render();
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    expect($html)->toContain('sticky top-0');
    expect($html)->toContain('z-40');
});

test('category tabs has proper category icons', function () {
    $view = View::make('pub_theme::components.blocks.navigation.category-tabs');
<<<<<<< HEAD

    $html = $view->render();

=======
<<<<<<< HEAD

    $html = $view->render();

=======
    
    $html = $view->render();
    
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
    // Check for emoji icons used in categories
    expect($html)->toContain('🗳️'); // Politics
    expect($html)->toContain('⚽'); // Sports
    expect($html)->toContain('📈'); // Economics
    expect($html)->toContain('💻'); // Technology
    expect($html)->toContain('🎬'); // Entertainment
<<<<<<< HEAD
    expect($html)->toContain('₿'); // Crypto
});
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    expect($html)->toContain('₿'); // Crypto
=======
    expect($html)->toContain('₿');  // Crypto
>>>>>>> a12f125f4a (.)
=======
    expect($html)->toContain('₿'); // Crypto
>>>>>>> b93ef594b4 (.)
});
=======
    expect($html)->toContain('₿');  // Crypto
});
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
