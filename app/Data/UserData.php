<?php

declare(strict_types=1);

namespace Modules\UI\Data;

use Spatie\LaravelData\Data;

final class UserData extends Data
{
    public function __construct(
        public int $id,
        public string $name,
        public string $email,
        public ?string $avatar,
        public ?string $role,
        public array $permissions,
        public array $settings,
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
>>>>>>> 161e28f (Lint)
=======
    ) {
    }
>>>>>>> laraxot/develop
}
