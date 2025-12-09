<?php

declare(strict_types=1);

namespace Modules\UI\Services;

use Modules\Xot\Actions\File\AssetAction;

class UIService
{
<<<<<<< HEAD
<<<<<<< HEAD
    public static function asset(string $asset): null|string
=======
    public static function asset(string $asset): ?string
>>>>>>> 727968c (.)
=======
    public static function asset(string $asset): null|string
>>>>>>> ef3c5fa (.)
    {
        return app(AssetAction::class)->execute($asset);
    }
}
