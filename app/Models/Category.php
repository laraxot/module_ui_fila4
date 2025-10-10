<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Illuminate\Database\Eloquent\Collection;
use LaraZeus\Bolt\Models\Form;
use LaraZeus\Bolt\Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Builder;
use Closure;
use Illuminate\Contracts\Database\Query\Expression;
use Modules\FormBuilder\Models\Category as BaseCategory;

/**
 * @property-read Collection<int, Form> $forms
 * @property-read int|null $forms_count
 * @property-read string $last_updated
 * @property-read mixed $logo_url
 * @property-read mixed $translations
 *
 * @method static CategoryFactory factory($count = null, $state = [])
 * @method static Builder<static>|Category newModelQuery()
 * @method static Builder<static>|Category newQuery()
 * @method static Builder<static>|Category onlyTrashed()
 * @method static Builder<static>|Category query()
 * @method static Builder<static>|Category whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static Builder<static>|Category whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static Builder<static>|Category whereLocale(string $column, string $locale)
 * @method static Builder<static>|Category whereLocales(string $column, array $locales)
 * @method static Builder<static>|Category withTrashed(bool $withTrashed = true)
 * @method static Builder<static>|Category withoutTrashed()
 * @method static Category|null first()
 * @method static Collection<int, Category> get()
 * @method static Category create(array $attributes = [])
 * @method static Category firstOrCreate(array $attributes = [], array $values = [])
 * @method static Builder<static>|Category where((string|Closure) $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static Builder<static>|Category whereNotNull((string|Expression) $columns)
 * @method static int count(string $columns = '*')
 *
 * @mixin \Eloquent
 */
class Category extends BaseCategory
{
    // Proxy alias to satisfy Laravel namespacing within UI module
}
