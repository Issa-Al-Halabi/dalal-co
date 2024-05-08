<?php

namespace App\Policies;

use App\Models\User;

class PanelPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function viewAny(User $user): bool
    {
        return $user->can('view_any_panel');
    }
}
