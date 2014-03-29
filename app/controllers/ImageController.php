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
        $name = Input::file('image')->getClientOriginalName();
        $image = new Image();
        $image->name = Input::get('name');
        $image->caption = Input::get('caption');
        $image->filename = 'l_'.$name;
        $image->thumbs = 't_'.$name;
        $image->category = Input::get('category');

        $image->slideshow = $name;
        $image->save();

        if (Input::get('slideshow')) {
            Imagine::make(Input::file('image')->getRealPath())->resize(600, 400, true)->save('assets/imgs/slideshow/' . $name);
        }


        Imagine::make(Input::file('image')->getRealPath())->resize(800, 600, true)->save('assets/imgs/'.'l_'.$name);
        Imagine::make('assets/imgs/l_'.$name)->resize(200, 200, true)->save('assets/imgs/'.'t_'.$name);

        return Redirect::to('/images/create');



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
        return View::make('secure.imageEdit')->with('image', Image::find($id))->withTitle('Edit Image '.$id)->with('sections', Category::find($id));
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

        return Redirect::to('/images/'.$id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

        $image = Image::find($id);
        $image->delete();

	}




}
