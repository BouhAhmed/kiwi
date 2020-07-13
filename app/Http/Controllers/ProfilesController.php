<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function index(User $user){
        return view('pages.profile',['user'=>$user]);
    }

    public function follow(User $user){
        auth()->user()->toggleFollow($user);
        return redirect()->route('profile',$user);
    }

    public function edit(User $user){
        return view('pages.editprofile',['user'=>$user]);
    }


    public function update(User $user){
        $attrs = request()->validate([
            'username' => ['required', 'string', 'max:255','alpha_dash',Rule::unique('users','username')->ignore($user->username)],
            'name' => ['required','string','max:255','unique:users'],
            'avatar'=>['image'],
            'password' => ['required','string', 'confirmed'],
            ]);

        $user->update($attrs);
        exit();
        return redirect()->route('profile',$user);

    }
}
