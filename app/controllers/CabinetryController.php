<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 3/21/14
 * Time: 3:36 PM
 */

class CabinetryController extends Controller {

    public function index(){

        return View::make('cabinetry')->withTitle('Cabinetry')->with('section', Section::where('category','=','cabinetry')->get());

    }

} 