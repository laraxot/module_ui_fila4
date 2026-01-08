<?php

declare(strict_types=1);

namespace Modules\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
<<<<<<< HEAD
=======
    public function __construct(
        public Collection $collection,
        // public string $tpl = 'v1'
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
>>>>>>> 727968c (.)

>>>>>>> 6c0b3515 (.)
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

<<<<<<< HEAD
    public function render(): View
    {
        /** @var view-string $view */
        $view = 'ui::components.sidebar';

        return view($view);
    }
=======
    // public function render(): Renderable
    // {
    //     $categories = Category::query()
    //         ->join('category_post', 'categories.id', '=', 'category_post.category_id')
    //         ->select('categories.title', 'categories.slug', DB::raw('count(*) as total'))
    //         ->groupBy([
    //             'categories.title', 'categories.slug',
    //         ])
    //         ->orderByDesc('total')
    //         ->limit(5)
    //         ->get();
<<<<<<< HEAD
=======

>>>>>>> 727968c (.)
    //     return view('components.sidebar', ['categories' => $categories]);
    // }
>>>>>>> 6c0b3515 (.)
}
