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

        $role = $user->role ?? null;
        if ($role !== null && ! is_string($role)) {
            $role = null;
        }

        $settings = $user->settings ?? [];
        if (! is_array($settings)) {
            $settings = [];
        }

        return new UserData(
            id: (int) $user->id,
            name: $user->name ?? '',
            email: $user->email ?? '',
            avatar: $user->avatar ?? null,
            role: $role,
            permissions: $user->permissions->toArray() ?? [],
            settings: $settings,
        );
    }
}
