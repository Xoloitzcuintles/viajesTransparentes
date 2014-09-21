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

Route::get('setup', 'BaseController@setupLayout');

Route::get('user/{id}', 'UserController@showProfile');


Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});

Route::get('template', function()
{
    return View::make('template');
});

Route::get('users/login', function()
{
    return View::make('users/login');
});

Route::post('users/register', 'UserController@register');
Route::get('users/register', 'UserController@register');

Route::post('users/welcome', 'UserController@login');
Route::get('users/welcome', 'UserController@login');
