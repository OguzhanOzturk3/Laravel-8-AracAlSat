<?php

use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home2', function () {
    return view('welcome');
});

Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/', function () {
    return view('home.index',['name' => 'Oguzhan']);
});

//shop
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/car/{id}', [HomeController::class, 'car'])->name('car');
Route::get('/categorycars/{id}', [HomeController::class, 'categorycars'])->name('categorycars');
Route::get('/addtocart/{id}', [HomeController::class, 'addtocart'])->name('addtocart');
Route::post('/getcar', [HomeController::class, 'getcar'])->name('getcar');
Route::get('/carlist/{search}', [HomeController::class, 'carlist'])->name('carlist');


//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

//Admin
Route::middleware('auth')->prefix('admin')->group(function (){

    //Admin role
    Route::middleware('admin')->group(function () {

    Route::get('/',[\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_home');

    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
#Car
    Route::prefix('car')->group(function(){
        Route::get('/',[\App\Http\Controllers\Admin\CarController::class, 'index'])->name('admin_car');
        Route::get('create',[\App\Http\Controllers\Admin\CarController::class, 'create'])->name('admin_car_add');
        Route::post('store',[\App\Http\Controllers\Admin\CarController::class, 'store'])->name('admin_car_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\CarController::class, 'edit'])->name('admin_car_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\CarController::class, 'update'])->name('admin_car_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\CarController::class, 'destroy'])->name('admin_car_delete');
        Route::get('show',[\App\Http\Controllers\Admin\CarController::class, 'show'])->name('admin_car_show');

    });

    #Message
    Route::prefix('messages')->group(function(){
        Route::get('/',[MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}',[MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}',[MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show',[MessageController::class, 'show'])->name('admin_message_show');

    });




    #Car image
    Route::prefix('image')->group(function(){

        Route::get('create/{car_id}',[\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{car_id}',[\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{car_id}',[\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');

    });

    #Review
    Route::prefix('review')->group(function(){

        Route::get('/',[\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
        Route::get('show/{id}',[\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');

    });


    # Setting
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');



    #Faq
    Route::prefix('faq')->group(function(){
        Route::get('/',[\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
        Route::get('create',[\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('store',[\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('show',[\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');

    });
});
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){

    Route::get('/',[UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews',[UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}',[UserController::class, 'destroymyreview'])->name('user_review_delete');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){

    Route::get('/profile',[UserController::class, 'index'])->name('userprofile');


    #Car
    Route::prefix('car')->group(function(){
        Route::get('/',[\App\Http\Controllers\CarController::class, 'index'])->name('user_car');
        Route::get('create',[\App\Http\Controllers\CarController::class, 'create'])->name('user_car_add');
        Route::post('store',[\App\Http\Controllers\CarController::class, 'store'])->name('user_car_store');
        Route::get('edit/{id}',[\App\Http\Controllers\CarController::class, 'edit'])->name('user_car_edit');
        Route::post('update/{id}',[\App\Http\Controllers\CarController::class, 'update'])->name('user_car_update');
        Route::get('delete/{id}',[\App\Http\Controllers\CarController::class, 'destroy'])->name('user_car_delete');
        Route::get('show',[\App\Http\Controllers\CarController::class, 'show'])->name('user_car_show');

    });

    #Car image
    Route::prefix('image')->group(function(){

        Route::get('create/{car_id}',[\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('user_image_add');
        Route::post('store/{car_id}',[\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('user_image_store');
        Route::get('delete/{id}/{car_id}',[\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('user_image_show');

    });

});

Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware('auth');

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



