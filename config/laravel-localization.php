<?php

declare(strict_types=1);

<<<<<<< HEAD

=======
>>>>>>> b55470f (.)
return [
    /*
     * |--------------------------------------------------------------------------
     * | Languages
     * |--------------------------------------------------------------------------
     * |
     * | This is the array for the languages.
     * |
     */
    'languages' => [
        'it' => [
            'name' => 'Italiano',
            'script' => 'Latn',
            'native' => 'Italiano',
            'regional' => 'it_IT',
        ],
        'en' => [
            'name' => 'English',
            'script' => 'Latn',
            'native' => 'English',
            'regional' => 'en_GB',
        ],
    ],
<<<<<<< HEAD
=======

>>>>>>> b55470f (.)
    /*
     * |--------------------------------------------------------------------------
     * | Language Detection
     * |--------------------------------------------------------------------------
     * |
     * | This is the configuration for the language detection.
     * |
     */
    'detect' => [
        'browser' => true,
        'session' => true,
        'cookie' => true,
    ],
<<<<<<< HEAD
=======

>>>>>>> b55470f (.)
    /*
     * |--------------------------------------------------------------------------
     * | Language Selection
     * |--------------------------------------------------------------------------
     * |
     * | This is the configuration for the language selection.
     * |
     */
    'selection' => [
        'default' => 'it',
        'fallback' => 'en',
    ],
<<<<<<< HEAD
=======

>>>>>>> b55470f (.)
    /*
     * |--------------------------------------------------------------------------
     * | URL Configuration
     * |--------------------------------------------------------------------------
     * |
     * | This is the configuration for the URL.
     * |
     */
    'url' => [
        'prefix' => true,
        'hide_default' => false,
    ],
<<<<<<< HEAD
=======

>>>>>>> b55470f (.)
    /*
     * |--------------------------------------------------------------------------
     * | Route Configuration
     * |--------------------------------------------------------------------------
     * |
     * | This is the configuration for the routes.
     * |
     */
    'route' => [
        'prefix' => '{locale}',
        'middleware' => [
            'web',
            'localize',
        ],
    ],
<<<<<<< HEAD
];
=======
];
>>>>>>> b55470f (.)
