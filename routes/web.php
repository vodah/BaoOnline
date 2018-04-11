<?php

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
        });


    });
});

//Route::get('/home', 'HomeController@index')->name('home');
