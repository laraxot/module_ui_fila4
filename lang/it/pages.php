<?php

declare(strict_types=1);

return [
    's3test' => [
        'heading' => 'Test',
        'description' => 'Pagina di test ',
        'info' => [
            'title' => 'Informazioni Test',
            'description' => 'Questa pagina permette di testare l\'invio di email tramite il sistema S3. Inserisci i dati richiesti e clicca su "Invia Email" per procedere con il test.',
        ],
        'fields' => [
            'to' => [
                'label' => 'Destinatario',
                'placeholder' => 'Inserisci l\'indirizzo email del destinatario',
                'helper_text' => 'L\'email verrà inviata a questo indirizzo',
<<<<<<< HEAD
                'description' => 'Indirizzo email del destinatario',
=======
<<<<<<< HEAD
                'description' => 'Indirizzo email del destinatario',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'description' => 'Indirizzo email del destinatario',
=======
                'description' => 'Indirizzo email del destinatario'
>>>>>>> a12f125f4a (.)
=======
                'description' => 'Indirizzo email del destinatario',
>>>>>>> b93ef594b4 (.)
=======
                'description' => 'Indirizzo email del destinatario'
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
            ],
            'subject' => [
                'label' => 'Oggetto',
                'placeholder' => 'Inserisci l\'oggetto dell\'email',
                'helper_text' => 'L\'oggetto apparirà nella casella di posta del destinatario',
<<<<<<< HEAD
                'description' => 'Oggetto dell\'email',
=======
<<<<<<< HEAD
                'description' => 'Oggetto dell\'email',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'description' => 'Oggetto dell\'email',
=======
                'description' => 'Oggetto dell\'email'
>>>>>>> a12f125f4a (.)
=======
                'description' => 'Oggetto dell\'email',
>>>>>>> b93ef594b4 (.)
=======
                'description' => 'Oggetto dell\'email'
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
            ],
            'body_html' => [
                'label' => 'Contenuto',
                'placeholder' => 'Inserisci il contenuto dell\'email',
                'helper_text' => 'Il contenuto può includere formattazione HTML',
<<<<<<< HEAD
                'description' => 'Contenuto dell\'email',
=======
<<<<<<< HEAD
                'description' => 'Contenuto dell\'email',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'description' => 'Contenuto dell\'email',
=======
                'description' => 'Contenuto dell\'email'
>>>>>>> a12f125f4a (.)
=======
                'description' => 'Contenuto dell\'email',
>>>>>>> b93ef594b4 (.)
=======
                'description' => 'Contenuto dell\'email'
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
            ],
        ],
        'actions' => [
            'send_email' => [
                'label' => 'Invia Email',
                'success' => 'Email inviata con successo',
                'error' => 'Errore durante l\'invio dell\'email',
            ],
            'sendEmail' => [
                'label' => 'Invia Email',
                'success' => 'Email inviata con successo',
                'error' => 'Errore durante l\'invio dell\'email',
            ],
        ],
        'notifications' => [
            'check_email_client' => 'Controlla il tuo client email',
            'email_sent_success' => 'Email inviata con successo',
            'email_sent_error' => 'Errore durante l\'invio dell\'email',
        ],
    ],
<<<<<<< HEAD
];
=======
<<<<<<< HEAD
];
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
];
=======
]; 
>>>>>>> a12f125f4a (.)
=======
];
>>>>>>> b93ef594b4 (.)
=======
]; 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
