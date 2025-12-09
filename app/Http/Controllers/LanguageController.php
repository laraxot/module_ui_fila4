<?php

declare(strict_types=1);

namespace Modules\UI\Http\Controllers;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
>>>>>>> 727968c (.)
=======
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
>>>>>>> ef3c5fa (.)
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class LanguageController extends Controller
{
    /**
     * Cambia la lingua dell'applicazione.
     */
    public function switch(string $locale): RedirectResponse
    {
        // Usa configurazione per ottenere le lingue supportate
        $supportedLocales = Config::array('app.supported_locales', ['en', 'it']);
<<<<<<< HEAD
<<<<<<< HEAD

        if (!in_array($locale, $supportedLocales, strict: true)) {
=======
        
        if (!in_array($locale, $supportedLocales)) {
>>>>>>> 727968c (.)
=======

        if (!in_array($locale, $supportedLocales, strict: true)) {
>>>>>>> ef3c5fa (.)
            $locale = Config::string('app.locale', 'en');
        }

        session()->put('locale', $locale);
        app()->setLocale($locale);

        return redirect()->back();
    }
}
