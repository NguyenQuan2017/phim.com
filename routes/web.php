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
// Auth::routes();
Route::get('/',['as'=>'/','uses'=>'Admin\LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'Admin\LoginController@postLogin']);

Route::group(['middleware'=>'authen'],function(){
		Route::get('/dashboard',['as'=>'dashboard','uses'=>'Admin\DashboardController@dashboard']);
	Route::get('/logout',['as'=>'logout','uses'=>'Admin\LoginController@logout']);


		Route::get('admin/film/list','Admin\FilmController@index');
		Route::get('admin/film/add','Admin\FilmController@create');
		Route::post('admin/film/add','Admin\FilmController@store');
		Route::get('admin/film/edit/{id}','Admin\FilmController@show');
		Route::post('admin/film/edit','Admin\FilmController@update');
		Route::get('admin/film/delete/{id}','Admin\FilmController@destroy');

				//
		Route::get('admin/seasion/list','Admin\SeasionController@index');
		Route::get('admin/seasion/add','Admin\SeasionController@create');
		Route::post('admin/seasion/add','Admin\SeasionController@store');
		Route::get('admin/seasion/edit/{id}','Admin\SeasionController@show');
		Route::post('admin/seasion/edit','Admin\SeasionController@update');
		Route::get('admin/seasion/delete/{id}','Admin\SeasionController@destroy');

});








Route::get('/admin/dashboard',function(){
	return  view('admin/dashboard');
});


//
Route::get('admin/seasion/list','SeasionController@index');
Route::get('admin/seasion/add','SeasionController@create');
Route::post('admin/seasion/add','SeasionController@store');
Route::get('admin/seasion/edit/{id}','SeasionController@show');
Route::post('admin/seasion/edit','SeasionController@update');
Route::get('admin/seasion/delete/{id}','SeasionController@destroy');

//
Route::get('admin/episode/list','EpisodeController@index');
Route::get('admin/episode/add','EpisodeController@create');
Route::post('admin/episode/add','EpisodeController@store');
Route::get('admin/episode/edit/{id}','EpisodeController@show');
Route::post('admin/episode/edit','EpisodeController@update');
Route::get('admin/episode/delete/{id}','EpisodeController@destroy');
//User
Route::get('admin/user/list','UserController@index');
Route::get('admin/user/edit/{id}','UserController@show');
Route::post('admin/user/edit','UserController@update');
Route::get('admin/user/delete/{id}','UserController@destroy');


//Profile
Route::get('admin/user/profile',function(){
	return view('admin/user/profile');
});


// Route::get('/home', 'HomeController@index')->name('home');
