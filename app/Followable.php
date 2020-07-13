<?php

namespace App;
use App\User;

trait Followable
{
    public function follows(){
        return $this->BelongsToMany(User::class , 'follows', 'user_id', 'following_user_id')->withTimestamps();
    }

    public function follow(User $user){
        return $this->follows()->save($user);
    }

    public function unFollow(User $user){
        return $this->follows()->detach($user);
    }

    public function following(User $user){
        return $this->follows()->where('following_user_id',$user->id)->exists();
    }

    public function toggleFollow(User $user){
        if($this->following($user)){
            $this->unFollow($user);
        }
        else{
            $this->follow($user);
        }

    }

}
