<?php

class SectionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        return View::make('secure.sectionsList')->with('sections', Section::all() )->withTitle('Curtis Varner Furniture &amp; Cabinetry');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return View::make('secure.sectionForm')->with('sections', Category::all())->withTitle('Add Section');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $section = new Section();
        $section->content = Input::get('content');
        $section->category = Input::get('category');
        $section->save();
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
        return View::make('secure.section')->with('section', Section::find($id))->withTitle('Section '.$id);
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
        return View::make('secure.sectionEdit')->with('section', Section::find($id))->withTitle('Edit Paragraph '.$id);

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
        $section = Section::find($id);
        $section->content = Input::get('content');
        $section->save();

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
        $section = Section::find($id);
        $section->delete();
        Session::flash('message', 'Successfully deleted category');

        return Redirect::to('/sections');
	}

}