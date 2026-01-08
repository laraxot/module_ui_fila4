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
        public ?string $avatar,
        public ?string $role,
        public array $permissions,
        public array $settings,
    ) {
    }
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
        public null|string $avatar,
        public null|string $role,
        public array $permissions,
        public array $settings,
<<<<<<< HEAD
    ) {}
>>>>>>> 6c0b3515 (.)
}
=======
=======
=======
>>>>>>> origin/develop
        public ?string $avatar,
        public ?string $role,
        public array $permissions,
        public array $settings
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        public null|string $avatar,
        public null|string $role,
        public array $permissions,
        public array $settings,
>>>>>>> b93ef594b4 (.)
    ) {}
}
=======
    ) {
    }
} 
>>>>>>> origin/develop
>>>>>>> 1899c5f (.)
