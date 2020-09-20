<?php

namespace App\Http\Controllers;
use App\Kiwi;
use Illuminate\Http\Request;

class KiwisController extends Controller
{

    public function index()
    {
        return view('pages.index',['kiwis'=>auth()->user()->timeline()]);
    }

    public function like(Kiwi $kiwi){
        $kiwi->like();
        return redirect()->back();
    }

    public function dislike(Kiwi $kiwi){
        $kiwi->dislike();
        return redirect()->back();
    }

    public function store(){
        request()->validate([
            'body'=>'required|max:255'
        ]);

        Kiwi::create([
            'body'=> request('body'),
            'user_id' => auth()->id()
        ]);

        return redirect()->back();

    }
}
