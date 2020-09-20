<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Kiwi;
class HistoryController extends Controller
{
    public function __invoke()
    {
        return view('pages.history',['kiwis'=>Kiwi::LikedKiwis()->paginate(5)]);
    }
}
