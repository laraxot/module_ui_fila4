<?php

declare(strict_types=1);

<<<<<<< HEAD

=======
>>>>>>> 930be57 (.)
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

>>>>>>> 930be57 (.)
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

>>>>>>> 930be57 (.)
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

>>>>>>> 930be57 (.)
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

>>>>>>> 930be57 (.)
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
>>>>>>> 930be57 (.)
