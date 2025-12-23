<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace \Filament\Forms\Forms\Components\Field;
=======
namespace Modules\Xot\Exceptions\Formatters;
>>>>>>> 19f3650 (.)
=======
namespace Modules\UI\Filament\Forms\Components\Field;
>>>>>>> 24eb066 (Lint)

use Filament\Forms\Components\Field;

final class QrReader extends Field
{
    protected string $view = 'ui::filament.forms.components.field.qr-reader';

    /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
     * public static function make($livewire): static
     * {
     * $result = app(static::class, ['livewire' => $livewire]);
     * $result->configure();
     * return $result;
     * }
     */
<<<<<<< HEAD
=======
    public static function make($livewire): static
    {
        $result = app(static::class, ['livewire' => $livewire]);
        $result->configure();
        return $result;
    }
    */
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
}
