<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function indexHome(Request $req){
        return view('front.index');
    } 

    public function archiveHome(Request $req){
        return view('front.archive');
    }

    public function categoryHome(Request $req){
        return view('front.category');
    }

    public function blog_detailsHome(Request $req){
        return view('front.blog-details');
    }

    public function contactHome(Request $req){
        return view('front.contact');
    }

    public function register_admin(Request $req){
        return view('front.register');
    }

    public function login_admin(Request $req){
        return view('front.login');
    }
}
