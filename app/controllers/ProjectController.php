<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 3/21/14
 * Time: 3:30 PM
 */

class ProjectController extends Controller {

public function index(){
    return View::make('projects')->withTitle('Special Projects')
        ->with('section', Section::where('category','=','special-projects')->get())
        ->with('images', Image::where('category', '=', 'special-projects')->paginate(9));
}

} 
