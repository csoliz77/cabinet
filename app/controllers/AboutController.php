<?php

class AboutController extends Controller {


    public function index(){


	return View::make('about')->withTitle('About Curtis')->with('section', Section::where('category', '=',
	'about-curtis')->get());

    }

}
