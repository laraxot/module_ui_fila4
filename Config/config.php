<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
return [];
=======
=======
>>>>>>> 24eb066 (Lint)
return [
    'name' => 'UI',
    'description' => 'Modulo per la gestione dell\'interfaccia utente e componenti',
    'icon' => 'heroicon-o-squares-2x2',
    'navigation' => [
        'enabled' => true,
        'sort' => 90,
    ],
    'routes' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
    ],
    'providers' => [
        'Modules\\UI\\Providers\\UIServiceProvider',
    ],
];
<<<<<<< HEAD
>>>>>>> a8fbb3e (.)
=======
>>>>>>> 24eb066 (Lint)
