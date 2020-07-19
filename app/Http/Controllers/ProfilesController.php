<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
class ProfilesController extends Controller
{
    public function index(User $user){
        return view('pages.profile',['user'=>$user]);
    }

    public function follow(User $user){
        auth()->user()->toggleFollow($user);
        return redirect()->back();
    }

    public function edit(User $user){
        return view('pages.editprofile',['user'=>$user]);
    }


    public function update(User $user){
        $output = null;
        $attrs = request()->validate([
            'username' => ['required', 'string', 'max:255','alpha_dash',Rule::unique('users')->ignore($user)],
            'name' => ['string','required','string','max:255'],
            'avatar' => 'file|mimes:jpeg,png,jpg,gif,svg',
            'desc' => ['min:3,max:1000'],
            'email'=>['string','required','email','max:255'],
            'password' => ['required','string','max:255','confirmed'],
            ]);
        if(request('avatar')){
            $attrs['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attrs);
        return redirect()->back()->with('success','Your Profile Updated successfully !');

    }
}
