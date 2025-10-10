<?php

declare(strict_types=1);

namespace Modules\UI\View\Composers;

<<<<<<< HEAD
use Illuminate\Config\Repository;
use Illuminate\View\View;
use Exception;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Config\Repository;
use Illuminate\View\View;
use Exception;
=======
use Illuminate\View\View;
use Exception;
use Illuminate\Config\Repository;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Config\Repository;
use Illuminate\View\View;
use Exception;
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
use Illuminate\Contracts\Foundation\Application;

class ThemeComposer
{
    public function metatags(): View
<<<<<<< HEAD
=======
=======
class ThemeComposer
{
    public function metatags(): \Illuminate\View\View
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
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
<<<<<<< HEAD
     * @return Repository|Application|mixed
=======
<<<<<<< HEAD
     * @return Repository|Application|mixed
=======
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
     */
    public function metatag($index)
    {
        // $ris = self::__getStatic($index);
        // echo '<br/>['.$index.']['.$ris.']';
        // if ('' === $ris || null === $ris) {
<<<<<<< HEAD
        $ris = config('metatag.' . $index);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $ris = config('metatag.' . $index);
=======
        $ris = config('metatag.'.$index);
>>>>>>> a12f125f4a (.)
=======
        $ris = config('metatag.' . $index);
>>>>>>> b93ef594b4 (.)
=======
        $ris = config('metatag.'.$index);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        // self::__setStatic($index, $ris);
        // }

        return $ris;
    }

    public function showScripts(): string
    {
        return '';
    }

<<<<<<< HEAD
    public function flag(string $lang): View
    {
        $view = "ui::svg.flags.{$lang}";
        if (!view()->exists($view)) {
            throw new Exception('view not exits [' . $view . ']');
=======
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
=======
        if (!view()->exists($view)) {
            throw new Exception('view not exits [' . $view . ']');
>>>>>>> b93ef594b4 (.)
=======
    public function flag(string $lang): \Illuminate\View\View
    {
        $view = "ui::svg.flags.{$lang}";
        if (! view()->exists($view)) {
            throw new \Exception('view not exits ['.$view.']');
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        }

        return view($view);
    }
}
