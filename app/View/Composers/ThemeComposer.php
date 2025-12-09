<?php

declare(strict_types=1);

namespace Modules\UI\View\Composers;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Config\Repository;
use Illuminate\View\View;
use Exception;
=======
use Illuminate\View\View;
use Exception;
use Illuminate\Config\Repository;
>>>>>>> 727968c (.)
=======
use Illuminate\Config\Repository;
use Illuminate\View\View;
use Exception;
>>>>>>> ef3c5fa (.)
use Illuminate\Contracts\Foundation\Application;

class ThemeComposer
{
    public function metatags(): View
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'ui::metatags';

        return view($view);
    }

    /**
     * @param string $index
     *
     * @return Repository|Application|mixed
     */
    public function metatag($index)
    {
        // $ris = self::__getStatic($index);
        // echo '<br/>['.$index.']['.$ris.']';
        // if ('' === $ris || null === $ris) {
<<<<<<< HEAD
<<<<<<< HEAD
        $ris = config('metatag.' . $index);
=======
        $ris = config('metatag.'.$index);
>>>>>>> 727968c (.)
=======
        $ris = config('metatag.' . $index);
>>>>>>> ef3c5fa (.)
        // self::__setStatic($index, $ris);
        // }

        return $ris;
    }

    public function showScripts(): string
    {
        return '';
    }

    public function flag(string $lang): View
    {
        $view = "ui::svg.flags.{$lang}";
<<<<<<< HEAD
<<<<<<< HEAD
        if (!view()->exists($view)) {
            throw new Exception('view not exits [' . $view . ']');
=======
        if (! view()->exists($view)) {
            throw new Exception('view not exits ['.$view.']');
>>>>>>> 727968c (.)
=======
        if (!view()->exists($view)) {
            throw new Exception('view not exits [' . $view . ']');
>>>>>>> ef3c5fa (.)
        }

        return view($view);
    }
}
