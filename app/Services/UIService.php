<?php

declare(strict_types=1);

namespace Modules\UI\Services;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
use Modules\Xot\Actions\File\AssetAction;

final class UIService
{
<<<<<<< HEAD
    public static function asset(string $asset): string
    {
        return app(AssetAction::class)->execute($asset);
=======
<<<<<<< HEAD
    public static function asset(string $asset): string
=======
<<<<<<< HEAD
    public static function asset(string $asset): null|string
>>>>>>> 6c0b3515 (.)
    {
        return app(AssetAction::class)->execute($asset);
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function asset(string $asset): null|string
=======
    public static function asset(string $asset): ?string
>>>>>>> a12f125f4a (.)
=======
    public static function asset(string $asset): null|string
>>>>>>> b93ef594b4 (.)
    {
        return app(AssetAction::class)->execute($asset);
=======
class UIService
{
    public static function asset(string $asset): ?string
    {
        return app(\Modules\Xot\Actions\File\AssetAction::class)->execute($asset);
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
>>>>>>> laraxot/develop
    }
}
