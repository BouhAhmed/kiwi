<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Kiwi;
use App\Profile;
class User extends Authenticatable
{
    use Notifiable,Followable;

    public function kiwis(){
        return $this->hasMany(Kiwi::class);
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function timeline(){
        //return Kiwi::where('user_id',$this->id)->latest()->get();
        $ids = $this->follows()->pluck('following_user_id');
        $ids->push($this->id);
        return Kiwi::whereIn('user_id',$ids)->latest()->get();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','avatar','cover','name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'username';
    }
}
