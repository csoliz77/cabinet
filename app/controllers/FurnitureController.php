<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 3/20/14
 * Time: 12:10 PM
 */

class FurnitureController extends Controller {

    public function index(){
        return View::make('furniture')->withTitle('Furniture')
            ->with('section', Section::where('category','=','furniture')->get())
            ->with('images', Image::where('category', '=', 'furniture')->get());
    }
}



