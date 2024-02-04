<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Image;
use Auth;

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

        if($req->isMethod('post')){
            $data = $req->all();
            //dd($data); die();
            $adminCount = Admin::where('email',$data['email'])->count();

            //upload admin photo
            if($req->hasFile('admin_img')){
                $image_tmp = $req->file('admin_img');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension(); 
                    $NewimageName = $data['first_name'].rand(111,999).'.'.$extension;
                    $imagePath = 'admin/admin_image/'.$NewimageName;
                    Image::make($image_tmp)->resize(30,30)->save($imagePath); 

                }
            }else if(!empty($data['current_admin_image'])){
                $NewimageName = $data['current_admin_image'];
            }else{
                $NewimageName = ""; 
            }

            if($adminCount > 0 ){
                return redirect()->back();
            }else{
                $admin = new Admin;
                $admin->name = $data['first_name'];
                $admin->mobile = $data['phone'];
                $admin->email = $data['email'];
                $admin->password = bcrypt($data['password']);
                $admin->image = $NewimageName;
                $admin->type = $data['type'];
                $admin->status = 1;
                $admin->save();
                return redirect('login_admin');
            }
        }
        
          return view('front.register');
    }

    public function login_admin(Request $req){

        if($req->isMethod('POST')){
            $data = $req->all();
            //dd($data); die();
            if (Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1])) { 
                return redirect('/admin/dashboard');
             }
        }

        return view('front.login');
    }
}
