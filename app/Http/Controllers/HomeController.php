<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Image;
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
        $daily = Car::select('id','title','image','price')->limit(8)->inRandomOrder()->get();
        $last = Car::select('id','title','image','price')->limit(8)->orderByDesc('id')->get();
        $picked = Car::select('id','title','image','price')->limit(8)->inRandomOrder()->get();
      // print_r($picked);
      //exit();
        $data= [
            'setting'=>$setting,
            'slider'=>$slider,
            'daily'=>$daily,
            'last'=>$last,
            'picked'=>$picked,
            'page'=>'home'
        ];

        return view('home.index',$data);
    }





    public function car($id)
    {
        $data = Car::find($id);
        $datalist = Image::where('car_id',$id)->get();
        #print_r($data);
        #exit();
        return view('home.car_detail',['data'=>$data,'datalist'=>$datalist]);
    }

    public function addtocart($id)
    {
        echo "ADDtoCart <br>" ;
        $data = Car::find($id);
        print_r($data);
        exit();
    }


    public function categorycars($id)
    {
        $datalist = Car::where('category_id',$id)->get();
        $data = Category::find($id);
        return view('home.category_cars',['data'=>$data,'datalist'=>$datalist]);

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
