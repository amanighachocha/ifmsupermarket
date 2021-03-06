<?php

namespace App\Policies;

use App\Models\User;
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


    /**
     * Allow only administrator to create user
     */
    public function create(User $user)
    {
        if($user->is_admin == 1){
            return true;
        }else{
            return false;
        }

        // return $user->is_admin === 1;
    }
}
