<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class UserAccountPolicy
 * @package App\Policies
 */
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

    /**
     * @param $user
     * @param $ability
     * @return bool
     */
    public function before($user, $ability)
    {
        if($user->role == 'administrator'){
            return true;
        }
    }

    /**
     * @param User $user
     * @return bool
     */
    public function updateAccount(User $user)
    {
        return $user->role == 'subscriber';
    }
}
