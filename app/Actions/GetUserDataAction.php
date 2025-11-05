<?php

declare(strict_types=1);

namespace Modules\UI\Actions;

use Illuminate\Support\Facades\Auth;
use Modules\UI\Data\UserData;
use Spatie\QueueableAction\QueueableAction;

class GetUserDataAction
{
    use QueueableAction;

    public function execute(): ?UserData
    {
        $user = Auth::user();

        if (! $user) {
            return null;
        }

        $avatar = $user->avatar ?? null;
        $avatar = is_string($avatar) ? $avatar : null;

        $role = $user->role ?? null;
        $role = is_string($role) ? $role : null;

        $settings = $user->settings ?? null;
        $settings = is_array($settings) ? $settings : [];

        return new UserData(
            id: (int) $user->id,
            name: $user->name ?? '',
            email: $user->email ?? '',
            avatar: $avatar,
            role: $role,
            permissions: is_object($user->permissions) ? $user->permissions->toArray() : [],
            settings: $settings,
        );
    }
}
