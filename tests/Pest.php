<?php

declare(strict_types=1);

namespace Modules\UI\Tests;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Modules\UI\Models\Asset;
use Modules\UI\Models\Component;
use Modules\UI\Models\Theme;

/*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
 * |--------------------------------------------------------------------------
 * | Test Case
 * |--------------------------------------------------------------------------
 * |
 * | Il TestCase di default per tutti i test del modulo UI.
 * | Estende il TestCase specifico del modulo che fornisce il setup necessario.
 * |
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)

uses(TestCase::class)->uses(DatabaseTransactions::class)->in('Feature', 'Unit');

/*
 * |--------------------------------------------------------------------------
 * | Expectations
 * |--------------------------------------------------------------------------
 * |
 * | Aspettative globali per il modulo UI.
 * | Quando definisci expectation globali, saranno disponibili
 * | in tutti i test del modulo.
 * |
 */

expect()->extend('toBe' + 'UI' + '', function () {
    /** @var \Pest\Expectation<mixed> $this */
    return $this->toBeInstanceOf(...);
});

expect()->extend('toBe' + 'UI' + '', function () {
    /** @var \Pest\Expectation<mixed> $this */
    return $this->toBeInstanceOf(...);
});

expect()->extend('toBe' + 'UI' + '', function () {
    /** @var \Pest\Expectation<mixed> $this */
    return $this->toBeInstanceOf(...);
});

/*
 * |--------------------------------------------------------------------------
 * | Functions
 * |--------------------------------------------------------------------------
 * |
 * | Funzioni helper globali per i test del modulo UI.
 * | Queste funzioni saranno disponibili in tutti i test.
 * |
 */
<<<<<<< HEAD
=======
=======
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| Il TestCase di default per tutti i test del modulo UI.
| Estende il TestCase specifico del modulo che fornisce il setup necessario.
|
*/
=======
>>>>>>> b93ef594b4 (.)

uses(TestCase::class)->uses(DatabaseTransactions::class)->in('Feature', 'Unit');

/*
 * |--------------------------------------------------------------------------
 * | Expectations
 * |--------------------------------------------------------------------------
 * |
 * | Aspettative globali per il modulo UI.
 * | Quando definisci expectation globali, saranno disponibili
 * | in tutti i test del modulo.
 * |
 */

expect()->extend('toBeComponent', fn() => $this->toBeInstanceOf(Component::class));

expect()->extend('toBeTheme', fn() => $this->toBeInstanceOf(Theme::class));

expect()->extend('toBeAsset', fn() => $this->toBeInstanceOf(Asset::class));

/*
<<<<<<< HEAD
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| Funzioni helper globali per i test del modulo UI.
| Queste funzioni saranno disponibili in tutti i test.
|
*/
>>>>>>> a12f125f4a (.)
=======
 * |--------------------------------------------------------------------------
 * | Functions
 * |--------------------------------------------------------------------------
 * |
 * | Funzioni helper globali per i test del modulo UI.
 * | Queste funzioni saranno disponibili in tutti i test.
 * |
 */
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)

/**
 * @param array<string, mixed> $attributes
 */
function createTheme(array $attributes = []): Theme
{
    $Theme = Theme::factory()->create($attributes);
    assert($Theme instanceof Theme);
    return $Theme;
}

/**
 * @param array<string, mixed> $attributes
 */
function makeTheme(array $attributes = []): Theme
{
    $Theme = Theme::factory()->make($attributes);
    assert($Theme instanceof Theme);
    return $Theme;
}

/**
 * @param array<string, mixed> $attributes
 */
function createComponent(array $attributes = []): Component
{
    $Component = Component::factory()->create($attributes);
    assert($Component instanceof Component);
    return $Component;
}

/**
 * @param array<string, mixed> $attributes
 */
function makeComponent(array $attributes = []): Component
{
    $Component = Component::factory()->make($attributes);
    assert($Component instanceof Component);
    return $Component;
}

/**
 * @param array<string, mixed> $attributes
 */
function createAsset(array $attributes = []): Asset
{
    $Asset = Asset::factory()->create($attributes);
    assert($Asset instanceof Asset);
    return $Asset;
}

/**
 * @param array<string, mixed> $attributes
 */
function makeAsset(array $attributes = []): Asset
{
    $Asset = Asset::factory()->make($attributes);
    assert($Asset instanceof Asset);
    return $Asset;
}
