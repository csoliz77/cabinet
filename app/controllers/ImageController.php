<?php

class ImageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        return View::make('secure.imagesList')->with('images', Image::all() )->withTitle('Curtis Varner Furniture &amp; Cabinetry');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return View::make('secure.imageForm')->with('sections', Category::all())->withTitle('Add Image');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $image = new Image();
        $image->name = Input::get('name');
        $image->caption = Inpute::get('caption');
        $image->category = Input::get('category');
        $image->save();
        \Illuminate\Support\Facades\Session::flash('message', 'Successfully created category');

        return Redirect::to('/sections');
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
        return View::make('secure.image')->with('image', Image::find($id))->withTitle('Image '.$id);
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
        return View::make('secure.imageEdit')->with('image', Image::find($id))->withTitle('Edit Image '.$id)->with('sections', Section::find($id));
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
        $image = Image::find($id);
        $image->name = Input::get('name');
        $image->caption = Input::get('caption');
        $image->category = Input::get('category');
        $image->save();

        return Redirect::to('/sections/'.$id);
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
        $image = Image::find($id);
        $image->delete();
	}

}