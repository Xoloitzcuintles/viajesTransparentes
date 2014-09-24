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
    return View::make('content');
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

Route::get('users/login', 'UserController@login');

Route::post('users/login', 'UserController@login');

Route::post('users/register', 'UserController@register');
Route::get('users/register', 'UserController@register');

Route::post('users/welcome', 'UserController@login');
Route::get('users/welcome', 'UserController@login');

Route::get('users/crud', 'UserController@getExample4');

Route::get('users/logout', 'UserController@logout');

/**
 * Ciudadano routes
 */
Route::get('ciudadano', 'CiudadanoController@dashboard');
Route::get('ciudadano/account', 'CiudadanoController@account');

/**
 * Servidor routes
 */
Route::get('servidor', 'ServidorController@dashboard');
Route::get('servidor/profile', 'ServidorController@profile');
Route::get('servidor/trips', 'ServidorController@trips');

/**
 * Viajes API Routes
 */

Route::get('viajesApi/getJson', 'ViajeApiController@getJson');
Route::get('viajesApi/postJson', 'ViajeApiController@postJson');
