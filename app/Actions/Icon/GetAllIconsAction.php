<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Icon;

use BladeUI\Icons\Factory as IconFactory;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use ReflectionClass;
use Spatie\QueueableAction\QueueableAction;

class GetAllIconsAction
{
    use QueueableAction;

    /**
     * @return array
     */
    public function execute(string $_context = 'form')
    {
        $iconsFactory = App::make(IconFactory::class);

        // Uso reflection per accedere alle icone in modo sicuro
        try {
            $reflection = new ReflectionClass($iconsFactory);
            $property = $reflection->getProperty('iconSets');
            $property->setAccessible(true);
            $icons = $property->getValue($iconsFactory);
        } catch (Exception $e) {
            // Fallback: restituisci array vuoto se non riesci ad accedere
            return [];
        }

        // Verifica che $icons sia un array prima di usare Arr::map()
        if (! is_array($icons)) {
            return [];
        }

        $icons = Arr::map($icons, function (array $set, array|string $name) {
            $set['name'] = $name;
            $icons = [];

<<<<<<< HEAD
            $paths = $set['paths'] ?? [];
            if (is_iterable($paths)) {
                foreach ($paths as $path) {
                    if (is_string($path)) {
                        foreach (File::allFiles($path) as $file) {
                            // Simply ignore files that aren't SVGs
                            if ($file->getExtension() !== 'svg') {
                                continue;
                            }

                            // $iconName = $this->getIconName($file, parentPath: $path, prefix: $prefix);
                            $iconName = str($file->getPathname())
                                ->after($path.DIRECTORY_SEPARATOR)
                                ->replace(DIRECTORY_SEPARATOR, '.')
                                ->basename('.svg')
                                ->toString();

                            $prefix = is_string($set['prefix'] ?? '') ? $set['prefix'] : '';
                            $icons[] = (string) $prefix.'-'.(string) $iconName;
                        }
                    }
=======
            foreach ($set['paths'] as $path) {
                foreach (File::allFiles($path) as $file) {
                    // Simply ignore files that aren't SVGs
                    if ($file->getExtension() !== 'svg') {
                        continue;
                    }

                    // $iconName = $this->getIconName($file, parentPath: $path, prefix: $prefix);
                    $iconName = str($file->getPathname())
                        ->after($path.DIRECTORY_SEPARATOR)
                        ->replace(DIRECTORY_SEPARATOR, '.')
                        ->basename('.svg')
                        ->toString();

                    $icons[] = $set['prefix'].'-'.$iconName;
>>>>>>> 3b732b6 (.)
                }
            }
            $set['icons'] = $icons;

            return $set;
        });

        return $icons;
    }
}
