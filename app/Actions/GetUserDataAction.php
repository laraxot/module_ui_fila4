<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> 727968c (.)
=======
declare(strict_types=1);


>>>>>>> ef3c5fa (.)
namespace Modules\UI\Actions;

use Illuminate\Support\Facades\Auth;
use Modules\UI\Data\UserData;
use Spatie\QueueableAction\QueueableAction;

class GetUserDataAction
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ef3c5fa (.)
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
    public function execute(): UserData
    {
        $user = Auth::user();

        return new UserData(
            id: $user->id,
            name: $user->name,
            email: $user->email,
            avatar: $user->avatar,
            role: $user->role,
            permissions: $user->permissions,
            settings: $user->settings
        );
    }
} 
>>>>>>> 727968c (.)
=======
>>>>>>> ef3c5fa (.)
