<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function(){
    return View::make('home')->withTitle('Curtis Varner Cabinetry &amp; Furniture');
});

Route::get('/about','AboutController@index');
Route::any('/sections', array('as'=>'user/login', 'uses'=>'UserController@loginAction'));

Route::controller('users'=>'UserController');

Route::resource('categories', 'CategoryController');
Route::resource('sections', 'SectionController');
Route::resource('images', 'ImageController');
