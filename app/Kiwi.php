<?php

namespace App;
use App\User;
use App\Like;
use Illuminate\Database\Eloquent\Model;

class Kiwi extends Model
{
    use Likable;

    protected $guarded = [];

    public function user(){
        return $this->BelongsTo(User::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }



}
