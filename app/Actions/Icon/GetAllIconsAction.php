<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Icon;

use BladeUI\Icons\Factory as IconFactory;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use ReflectionClass;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Finder\SplFileInfo;

final class GetAllIconsAction
{
    use QueueableAction;

    /**
     * Execute the action to retrieve all icons.
     *
     * @return array<string, array<string, mixed>>
     */
    public function execute(string $_context = 'form'): array
    {
        $iconsFactory = App::make(IconFactory::class);
        $icons = $this->extractIconsFromFactory($iconsFactory);

        return $this->processIconSets($icons);
    }

    /**
     * Extract icon sets from factory using reflection.
     *
     * @return array<string, array<string, mixed>>
     */
    private function extractIconsFromFactory(IconFactory $iconsFactory): array
    {
        try {
            $value = $this->getIconSetsProperty($iconsFactory);

            return $this->sanitizeIconSets($value);
        } catch (Exception) {
            return [];
        }
    }

    /**
     * Get iconSets property via reflection.
     */
    private function getIconSetsProperty(IconFactory $iconsFactory): mixed
    {
        $reflection = new ReflectionClass($iconsFactory);
        $property = $reflection->getProperty('iconSets');
        $property->setAccessible(true);

        return $property->getValue($iconsFactory);
    }

    /**
     * Sanitize and validate icon sets array.
     *
     * @return array<string, array<string, mixed>>
     */
    private function sanitizeIconSets(mixed $value): array
    {
        if (! is_array($value)) {
            return [];
        }

        $sanitizedSets = [];
        foreach ($value as $name => $set) {
            if (is_string($name) && is_array($set)) {
                // Ensure the inner array has string keys
                $stringKeySet = [];
                foreach ($set as $key => $val) {
                    $stringKeySet[(string) $key] = $val;
                }
                $sanitizedSets[$name] = $stringKeySet;
            }
        }

        return $sanitizedSets;
    }

    /**
     * @param  array<string, array<string, mixed>>  $icons
     * @return array<string, array<string, mixed>>
     */
    private function processIconSets(array $icons): array
    {
        /** @var array<string, array<string, mixed>> $result */
        $result = [];

        foreach ($icons as $name => $set) {
            if (! is_array($set)) {
                continue;
            }

            /** @var array<string, mixed> $set */
            $processedSet = $set;
            $processedSet['name'] = $name;
            $processedSet['icons'] = $this->extractIconsFromSet($processedSet);

            $result[$name] = $processedSet;
        }

        return $result;
    }

    /**
     * Extract icons from a single icon set.
     *
     * @param  array<string, mixed>  $set
     * @return array<int, string>
     */
    private function extractIconsFromSet(array $set): array
    {
        $paths = $set['paths'] ?? [];

        if (! is_iterable($paths)) {
            return [];
        }

        $prefix = $this->extractPrefix($set);
        $icons = $this->collectIconsFromPaths($paths, $prefix);

        return array_values($icons);
    }

    /**
     * Extract prefix from icon set.
     */
    private function extractPrefix(array $set): string
    {
        return isset($set['prefix']) && is_string($set['prefix']) ? $set['prefix'] : '';
    }

    /**
     * Collect icons from all paths.
     *
     * @return array<int, string>
     */
    private function collectIconsFromPaths(iterable $paths, string $prefix): array
    {
        $icons = [];

        foreach ($paths as $path) {
            if (! is_string($path)) {
                continue;
            }

            $iconsFromPath = $this->extractIconsFromPath($path, $prefix);
            if ($iconsFromPath !== []) {
                $icons = array_merge($icons, $iconsFromPath);
            }
        }

        return $icons;
    }

    /**
     * Extract icons from a specific path.
     *
     * @return array<int, string>
     */
    private function extractIconsFromPath(string $path, string $prefix): array
    {
        $files = File::allFiles($path);

        if (! is_iterable($files)) {
            return [];
        }

        return $this->processIconFiles($files, $path, $prefix);
    }

    /**
     * Process SVG files and build icon names.
     *
     * @return array<int, string>
     */
    private function processIconFiles(iterable $files, string $path, string $prefix): array
    {
        $icons = [];

        foreach ($files as $file) {
            if (! $this->isSvgFile($file)) {
                continue;
            }

            if (! ($file instanceof SplFileInfo)) {
                continue;
            }

            $iconName = $this->buildIconName($file, $path, $prefix);
            if ($iconName !== '') {
                $icons[] = $iconName;
            }
        }

        return $icons;
    }

    /**
     * Check if file is a valid SVG file.
     */
    private function isSvgFile(mixed $file): bool
    {
        return $file instanceof SplFileInfo && $file->getExtension() === 'svg';
    }

    /**
     * Build icon name from file path.
     */
    private function buildIconName(SplFileInfo $file, string $path, string $prefix): string
    {
        $iconName = str($file->getPathname())
            ->after($path.DIRECTORY_SEPARATOR)
            ->replace(DIRECTORY_SEPARATOR, '.')
            ->basename('.svg')
            ->toString();

        return $prefix !== '' ? "{$prefix}-{$iconName}" : $iconName;
    }
}
