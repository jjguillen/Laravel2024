<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Torneo;
use Illuminate\Auth\Access\Response;

class TorneoPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function delete(User $user)
    {
        return $user->rol === "admin";
    }

    
}
