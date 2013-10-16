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

Route::get('test',function()
{
//    $user = new User;
//    $user->email = "test@test.com";
//    $user->real_name = "Test Account";
//    $user->password = "test";
//    $user->save();
    return "The test user has been saved to the database.";
});
//Route::get('users', 'UserController@index');
Route::controller('users', 'UserController');
//Route::post();
//Route::delete();
//Route::put();