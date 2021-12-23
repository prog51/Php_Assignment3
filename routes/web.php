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

/*Route::get('/', function () {
	
	
	$fruits = [
	
	    "Apple",
		"Orange",
		"Pear",
	];
    return view('/welcome', ['fruits' => $fruits, 'sample' => "Chicken foot"]);
});


Route::get('/contact', function(){

    return view('contact');
});*/

Route::get('/','PagesController@home');

Route::get('/contact','PagesController@contact');

Route::get('/about','PagesController@about');

Route::get('/academics','PagesController@academics');

Route::get('/admin','PagesController@dashboard')->middleware('auth');
Route::put('/admin','UserController@updateProfilePic')->middleware('auth');
/* below is for the crude control*/


Route::get('/login','UserController@loginPage')->middleware('guest');

Route::get('/logout','sessionsController@destroy')->middleware('auth');

Route::post('/login','sessionsController@store')->middleware('guest');

Route::get('/student/register','CrudeController@create');
Route::post('/student/register','CrudeController@store');
Route::get('/student/index','CrudeController@showAll')->middleware('auth');
Route::get('/student/{studentID}','CrudeController@show');
Route::put('/student/{studentID}','CrudeController@update1');
Route::delete('/student/index','CrudeController@destroy')->middleware('auth');




