<?php
use Illuminate\Support\MessageBag;
class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	public function loginAction()
	{
	    $errors = new MessageBag();
	    if($old = Input::old('errors'))
	    {
	    	$errors = $old;
	    }

	    $data = array('errors'=> $errors);


	    if(Input::server("REQUEST_METHOD") == "POST")
	    {
	    	$validator = Validator::make(Input::all(), array('username'=>'required', 'password'=>'required'));
	    	if($validator->passes())
		    {
		    $credentials = array('username'=>Input::get('username'),
					             'password'=>Input::get('password'));
		    if(Auth::attempt($credentials))
		    {
		    	return Redirect::intended('categories.create');
		    }
		}
            $data['errors'] = new MessageBag(array('password'=> array('Username and/or password invalid')));
            $data['username'] = Input::get('username');
            return Redirect::route('user/login')->withInput($data);


		    }

		else
		{
		    echo "Validation failed";
		}



	    return View::make('user/login')->withTitle('Login Page');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
