<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kiwi;
use App\User;
class Like extends Model
{
    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kiwi()
    {
        return $this->belongsTo(Kiwi::class);
    }
}
