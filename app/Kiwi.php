<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Kiwi extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->BelongsTo(User::class);
    }
}
