<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
declare(strict_types=1);


return [
    /*
     * |--------------------------------------------------------------------------
     * | Languages
     * |--------------------------------------------------------------------------
     * |
     * | This is the array for the languages
     * |
     */
<<<<<<< HEAD
=======
return [
    /*
    |--------------------------------------------------------------------------
    | Languages
    |--------------------------------------------------------------------------
    |
    | This is the array for the languages
    |
    */
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    'languages' => [
        'it' => [
            'name' => 'Italiano',
            'script' => 'Latn',
            'native' => 'Italiano',
<<<<<<< HEAD
<<<<<<< HEAD
            'regional' => 'it_IT',
=======
            'regional' => 'it_IT'
>>>>>>> 727968c (.)
=======
            'regional' => 'it_IT',
>>>>>>> ef3c5fa (.)
        ],
        'en' => [
            'name' => 'English',
            'script' => 'Latn',
            'native' => 'English',
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
            'regional' => 'en_GB',
        ],
    ],
    /*
     * |--------------------------------------------------------------------------
     * | Language Detection
     * |--------------------------------------------------------------------------
     * |
     * | This is the configuration for the language detection
     * |
     */
<<<<<<< HEAD
=======
            'regional' => 'en_GB'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Language Detection
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the language detection
    |
    */
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    'detectBrowserLanguage' => true,
    'detectBrowserLanguageFromAcceptLanguage' => true,
    'detectBrowserLanguageFromAcceptLanguageHeader' => true,
    'detectBrowserLanguageFromSession' => true,
    'detectBrowserLanguageFromCookie' => true,
    'detectBrowserLanguageFromQueryString' => true,
    'detectBrowserLanguageFromRoute' => true,
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
    /*
     * |--------------------------------------------------------------------------
     * | Language Selection
     * |--------------------------------------------------------------------------
     * |
     * | This is the configuration for the language selection
     * |
     */
<<<<<<< HEAD
=======

    /*
    |--------------------------------------------------------------------------
    | Language Selection
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the language selection
    |
    */
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    'hideDefaultLocaleInURL' => false,
    'useAcceptLanguageHeader' => true,
    'useSessionLocale' => true,
    'useCookieLocale' => true,
    'useQueryStringLocale' => true,
    'useRouteLocale' => true,
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
    /*
     * |--------------------------------------------------------------------------
     * | Language Redirect
     * |--------------------------------------------------------------------------
     * |
     * | This is the configuration for the language redirect
     * |
     */
<<<<<<< HEAD
=======

    /*
    |--------------------------------------------------------------------------
    | Language Redirect
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the language redirect
    |
    */
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    'redirectToDefaultLocale' => true,
    'redirectToDefaultLocaleIfNotSupported' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocales' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocalesAndNotInAcceptLanguage' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocalesAndNotInAcceptLanguageHeader' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocalesAndNotInSession' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocalesAndNotInCookie' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocalesAndNotInQueryString' => true,
    'redirectToDefaultLocaleIfNotInSupportedLocalesAndNotInRoute' => true,
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
    /*
     * |--------------------------------------------------------------------------
     * | Language Routes
     * |--------------------------------------------------------------------------
     * |
     * | This is the configuration for the language routes
     * |
     */
<<<<<<< HEAD
=======

    /*
    |--------------------------------------------------------------------------
    | Language Routes
    |--------------------------------------------------------------------------
    |
    | This is the configuration for the language routes
    |
    */
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    'useLocalizedRoutes' => true,
    'useLocalizedRoutesInMiddleware' => true,
    'useLocalizedRoutesInController' => true,
    'useLocalizedRoutesInView' => true,
    'useLocalizedRoutesInRedirect' => true,
    'useLocalizedRoutesInUrl' => true,
    'useLocalizedRoutesInRoute' => true,
    'useLocalizedRoutesInRouteModelBinding' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlug' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocale' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocaleAndFallback' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocaleAndFallbackAndRedirect' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocaleAndFallbackAndRedirectAndSession' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocaleAndFallbackAndRedirectAndSessionAndCookie' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocaleAndFallbackAndRedirectAndSessionAndCookieAndQueryString' => true,
    'useLocalizedRoutesInRouteModelBindingWithSlugAndLocaleAndFallbackAndRedirectAndSessionAndCookieAndQueryStringAndRoute' => true,
];
