<?php

declare(strict_types=1);

namespace Modules\UI\Models;

use Modules\Xot\Models\BaseModel;

/**
 * FieldOption model for UI module.
 * FormBuilder module not available - extending from XotBaseModel instead.
 */
class FieldOption extends BaseModel
{
    protected $table = 'field_options';

    /** @var list<string> */
    protected $fillable = [
        'field_id',
        'label',
        'value',
        'order',
    ];
}
