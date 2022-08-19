<?php

namespace App\Policies\Seller\Dashboard;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RestaurantInformation
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
    public function viewAny()
    {
        // return auth()->user->id === $post->user_id;
        return true;
    }
}
