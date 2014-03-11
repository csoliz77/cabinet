<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
     *
	 */


	public function index()
	{
		//
        return View::make('secure.categoriesList')->with('category', Category::all())->with('title', 'List of Categories');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('secure.categoryForm')->withTitle('Add Category');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$content = new Category();
		$content->name = Input::get('name');
        $content->navbar = Input::get('navbar');
		$content->save();
        \Illuminate\Support\Facades\Session::flash('message', 'Successfully created category');
        return Redirect::to('/categories');
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

        return View::make('secure.category')->with('category', Category::find($id))->withTitle('Category '.$id);

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

        return View::make('secure.categoryEdit')->with('category', Category::find($id))->withTitle('Edit Category '.$id);

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
        $category = Category::find($id);
        $category->name = Input::get('name');
        $category->navbar = Input::get('navbar');
        $category->save();

        return Redirect::to('/categories');


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
        $category = Category::find($id);
        $category->delete();
        Session::flash('message', 'Successfully deleted category');

        return Redirect::to('/categories');
	}

}
