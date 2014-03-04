<?php

class AboutController extends Controller {


    public function index(){

	return View::make('about')->with('title', 'Curtis Varner Furniture &amp; Cabinetry');
    }

}
