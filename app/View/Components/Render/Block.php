<?php

declare(strict_types=1);

namespace Modules\UI\View\Components\Render;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Illuminate\View\View;
use Webmozart\Assert\Assert;

/**
 * .
 */
class Block extends Component
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    public null|string $view = null;

    public function __construct(
        public array $block,
        public null|Model $model = null,
        public string $tpl = '',
    ) {
        $view = Arr::get($this->block, 'data.view', null);
        if (null === $view) {
            $view = 'ui::empty';
        }
        Assert::string($view, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
=======
=======
    public ?string $view = null;
=======
    public null|string $view = null;
>>>>>>> b93ef594b4 (.)

    public function __construct(
        public array $block,
        public null|Model $model = null,
        public string $tpl = '',
    ) {
        $view = Arr::get($this->block, 'data.view', null);
        if (null === $view) {
            $view = 'ui::empty';
        }
<<<<<<< HEAD
        Assert::string($view);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($view, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
    public ?string $view = null;

    public function __construct(
        public array $block,
        public ?Model $model = null,
        public string $tpl = '',
    ) {
        $view = Arr::get($this->block, 'data.view', null);
        if (null == $view) {
            $view = 'ui::empty';
        }
        Assert::string($view);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        $this->view = $view;
    }

    public function render(): ViewFactory|View
    {
<<<<<<< HEAD
        if (!isset($this->block['type'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!isset($this->block['type'])) {
=======
        if (! isset($this->block['type'])) {
>>>>>>> a12f125f4a (.)
=======
        if (!isset($this->block['type'])) {
>>>>>>> b93ef594b4 (.)
=======
        if (! isset($this->block['type'])) {
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            return view('ui::empty');
        }

        $view = $this->view;
<<<<<<< HEAD
        if (!view()->exists(is_string($view) ? $view : ((string) $view))) {
            $message = 'view not exists [' . $view . '] ! <pre>' . print_r($this->block, true) . '</pre>';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!view()->exists(is_string($view) ? $view : ((string) $view))) {
            $message = 'view not exists [' . $view . '] ! <pre>' . print_r($this->block, true) . '</pre>';
=======
        if (! view()->exists(is_string($view) ? $view : (string) $view)) {
            $message = 'view not exists ['.$view.'] ! <pre>'.print_r($this->block, true).'</pre>';
>>>>>>> a12f125f4a (.)
=======
        if (!view()->exists(is_string($view) ? $view : ((string) $view))) {
            $message = 'view not exists [' . $view . '] ! <pre>' . print_r($this->block, true) . '</pre>';
>>>>>>> b93ef594b4 (.)
=======
        if (! view()->exists(is_string($view) ? $view : (string) $view)) {
            $message = 'view not exists ['.$view.'] ! <pre>'.print_r($this->block, true).'</pre>';
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            $view_params = [
                'title' => 'deprecated',
                'message' => $message,
            ];

            return view('ui::alert', $view_params);
        }
        $view_params = $this->block['data'] ?? [];
<<<<<<< HEAD
        Assert::string($view, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!view()->exists($view)) {
            throw new Exception('view not found [' . $view . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($view, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!view()->exists($view)) {
            throw new Exception('view not found [' . $view . ']');
=======
        Assert::string($view);
        if (! view()->exists($view)) {
            throw new Exception('view not found ['.$view.']');
>>>>>>> a12f125f4a (.)
=======
        Assert::string($view, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        if (!view()->exists($view)) {
            throw new Exception('view not found [' . $view . ']');
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($view);
        if (! view()->exists($view)) {
            throw new \Exception('view not found ['.$view.']');
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
        }

        return view($view, $view_params);
    }
}
