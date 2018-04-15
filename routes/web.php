<?php
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'home'], function () {
    Route::get('login', function ($msg = null) {
        return view('admin.auth.login');
    })->name('login');


    Auth::routes();

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', function () {
            return view('layouts.admin');
        })->name('admin');

        Route::Group(['prefix' => 'danhmuc'], function () {
            Route::get('/', 'Admin\DanhMucController@index')->name('danhmuc.list');
            Route::get('them', 'Admin\DanhMucController@them')->name('danhmuc.them');
            Route::get('sua/{id}', 'Admin\DanhMucController@update')->name('danhmuc.sua');
            Route::get('xoa/{id}', 'Admin\DanhMucController@xoa')->name('danhmuc.xoa');
            Route::post('luu', 'Admin\DanhMucController@luu')->name('danhmuc.luu');
        });
        Route::Group(['prefix'=> 'baidang'], function (){
            Route::get('/', 'Admin\BaiDangController@index')->name('baidang.list');
            Route::get('them', 'Admin\BaiDangController@them')->name('baidang.them');
            Route::get('xoa/{id}', 'Admin\BaiDangController@xoa')->name('baidang.xoa');
            Route::get('sua/{id}', 'Admin\BaiDangController@sua')->name('baidang.sua');
            Route::post('luu', 'Admin\BaiDangController@luu')->name('baidang.luu');

        });

        Route::post('generate-slug', function(Request $request){
            $slug = str_slug($request->input('TieuDe'), '-');
            $slug .= '-' . uniqid();
            return response()->json(['slug' => $slug]);
        })->name('generate.slug');

        Route::post('danhmuc-slug', function(Request $request){
            $slug = str_slug($request->input('TenDanhMuc'), '-');
            return response()->json(['slug' => $slug]);
        })->name('tendanhmuc.slug');


    });
});

//Route::get('/home', 'HomeController@index')->name('home');
