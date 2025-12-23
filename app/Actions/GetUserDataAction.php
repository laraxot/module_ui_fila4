<?php

declare(strict_types=1);

namespace Modules\UI\Actions;

use Illuminate\Support\Facades\Auth;
use Modules\UI\Data\UserData;
use Modules\User\Models\User;
use Spatie\QueueableAction\QueueableAction;

class GetUserDataAction
{
    use QueueableAction;

    public function execute(): ?UserData
    {
        $user = Auth::user();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$user instanceof User) {
=======
        if (! $user instanceof User) {
>>>>>>> 359d970 (.)
=======
        if (! $user instanceof User) {
>>>>>>> 161e28f (Lint)
=======
        if (! $user instanceof User) {
>>>>>>> a8fbb3e (.)
=======
        if (! $user instanceof User) {
>>>>>>> 24eb066 (Lint)
=======
        if (! $user instanceof User) {
>>>>>>> laraxot/develop
            return null;
        }

        // Get avatar from profile_photo_path or profile relation
        $avatarValue = null;
        if (isset($user->profile_photo_path) && is_string($user->profile_photo_path)) {
            $avatarValue = $user->profile_photo_path;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        } elseif ($user->relationLoaded('profile') && $user->profile !== null) {
=======
        } elseif ($user->relationLoaded('profile') && null !== $user->profile) {
>>>>>>> 359d970 (.)
=======
        } elseif ($user->relationLoaded('profile') && null !== $user->profile) {
>>>>>>> 161e28f (Lint)
=======
        } elseif ($user->relationLoaded('profile') && null !== $user->profile) {
>>>>>>> a8fbb3e (.)
=======
        } elseif ($user->relationLoaded('profile') && null !== $user->profile) {
>>>>>>> 24eb066 (Lint)
=======
        } elseif ($user->relationLoaded('profile') && null !== $user->profile) {
>>>>>>> laraxot/develop
            $profile = $user->profile;
            if (is_object($profile) && method_exists($profile, 'getAvatarUrl')) {
                $avatarValue = $profile->getAvatarUrl();
            } elseif (is_object($profile) && isset($profile->avatar) && is_string($profile->avatar)) {
                $avatarValue = $profile->avatar;
            }
        }

        // Get role name using Spatie Permissions getRoleNames()
        // User extends HasRoles trait which provides getRoleNames()
        $roleNames = $user->getRoleNames();
        $firstRole = $roleNames->isNotEmpty() ? $roleNames->first() : null;
        $roleValue = is_string($firstRole) ? $firstRole : null;

        // Get settings - could be in profile or extra attributes
        $settingsArray = [];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($user->relationLoaded('profile') && $user->profile !== null) {
=======
        if ($user->relationLoaded('profile') && null !== $user->profile) {
>>>>>>> 359d970 (.)
=======
        if ($user->relationLoaded('profile') && null !== $user->profile) {
>>>>>>> 161e28f (Lint)
=======
        if ($user->relationLoaded('profile') && null !== $user->profile) {
>>>>>>> a8fbb3e (.)
=======
        if ($user->relationLoaded('profile') && null !== $user->profile) {
>>>>>>> 24eb066 (Lint)
=======
        if ($user->relationLoaded('profile') && null !== $user->profile) {
>>>>>>> laraxot/develop
            $profile = $user->profile;
            if (is_object($profile) && isset($profile->extra)) {
                $extra = $profile->extra;
                $settingsArray = is_array($extra) ? $extra : [];
            }
        }

        // Get permissions as array
        $permissionsArray = [];
        if (isset($user->permissions)) {
            if (is_array($user->permissions)) {
                $permissionsArray = $user->permissions;
            } elseif (is_object($user->permissions) && method_exists($user->permissions, 'toArray')) {
                $permissionsArray = $user->permissions->toArray();
            } elseif (is_object($user->permissions) && method_exists($user->permissions, 'pluck')) {
                $permissionsArray = $user->permissions->pluck('name')->toArray();
            }
        }

        return new UserData(
            id: (int) $user->id,
            name: (string) ($user->name ?? ''),
            email: (string) ($user->email ?? ''),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            avatar: $avatarValue !== null ? (string) $avatarValue : null,
            role: $roleValue !== null ? (string) $roleValue : null,
=======
            avatar: null !== $avatarValue ? (string) $avatarValue : null,
            role: null !== $roleValue ? (string) $roleValue : null,
>>>>>>> 359d970 (.)
=======
            avatar: null !== $avatarValue ? (string) $avatarValue : null,
            role: null !== $roleValue ? (string) $roleValue : null,
>>>>>>> 161e28f (Lint)
=======
            avatar: null !== $avatarValue ? (string) $avatarValue : null,
            role: null !== $roleValue ? (string) $roleValue : null,
>>>>>>> a8fbb3e (.)
=======
            avatar: null !== $avatarValue ? (string) $avatarValue : null,
            role: null !== $roleValue ? (string) $roleValue : null,
>>>>>>> 24eb066 (Lint)
=======
            avatar: null !== $avatarValue ? (string) $avatarValue : null,
            role: null !== $roleValue ? (string) $roleValue : null,
>>>>>>> laraxot/develop
            permissions: $permissionsArray,
            settings: $settingsArray,
        );
    }
}
