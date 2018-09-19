<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{	
	return View::make('content');
});


Route::get('/test', function()
{
	return json_encode(array('status' => 200, 'message' => 'OK'));
});

Route::get('/testcontroller/{param?}', 'HomeController@mymethod');

Route::post('/testpost', 'HomeController@methodPost');

Route::post('/testpostapi', 'HomeController@methodPostApi');