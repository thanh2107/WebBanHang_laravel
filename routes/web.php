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

// Route::get('/', function () {
//     return view('welcome');
// });


	Route::get('index',[
		
		'uses'=>'App\Http\Controllers\HomeController@getIndex',
		'as'=>'trang-chu'
	]);


Route::get('loai-san-pham/{loaisp}',[
		
		'uses'=>'App\Http\Controllers\HomeController@getLoaiSp',
		'as'=>'loai-san-pham'
	]);

Route::get('chi-tiet-san-pham/{id}',[
		
		'uses'=>'App\Http\Controllers\HomeController@getChiTiet',
		'as'=>'chi-tiet-san-pham'
	]);

Route::get('lien-he',[
		
		'uses'=>'App\Http\Controllers\HomeController@getLienHe',
		'as'=>'lien-he'
	]);

Route::get('gio-hang',[
		
		'uses'=>'App\Http\Controllers\HomeController@getGioHang',
		'as'=>'gio-hang'
	]);
Route::get('thanh-toan',[
		
		'uses'=>'App\Http\Controllers\HomeController@getThanhToan',
		'as'=>'thanh-toan'
	]);
Route::get('Login',[
		
		'uses'=>'App\Http\Controllers\HomeController@getLogin',
		'as'=>'login'
	]);

Route::post('Login',[
		
		'uses'=>'App\Http\Controllers\HomeController@postLogin',
		'as'=>'login'
	]);

Route::post('register',[
		
		'uses'=>'App\Http\Controllers\HomeController@postRegister',
		'as'=>'register'
	]);
Route::get('logout',[
		
		'uses'=>'App\Http\Controllers\HomeController@getLogout',
		'as'=>'logout'
	]);