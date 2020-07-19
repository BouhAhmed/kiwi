<?php

namespace App;
use App\User;

trait Followable
{
    public function follows(){
        return $this->BelongsToMany(User::class , 'follows', 'user_id', 'following_user_id')->withTimestamps();
    }


    public function following(User $user){
        return $this->follows()->where('following_user_id',$user->id)->exists();
    }

    public function toggleFollow(User $user){
        $this->follows()->toggle($user);
    }

}
