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

//Route::get('/', function () {
//    return view('welcome');
//    App\Http\Controllers\Index123456测试一下密钥;
    	
	Route::get('/sort', '\App\Http\Controllers\Index\IndexController@index');
//});
