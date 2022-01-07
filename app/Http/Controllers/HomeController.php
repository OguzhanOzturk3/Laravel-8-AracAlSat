<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

   public static function categoryList()
   {
       return Category::where('parent_id','=',0)->with('children')->get();
   }

    public static function getsetting()
    {

        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Car::select('id','title','image','price')->limit(4)->get();
      //  print_r($slider);
      //exit();
        $data= [
            'setting'=>$setting,
            'slider'=>$slider,
            'page'=>'home'
        ];

        return view('home.index',$data);
    }





    public function car($id)
    {
        $data = Car::find($id);
        print_r($data);
        exit();
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function references()
    {

        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }

    public function faq()
    {

        return view('home.about');
    }

    public function contact()
    {

        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request)
    {
        $data= new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->ipaddress = $_SERVER["REMOTE_ADDR"];
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('info','Message Sended.');
    }



    public function test($id,$name)
    {
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',['id'=>$id, 'name'=>$name]);

    }
    public function login()
    {
        return view('admin.login');
    }
    public function logincheck(Request  $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email'=>'The provided credentials do not math our records.'
            ]);
        }
        else{
            return view('admin.login');
        }
    }
    public function logout(Request  $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
