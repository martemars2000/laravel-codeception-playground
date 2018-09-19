<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function mymethod($param)
	{
		echo 'Your name is '.$param;
	}

	public function methodPost()
	{
		echo 'Your name is '.Input::get('username');
	}

	public function methodPostApi()
	{
		$message = 'Your name is '.Input::get('username');
		return json_encode(array('status' => 200, 'message' => $message));
	}

}
