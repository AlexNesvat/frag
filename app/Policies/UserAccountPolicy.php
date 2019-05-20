<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserAccountPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function before($user, $ability)
    {
        if($user->role == 'administrator'){
            return true;
        }
    }

    public function updateAccount(User $user)
    {
        return $user->role == 'subscriber';
    }
}
