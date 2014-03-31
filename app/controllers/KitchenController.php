<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 3/21/14
 * Time: 3:24 PM
 */

class KitchenController extends Controller {

    public function index(){
        return View::make('kitchen')->withTitle('Kitchen &amp; Bath')
            ->with('section', Section::where('category','=','kitchen-bath')->get())
            ->with('images', Image::where('category', '=', 'kitchen-bath')->paginate(9));
    }

} 
