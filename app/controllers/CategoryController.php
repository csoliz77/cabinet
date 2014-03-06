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
		$content = new Category;
		$content->name = Input::get('name');
		$content->save();
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
       $data['category'] = Category::find($id);
        return View::make('secure.categoryEdit', $data)->withTitle('Edit Category '.$id);

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
        $category = new Category();
        return $category->update($id);


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
        return Category::destroy($id);
	}

}
