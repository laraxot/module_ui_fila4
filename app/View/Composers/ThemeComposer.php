<?php

declare(strict_types=1);

namespace Modules\UI\View\Composers;

<<<<<<< HEAD
use Illuminate\Config\Repository;
use Illuminate\View\View;
use Exception;
=======
use Illuminate\View\View;
use Exception;
use Illuminate\Config\Repository;
>>>>>>> 727968c (.)
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
        $ris = config('metatag.' . $index);
=======
        $ris = config('metatag.'.$index);
>>>>>>> 727968c (.)
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
        if (!view()->exists($view)) {
            throw new Exception('view not exits [' . $view . ']');
=======
        if (! view()->exists($view)) {
            throw new Exception('view not exits ['.$view.']');
>>>>>>> 727968c (.)
        }

        return view($view);
    }
}
