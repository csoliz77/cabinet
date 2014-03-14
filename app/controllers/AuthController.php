<?php

class AuthController extends BaseController {

    public function getLogin()
    {
    	return View::make('user.login')->withTitle('Page Login');
    }

    public function postLogin()
    {
    	$validator = Validator::make(Input::all(),array(
	   'username'=>'required',
	   'password'=>'required'));
	if($validator->passes())
	{
	   $credentials = array(
	   'username'=> Input::get('username'),
	   'password'=> Input::get('password')
	   );
	   if(Auth::attempt($credentials))
	    {
	    	//We can redirecto to a dashboard here.
	    	return Redirect::intended('/sections');
	    }
	}

	else
	{
	    echo "Validation Failed!";
	}

	return View::make('user/login')->withTitle('Login Page');
    }


    public function getLogout()
    {

	Auth::logout();
    	return Redirect::to('/')->withTitle('Log out');
    }

}



