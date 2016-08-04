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

	Route::get('/home', 'HomeController@index');

	#Administrator		
	Route::group(array('prefix' => 'admin'), function() {
		Route::group(array('prefix' => 'workforce'), function() {
			Route::get('add', 'WorkforceController@insertForm');
		 	Route::get('update/{id}', 'WorkforceController@updateForm');		 	
		 	Route::get('insert', 'WorkforceController@insertForm');	

		 	Route::post('addData', 'WorkforceController@insertData');
		 	Route::post('updateData', 'WorkforceController@updateData');
		 	Route::post('delete', 'WorkforceController@deleteData'); 		 	
		});
		
		Route::get('workforce', 'WorkforceController@index');

		Route::get('agent-eval/{id}', 'AgentController@getData');

		Route::post('changePassword', 'UserController@changePassword');
	});
	#End Administrator
});