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


Route::get('user/login', array('uses'=>'AuthController@getLogin'));
Route::post('user/login', array('uses'=>'AuthController@postLogin'));
Route::get('user/logout', array('uses'=>'AuthController@getLogout'));
Route::group( array('before' => 'auth'), function()
{

Route::resource('categories', 'CategoryController');
Route::resource('sections', 'SectionController');
Route::resource('images', 'ImageController');

});
