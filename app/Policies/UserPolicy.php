<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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

    public function edit(User $currentuser, User $user){
        return $currentuser->is($user);
    }

    public function follow(User $currentuser, User $user){
        return $currentuser->isNot($user);
    }
}
