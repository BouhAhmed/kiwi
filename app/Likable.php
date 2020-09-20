<?php

namespace App;
use App\User;
use App\Kiwi;
use Illuminate\Database\Eloquent\Builder;

trait Likable
{
    public function scopeWithLikes(Builder $query){
        $query->leftJoinSub(
        'select kiwi_id,sum(liked) likes,sum(!liked) dislikes from likes GROUP BY kiwi_id',
        'likes',
        'likes.kiwi_id',
        'kiwis.id');
    }

    public function scopeLikedKiwis(Builder $query){
        $current_user =auth()->user()->id;
        $query->joinSub(
        "select kiwi_id,sum(liked) likes,sum(!liked) dislikes from likes where user_id = $current_user GROUP BY kiwi_id",
        'likes',
        'likes.kiwi_id',
        'kiwis.id');
    }


    public function like($like=true){
        $this->likes()->updateOrCreate([
            'user_id'=>auth()->user()->id
        ],
        ['liked' => $like],
        ['kiwi_id'=>$this->id]
    );
    }
    public function dislike(){
        $this->like(false);
    }


    public function isLikedBy(){
        return (bool)auth()->user()->likes
        ->where('kiwi_id',$this->id)
        ->where('liked',true)
        ->count();
    }

    public function isDislikedBy(){
        return (bool)auth()->user()->likes
        ->where('kiwi_id',$this->id)
        ->where('liked',false)
        ->count();
    }


}
