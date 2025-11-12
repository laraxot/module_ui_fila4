<?php

declare(strict_types=1);

namespace Modules\UI\Actions;

use Illuminate\Support\Facades\Auth;
use Modules\UI\Data\UserData;
use Spatie\QueueableAction\QueueableAction;

final class GetUserDataAction
{
    use QueueableAction;

    /**
     * Execute action to get authenticated user data.
     */
    public function execute(): ?UserData
    {
        $user = Auth::user();

        if (! $user) {
            return null;
        }

        return $this->buildUserData($user);
    }

    /**
     * Build UserData from authenticated user.
     */
    private function buildUserData(mixed $user): UserData
    {
        return new UserData(
            id: $this->extractUserId($user),
            name: $this->extractUserName($user),
            email: $this->extractUserEmail($user),
            avatar: $this->extractAvatar($user),
            role: $this->extractRole($user),
            permissions: $this->extractPermissions($user),
            settings: $this->extractSettings($user),
        );
    }

    /**
     * Extract user ID.
     */
    private function extractUserId(mixed $user): int
    {
        if (! is_object($user) || ! isset($user->id)) {
            return 0;
        }

        return (int) $user->id;
    }

    /**
     * Extract user name.
     */
    private function extractUserName(mixed $user): string
    {
        if (! is_object($user) || ! isset($user->name)) {
            return '';
        }

        return is_string($user->name) ? $user->name : '';
    }

    /**
     * Extract user email.
     */
    private function extractUserEmail(mixed $user): string
    {
        if (! is_object($user) || ! isset($user->email)) {
            return '';
        }

        return is_string($user->email) ? $user->email : '';
    }

    /**
     * Extract user avatar.
     */
    private function extractAvatar(mixed $user): ?string
    {
        if (! is_object($user) || ! isset($user->avatar)) {
            return null;
        }

        return is_string($user->avatar) ? $user->avatar : null;
    }

    /**
     * Extract user role.
     */
    private function extractRole(mixed $user): ?string
    {
        if (! is_object($user) || ! isset($user->role)) {
            return null;
        }

        return is_string($user->role) ? $user->role : null;
    }

    /**
     * Extract user permissions.
     *
     * @return array<int|string, mixed>
     */
    private function extractPermissions(mixed $user): array
    {
        if (! is_object($user) || ! isset($user->permissions)) {
            return [];
        }

        if (! is_object($user->permissions) || ! method_exists($user->permissions, 'toArray')) {
            return [];
        }

        $permissions = $user->permissions->toArray();

        return is_array($permissions) ? $permissions : [];
    }

    /**
     * Extract user settings.
     *
     * @return array<int|string, mixed>
     */
    private function extractSettings(mixed $user): array
    {
        if (! is_object($user) || ! isset($user->settings)) {
            return [];
        }

        return is_array($user->settings) ? $user->settings : [];
    }
}
