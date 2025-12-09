<?php

declare(strict_types=1);

namespace Modules\UI\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Recupera la lingua dalla sessione o usa quella predefinita
        $locale = Session::get('locale', config('app.locale'));
<<<<<<< HEAD
        if (!is_string($locale)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_string($locale)) {
=======
        if(!is_string($locale)){
>>>>>>> a12f125f4a (.)
=======
        if (!is_string($locale)) {
>>>>>>> b93ef594b4 (.)
=======
        if(!is_string($locale)){
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            $locale = Config::string('app.locale');
        }
        // Imposta la lingua
        App::setLocale($locale);

        $response = $next($request);
        if (!($response instanceof Response)) {
            throw new \RuntimeException('Middleware must return a Response instance');
        }

        return $response;
    }
}
