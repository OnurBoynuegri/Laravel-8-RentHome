<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public static function getsetting()
    {
        return Setting::first();
    }
    //
    public function index(){

       $setting=Setting::first();
        return view('home.index', ['setting' => $setting]);
    }
    public function aboutus(){
        return view('home.about');
    }
    public function reference(){

        return view('home.references');
    }
    public function faq(){

        return view('home.about');
    }
    public function contact(){

        return view('home.contact');
    }



    public function login(){
        return view("admin.login");
    }


    public function loginCheck(Request $request)
    {

     if ($request->isMethod('post'))
     {
        $credentials= $request->only('email','password');
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('admin');
        }
        return back()->withErrors([
            'email'=>'The provided credentials do not match our records.'
        ]);
     }
     else{
         return view('admin.login');
     }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function test($id,$name){
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data);
        //return view('home.test',['id'=>$id,'name'=>$name]);
        /*
        echo "id number : ",$id;
        echo "<br> name : ",$name;
        */
    }

}
