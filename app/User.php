<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Kiwi;
use App\Profile;
use App\Like;
class User extends Authenticatable
{
    use Notifiable,Followable;

    public function kiwis(){
        return $this->hasMany(Kiwi::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function timeline(){
        //return Kiwi::where('user_id',$this->id)->latest()->get();
        $ids = $this->follows()->pluck('following_user_id');
        $ids->push($this->id);
        return Kiwi::withLikes()->whereIn('user_id',$ids)->latest()->paginate(15);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','avatar','cover','desc','name', 'email', 'password',
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

    public function getAvatar(){
        if($this->avatar){
            return asset($this->avatar);
        }

        return asset('/images/avatar.png');
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function getRouteKeyName()
    {
        return 'username';
    }


}
