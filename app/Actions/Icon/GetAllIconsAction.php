<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Icon;

<<<<<<< HEAD
use ReflectionClass;
use Exception;
=======
<<<<<<< HEAD
use ReflectionClass;
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
use BladeUI\Icons\Factory as IconFactory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;

class GetAllIconsAction
{
    use QueueableAction;

    /**
     * @return array
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    public function execute(string $_context = 'form')
    {
        $iconsFactory = App::make(IconFactory::class);

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function execute(string $context = 'form')
    {
        $iconsFactory = App::make(IconFactory::class);
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function execute(string $_context = 'form')
    {
        $iconsFactory = App::make(IconFactory::class);

>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
        // Uso reflection per accedere alle icone in modo sicuro
        try {
            $reflection = new ReflectionClass($iconsFactory);
            $property = $reflection->getProperty('iconSets');
            $property->setAccessible(true);
            $icons = $property->getValue($iconsFactory);
        } catch (Exception $e) {
<<<<<<< HEAD
=======
=======
        // Uso reflection per accedere alle icone in modo sicuro
        try {
            $reflection = new \ReflectionClass($iconsFactory);
            $property = $reflection->getProperty('iconSets');
            $property->setAccessible(true);
            $icons = $property->getValue($iconsFactory);
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
            // Fallback: restituisci array vuoto se non riesci ad accedere
            return [];
        }

        // Verifica che $icons sia un array prima di usare Arr::map()
        if (!is_array($icons)) {
            return [];
        }

        $icons = Arr::map($icons, function (array $set, array|string $name) {
            $set['name'] = $name;
            $icons = [];

            foreach ($set['paths'] as $path) {
                foreach (File::allFiles($path) as $file) {
                    // Simply ignore files that aren't SVGs
                    if ('svg' !== $file->getExtension()) {
                        continue;
                    }

                    // $iconName = $this->getIconName($file, parentPath: $path, prefix: $prefix);
                    $iconName = str($file->getPathname())
<<<<<<< HEAD
                        ->after($path . DIRECTORY_SEPARATOR)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                        ->after($path . DIRECTORY_SEPARATOR)
=======
                        ->after($path.DIRECTORY_SEPARATOR)
>>>>>>> a12f125f4a (.)
=======
                        ->after($path . DIRECTORY_SEPARATOR)
>>>>>>> b93ef594b4 (.)
=======
                        ->after($path.DIRECTORY_SEPARATOR)
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                        ->replace(DIRECTORY_SEPARATOR, '.')
                        ->basename('.svg')
                        ->toString();

<<<<<<< HEAD
                    $icons[] = $set['prefix'] . '-' . $iconName;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    $icons[] = $set['prefix'] . '-' . $iconName;
=======
                    $icons[] = $set['prefix'].'-'.$iconName;
>>>>>>> a12f125f4a (.)
=======
                    $icons[] = $set['prefix'] . '-' . $iconName;
>>>>>>> b93ef594b4 (.)
=======
                    $icons[] = $set['prefix'].'-'.$iconName;
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
                }
            }
            $set['icons'] = $icons;

            return $set;
        });

        return $icons;
    }
}
