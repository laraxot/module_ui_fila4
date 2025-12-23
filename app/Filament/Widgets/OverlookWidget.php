<?php

declare(strict_types=1);

/**
 * @see https://github.com/awcodes/overlook/blob/2.x/src/Widgets/OverlookWidget.php
 */

namespace Modules\UI\Filament\Widgets;

use Modules\Xot\Filament\Widgets\XotBaseWidget;

final class OverlookWidget extends XotBaseWidget
{
    public string $icon = 'heroicon-o-envelope';

    public string $title = '';

    /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
     * public array $grid = [
     * 'default' => 6,
     * 'sm' => 6,
     * 'md' => 6,
     * 'lg' => 6,
     * 'xl' => 6,
     * '2xl' => null,
     * ];
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        public array $grid = [
                    'default' => 6,
                    'sm' => 6,
                    'md' => 6,
                    'lg' => 6,
                    'xl' => 6,
                    '2xl' => null,
                ];
                */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop

    public array $stats = [];

    protected string $view = 'ui::filament.widgets.overlook';
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======

    public array $stats = [];

    protected static string $view = 'ui::filament.widgets.overlook';
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop

    protected int|string|array $columnSpan = 1;

    public function getFormSchema(): array
    {
        return [];
    }

    /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
     * public function mount(array $filter): void
     * {
     * $this->filter = $filter;
     *
     * $this->data = $this->getData();
     * // dddx($this->data);
     * if (empty($this->grid)) {
     * $this->grid = [
     * 'default' => 2,
     * 'sm' => 2,
     * 'md' => 3,
     * 'lg' => 3,
     * 'xl' => 3,
     * '2xl' => null,
     * ];
     * }
     * }
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
    public function mount(array $filter): void
    {
        $this->filter = $filter;

        $this->data = $this->getData();
        // dddx($this->data);
        if (empty($this->grid)) {
            $this->grid = [
                'default' => 2,
                'sm' => 2,
                'md' => 3,
                'lg' => 3,
                'xl' => 3,
                '2xl' => null,
            ];
        }
    }
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
}
