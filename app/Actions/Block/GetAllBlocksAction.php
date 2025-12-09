<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Block;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Actions\File\GetClassNameByPathAction;
use Modules\Xot\Datas\ComponentFileData;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

use function Safe\realpath;

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

use function Safe\realpath;

>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
use function Safe\realpath;

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\realpath;

=======
>>>>>>> a12f125f4a (.)
=======
use function Safe\realpath;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
class GetAllBlocksAction
{
    use QueueableAction;

    /**
     * @return DataCollection<ComponentFileData>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    public function execute(string $_context = 'form'): DataCollection
    {
        Assert::string($relativePath = config('modules.paths.generator.model.path'));

        $files = File::glob(base_path('Modules') . '/*/' . $relativePath . '/../Filament/Blocks/*.php');

        $blocks = Arr::map($files, function (string $path) {
            $path = realpath($path);
            $class = app(GetClassNameByPathAction::class)->execute($path);

            $name = Str::of(class_basename($class))->snake()->toString();
            if (Str::endsWith($name, '_block')) {
                $name = Str::before($name, '_block');
            }

            $module = Str::of($class)->between('Modules\\', '\Filament\\')->toString();

            return [
                'name' => $name,
                'class' => $class,
                'module' => $module,
                'path' => $path,
            ];
        });
<<<<<<< HEAD
=======
=======
    public function execute(string $context = 'form'): DataCollection
=======
    public function execute(string $_context = 'form'): DataCollection
>>>>>>> b93ef594b4 (.)
    {
        Assert::string($relativePath = config('modules.paths.generator.model.path'));

        $files = File::glob(base_path('Modules') . '/*/' . $relativePath . '/../Filament/Blocks/*.php');

        $blocks = Arr::map($files, function (string $path) {
            $path = realpath($path);
            $class = app(GetClassNameByPathAction::class)->execute($path);

            $name = Str::of(class_basename($class))->snake()->toString();
            if (Str::endsWith($name, '_block')) {
                $name = Str::before($name, '_block');
            }
<<<<<<< HEAD
        );
>>>>>>> a12f125f4a (.)
=======

            $module = Str::of($class)->between('Modules\\', '\Filament\\')->toString();

            return [
                'name' => $name,
                'class' => $class,
                'module' => $module,
                'path' => $path,
            ];
        });
>>>>>>> b93ef594b4 (.)
=======
    public function execute(string $context = 'form'): DataCollection
    {
        Assert::string($relativePath = config('modules.paths.generator.model.path'));

        $files = File::glob(base_path('Modules').'/*/'.$relativePath.'/../Filament/Blocks/*.php');

        $blocks = Arr::map(
            $files,
            function (string $path) {
                $path = realpath($path);
                $class = app(GetClassNameByPathAction::class)->execute($path);

                $name = Str::of(class_basename($class))->snake()->toString();
                if (Str::endsWith($name, '_block')) {
                    $name = Str::before($name, '_block');
                }

                $module = Str::of($class)
                    ->between('Modules\\', '\Filament\\')
                    ->toString();

                return [
                    'name' => $name,
                    'class' => $class,
                    'module' => $module,
                    'path' => $path,
                ];
            }
        );
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)

        return ComponentFileData::collection($blocks);
    }
}
