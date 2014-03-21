<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 3/21/14
 * Time: 3:32 PM
 */

class ContactController extends Controller{

    public function index(){
        return View::make('contact')->withTitle('Contact')->with('section', Section::where('category','=','contact')->get());
    }

} 