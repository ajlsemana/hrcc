<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'web'], function () {
	Route::auth();	

    Route::get('/', function () {
    	if(Auth::guest()) {
    		return view('auth/login');
    	}
    	return view('main');
	});

	Route::get('access', function () {
    	echo 'You have access!!!';
	})->middleware('isAdmin');

	Route::get('/home', 'HomeController@index');
	
	#Administrator
	Route::get('users', 'UserController@index');
	Route::group(array('prefix' => 'admin'), function() {
		Route::group(array('prefix' => 'users'), function() {
			Route::get('add', 'UserController@insertForm');
		 	Route::get('update', 'UserController@updateForm');		 	
		 	Route::get('insert', 'UserController@insertForm');	
		 	Route::post('addData', 'UserController@insertData');
		 	Route::post('updateData', 'UserController@updateData');
		 	Route::post('delete', 'UserController@deleteData'); 
		 	Route::post('changePassword', 'UserController@changePassword');
		});
	});
	#End Administrator
});