<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Modules\Xot\Models\BaseModel;

/**
 * Collection model for UI module.
 * FormBuilder module not available - extending from XotBaseModel instead.
 */
class Collection extends BaseModel
{
    protected $table = 'collections';

    /** @var list<string> */
    protected $fillable = [
        'name',
        'description',
        'type',
    ];
}
