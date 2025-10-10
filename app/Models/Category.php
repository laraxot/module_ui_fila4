<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Modules\Xot\Models\BaseModel;

/**
 * Category model for UI module.
 * FormBuilder module not available - extending from XotBaseModel instead.
 */
/** */
class Category extends BaseModel
{
    protected $table = 'categories';

    /** @var list<string> */
    protected $fillable = [
        'name',
        'description',
        'icon',
        'parent_id',
        'is_active',
        'sort_order',
    ];
}
