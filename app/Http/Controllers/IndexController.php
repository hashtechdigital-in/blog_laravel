<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    function indexHome(Request $req){
        return view('front.index');
    }
}
