<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\House;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }

    //
    public function index()
    {

        $setting = Setting::first();
        $slider = House::select('id', 'title', 'image', 'price', 'slug')->where('status', '!=', 'False')->limit(4)->get();
        $random = House::select('id', 'title', 'image', 'price', 'slug')->where('status', '!=', 'False')->limit(9)->inRandomOrder()->get();
        $last = House::select('id', 'title', 'image', 'price', 'slug')->where('status', '!=', 'False')->orderByDesc('id')->get();
        #print_r($slider);
        #exit();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'last' => $last,
            'random' => $random,
        ];
        return view('home.index', $data);
    }

    public function house($id, $slug)
    {
        $data = House::find($id);

        $datalist = Image::where('house_id', $id)->get();
        #print_r($data);
        #exit();
        return view('home.house_detail', ['datalist' => $datalist, 'data' => $data]);
    }

    public function gethouse(Request $request)
    {
        $search = $request->input('search');
        $count = House::where('title', 'like', '%' . $search . '%')->where('status', '!=', 'False')->get()->count();
        if ($count == 1) {
            $data = House::where('title', 'like', '%' . $search . '%')->where('status', '!=', 'False')->first();
            return redirect()->route('house', ['id' => $data->id, 'slug' => $data->slug]);
        } else {
            return redirect()->route('houselist', ['search' => $search]);
        }
    }

    public function houselist($search)
    {
        $datalist = House::where('title', 'like', '%' . $search . '%')->where('status', '!=', 'False')->get();

        $data = House::where('title', 'like', '%' . $search . '%')->first();
        return view('home.search_houses', ['search' => $search, 'datalist' => $datalist]);

    }

    public function categoryhouses($id, $slug)
    {
        $datalist = House::where('category_id', $id)->where('status', '!=', 'False')->get();
        $data = Category::find($id);
        #print_r($data);
        #exit();
        return view('home.category_houses', ['datalist' => $datalist, 'data' => $data]);
    }

    public function aboutus()
    {
        return view('home.about');
    }

    public function reference()
    {

        return view('home.references');
    }

    public function faq()
    {
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq', ['datalist' => $datalist]);
    }

    public function contact()
    {

        return view('home.contact');
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = Auth::user()->phone;
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');

        $data->save();
        return redirect()->route('contact')->with('success', 'Mesajınız Kaydedilmiştir. Teşekkür Ederiz.');
    }


    public function login()
    {
        return view("admin.login");
    }


    public function loginCheck(Request $request)
    {

        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('/');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ]);
        } else {
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

    public function test($id, $name)
    {
        $data['id'] = $id;
        $data['name'] = $name;
        return view('home.test', $data);
        //return view('home.test',['id'=>$id,'name'=>$name]);
        /*
        echo "id number : ",$id;
        echo "<br> name : ",$name;
        */
    }

}
