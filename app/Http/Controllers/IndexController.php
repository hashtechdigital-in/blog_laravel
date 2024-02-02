<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    function indexHome(Request $req){
        return view('front.index');
    } 

    function archiveHome(Request $req){
        return view('front.archive');
    }

    function categoryHome(Request $req){
        return view('front.category');
    }

    function blog_detailsHome(Request $req){
        return view('front.blog-details');
    }

    function contactHome(Request $req){
        return view('front.contact');
    }
}
