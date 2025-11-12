<?php

declare(strict_types=1);

<<<<<<< HEAD
=======

>>>>>>> c6fab1a (.)
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
>>>>>>> c6fab1a (.)
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
>>>>>>> c6fab1a (.)
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
>>>>>>> c6fab1a (.)
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
>>>>>>> c6fab1a (.)
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
>>>>>>> c6fab1a (.)
