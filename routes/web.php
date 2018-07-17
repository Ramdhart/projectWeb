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

Auth::routes();


Route::get('/', 'HomeController@indexs')->name('home');
Route::get('/home',function(){
	return redirect('/');
});
Route::get('/test',function(){
	return Auth::user()->name;
});
Route::get('/destinasi/kawahijen',function(){
	return view('main_project.kawah_ijen');
});
Route::get('/navbar/about',function(){
	return view('main_project.about');
});
Route::get('/navbar/contacts',function(){
	return view('main_project.contacts');
});
Route::get('/destinasi/kepulauan_seribu',function(){
	return view('main_project.kepulauan_seribu');
});
Route::get('/destinasi/pantai_krakal',function(){
	return view('main_project.pantai');
});
Route::get('/destinasi/Rano_Kumbolo',function(){
	return view('main_project.rano_kumbolo');
});
Route::get('/destinasi/hutan_pinus',function(){
	return view('main_project.hutan_pinus');
});
Route::get('/destinasi/tanah_lot',function(){
	return view('main_project.tanah_lot');
});
Route::get('/kontribusis',function(){
	return view('main_project.kontribusi');
});
 Route::post('/kontribusis','HomeController@kontribusi');
 Route::get('/kontribusis/list','HomeController@kontribusilist');
 Route::post('/kontribusis/list','HomeController@kontribusilist');