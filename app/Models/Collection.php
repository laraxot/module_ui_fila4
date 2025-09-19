<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Modules\User\Models\User;
use LaraZeus\Bolt\Database\Factories\CollectionFactory;
use Illuminate\Database\Eloquent\Builder;
use Closure;
use Illuminate\Contracts\Database\Query\Expression;
use Modules\FormBuilder\Models\Collection as BaseCollection;

/**
 * @property-read string $last_updated
 * @property-read string|null $values_list
 * @property-read User|null $user
 *
 * @method static CollectionFactory factory($count = null, $state = [])
 * @method static Builder<static>|Collection newModelQuery()
 * @method static Builder<static>|Collection newQuery()
 * @method static Builder<static>|Collection onlyTrashed()
 * @method static Builder<static>|Collection query()
 * @method static Builder<static>|Collection withTrashed(bool $withTrashed = true)
 * @method static Builder<static>|Collection withoutTrashed()
 * @method static Collection|null first()
 * @method static \Illuminate\Database\Eloquent\Collection<int, Collection> get()
 * @method static Collection create(array $attributes = [])
 * @method static Collection firstOrCreate(array $attributes = [], array $values = [])
 * @method static Builder<static>|Collection where((string|Closure) $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static Builder<static>|Collection whereNotNull((string|Expression) $columns)
 * @method static int count(string $columns = '*')
 *
 * @mixin \Eloquent
 */
class Collection extends BaseCollection
{
    // Proxy alias to satisfy Laravel namespacing within UI module
}
