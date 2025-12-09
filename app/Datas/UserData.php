<?php

declare(strict_types=1);

namespace Modules\UI\Datas;

use Spatie\LaravelData\Data;

class UserData extends Data
{
    public function __construct(
        public int $id,
        public string $name,
        public string $email,
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
        public null|string $avatar,
        public null|string $role,
        public array $permissions,
        public array $settings,
<<<<<<< HEAD
=======
        public ?string $avatar,
        public ?string $role,
        public array $permissions,
        public array $settings
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
    ) {}
}
