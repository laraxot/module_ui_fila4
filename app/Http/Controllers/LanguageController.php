<?php

declare(strict_types=1);

namespace Modules\UI\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
=======
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
<<<<<<< HEAD
=======
use Illuminate\Http\Request;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
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

        if (! in_array($locale, $supportedLocales, strict: true)) {
=======
<<<<<<< HEAD

<<<<<<< HEAD
        if (! in_array($locale, $supportedLocales, strict: true)) {
=======
        if (!in_array($locale, $supportedLocales, strict: true)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        if (!in_array($locale, $supportedLocales, strict: true)) {
=======
        
        if (!in_array($locale, $supportedLocales)) {
>>>>>>> a12f125f4a (.)
=======

        if (!in_array($locale, $supportedLocales, strict: true)) {
>>>>>>> b93ef594b4 (.)
=======
        
        if (!in_array($locale, $supportedLocales)) {
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> 6c0b3515 (.)
>>>>>>> laraxot/develop
            $locale = Config::string('app.locale', 'en');
        }

        session()->put('locale', $locale);
        app()->setLocale($locale);

        return redirect()->back();
    }
}
