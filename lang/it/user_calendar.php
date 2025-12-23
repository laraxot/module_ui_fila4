<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
declare(strict_types=1);

return [
    'months' => [
        'long' => [
            'Gennaio',
            'Febbraio',
            'Marzo',
            'Aprile',
            'Maggio',
            'Giugno',
            'Luglio',
            'Agosto',
            'Settembre',
            'Ottobre',
            'Novembre',
            'Dicembre',
        ],
        'short' => [
            'Gen',
            'Feb',
            'Mar',
            'Apr',
            'Mag',
            'Giu',
            'Lug',
            'Ago',
            'Set',
            'Ott',
            'Nov',
            'Dic',
        ],
    ],
    'weekdays' => [
        'long' => [
            'Domenica',
            'Lunedì',
            'Martedì',
            'Mercoledì',
            'Giovedì',
            'Venerdì',
            'Sabato',
        ],
        'short' => ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
        'min' => ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
return [
    'months' => [
        'long' => [
            'Gennaio',
            'Febbraio',
            'Marzo',
            'Aprile',
            'Maggio',
            'Giugno',
            'Luglio',
            'Agosto',
            'Settembre',
            'Ottobre',
            'Novembre',
            'Dicembre',
        ],
        'short' => [
            'Gen',
            'Feb',
            'Mar',
            'Apr',
            'Mag',
            'Giu',
            'Lug',
            'Ago',
            'Set',
            'Ott',
            'Nov',
            'Dic',
        ],
    ],
    'weekdays' => [
        'long' => [
            'Domenica',
            'Lunedì',
            'Martedì',
            'Mercoledì',
            'Giovedì',
            'Venerdì',
            'Sabato',
        ],
        'short' => ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
<<<<<<< HEAD
        'min' => ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa']
>>>>>>> a12f125f4a (.)
=======
        'min' => ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
>>>>>>> b93ef594b4 (.)
=======
return [
    'months' => [
        'long' => [
            'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno',
            'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'
        ],
        'short' => [
            'Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu',
            'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'
        ]
    ],
    'weekdays' => [
        'long' => [
            'Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'
        ],
        'short' => ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
        'min' => ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa']
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
    ],
    'buttons' => [
        'previous' => 'Mese precedente',
        'next' => 'Mese successivo',
        'today' => 'Oggi',
        'cancel' => 'Annulla',
        'save' => 'Salva',
<<<<<<< HEAD
        'close' => 'Chiudi',
=======
<<<<<<< HEAD
        'close' => 'Chiudi',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'close' => 'Chiudi',
=======
        'close' => 'Chiudi'
>>>>>>> a12f125f4a (.)
=======
        'close' => 'Chiudi',
>>>>>>> b93ef594b4 (.)
=======
        'close' => 'Chiudi'
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
    ],
    'labels' => [
        'today' => 'Oggi',
        'all_day' => 'Tutto il giorno',
        'no_events' => 'Nessun evento programmato',
<<<<<<< HEAD
        'loading' => 'Caricamento in corso...',
=======
<<<<<<< HEAD
        'loading' => 'Caricamento in corso...',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'loading' => 'Caricamento in corso...',
=======
        'loading' => 'Caricamento in corso...'
>>>>>>> a12f125f4a (.)
=======
        'loading' => 'Caricamento in corso...',
>>>>>>> b93ef594b4 (.)
=======
        'loading' => 'Caricamento in corso...'
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
    ],
    'fields' => [
        'title' => [
            'label' => 'Titolo',
            'placeholder' => 'Inserisci un titolo',
            'helper_text' => 'Inserisci un titolo descrittivo',
            'description' => 'Titolo dell\'evento',
        ],
        'starts_at' => [
            'label' => 'Inizio',
            'placeholder' => 'Seleziona data e ora di inizio',
            'helper_text' => 'Data e ora di inizio dell\'evento',
            'description' => 'Data e ora di inizio',
        ],
        'ends_at' => [
            'label' => 'Fine',
            'placeholder' => 'Seleziona data e ora di fine',
            'helper_text' => 'Data e ora di fine dell\'evento',
            'description' => 'Data e ora di fine',
        ],
    ],
    'actions' => [
        'delete' => [
            'label' => 'Elimina',
            'confirm' => 'Sei sicuro di voler eliminare questo evento?',
            'success' => 'Evento eliminato con successo',
            'error' => 'Errore durante l\'eliminazione dell\'evento',
        ],
        'edit' => [
            'label' => 'Modifica',
            'success' => 'Modifiche salvate con successo',
            'error' => 'Errore durante il salvataggio delle modifiche',
        ],
        'create' => [
            'label' => 'Nuovo evento',
            'success' => 'Evento creato con successo',
            'error' => 'Errore durante la creazione dell\'evento',
<<<<<<< HEAD
        ],
=======
<<<<<<< HEAD
        ],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ],
=======
        ]
>>>>>>> a12f125f4a (.)
=======
        ],
>>>>>>> b93ef594b4 (.)
=======
        ]
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
    ],
    'validation' => [
        'required' => 'Questo campo è obbligatorio',
        'date' => 'Inserisci una data valida',
<<<<<<< HEAD
        'after' => 'La data di fine deve essere successiva alla data di inizio',
    ],
=======
<<<<<<< HEAD
        'after' => 'La data di fine deve essere successiva alla data di inizio',
    ],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'after' => 'La data di fine deve essere successiva alla data di inizio',
    ],
=======
        'after' => 'La data di fine deve essere successiva alla data di inizio'
    ]
>>>>>>> a12f125f4a (.)
=======
        'after' => 'La data di fine deve essere successiva alla data di inizio',
    ],
>>>>>>> b93ef594b4 (.)
=======
        'after' => 'La data di fine deve essere successiva alla data di inizio'
    ]
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
];
