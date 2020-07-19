<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index(){
        return view('pages.explore',['users'=>User::all()->except(auth()->id())]);
    }
}
