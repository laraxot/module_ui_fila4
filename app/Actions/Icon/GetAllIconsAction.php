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

        $icons = Arr::map($icons, function (array $set, string $name): array {
            $set['name'] = $name;
            $icons = [];

            $paths = $set['paths'] ?? [];
            if (! is_iterable($paths)) {
                $paths = [];
            }

            foreach ($paths as $path) {
                // Ensure $path is a string before using File::allFiles
                if (! is_string($path)) {
                    continue;
                }

                $files = File::allFiles($path);
                if (! is_iterable($files)) {
                    continue;
                }

                foreach ($files as $file) {
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

                    // Ensure both values are strings before concatenation
                    $prefix = is_string($set['prefix'] ?? null) ? $set['prefix'] : '';
                    $icons[] = $prefix.'-'.$iconName;
                }
            }
            $set['icons'] = $icons;

            return $set;
        });

        return $icons;
    }
}
