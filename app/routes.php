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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('users', function($UserInput=null)
{
    
    return View::make('users');
});
Route::post('users', function($UserInput=null){
   
    return View::make('users', array($_POST));
});

//Route::post('users', 'DataGenController@Generate_Text');
