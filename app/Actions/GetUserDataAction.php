<?php

<<<<<<< HEAD
declare(strict_types=1);


=======
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
namespace Modules\UI\Actions;

use Illuminate\Support\Facades\Auth;
use Modules\UI\Data\UserData;
use Spatie\QueueableAction\QueueableAction;

class GetUserDataAction
{
    use QueueableAction;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1899c5f (.)
    public function execute(): null|UserData
    {
        $user = Auth::user();

        if (!$user) {
            return null;
        }

        return new UserData(
            id: (int) $user->id,
            name: $user->name ?? '',
            email: $user->email ?? '',
            avatar: $user->avatar ?? null,
            role: $user->role ?? null,
            permissions: $user->permissions->toArray() ?? [],
            settings: $user->settings ?? [],
        );
    }
}
<<<<<<< HEAD
=======
=======
    public function execute(): UserData
=======
    public function execute(): null|UserData
>>>>>>> b93ef594b4 (.)
    {
        $user = Auth::user();

        if (!$user) {
            return null;
        }

        return new UserData(
            id: (int) $user->id,
            name: $user->name ?? '',
            email: $user->email ?? '',
            avatar: $user->avatar ?? null,
            role: $user->role ?? null,
            permissions: $user->permissions->toArray() ?? [],
            settings: $user->settings ?? [],
        );
    }
<<<<<<< HEAD
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
>>>>>>> 1899c5f (.)
