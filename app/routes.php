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
Route::get('servidorProfile/{id}', 'UserController@showProfile');
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
Route::get('servidores', 'ServidorController@servidores');
Route::get('servidor', 'ServidorController@dashboard');
Route::get('servidor/profile', 'ServidorController@profile');
Route::get('servidor/trips', 'ServidorController@trips');
Route::get('servidor/altaViaje', 'ServidorController@altaViaje');
Route::get('servidor/viaje', 'ServidorController@consultaViaje');
Route::post('servidor/addPicture', 'ServidorController@addPicture');

/**
 * Viajes API Routes
 */

Route::get('viajesApi/getJson', 'ViajeApiController@getJson');
Route::post('viajesApi/postJson', 'ViajeApiController@postJson');
Route::get('viajesApi/postJson', 'ViajeApiController@getJson');
Route::post('viajesApi/getJson', 'ViajeApiController@postJson');

Route::get('viajesApi/consulta', 'ViajeApiController@consulta');
Route::post('viajesApi/consulta', 'ViajeApiController@consulta');
Route::post('viajesApi/saveViaje', 'ViajeApiController@saveViaje');

/*
    ViajeController
*/
Route::post('viajes/processCsv', 'ViajeController@processCsv');
Route::get('viajes/processCsv', 'ViajeController@processCsv');

 /**
 * ServidorApi routes
 */
Route::post('servidorApi/getServidorProfile', 'ServidorApiController@getServidorProfile');
Route::get('servidorApi/getServidorProfile', 'ServidorApiController@getServidorProfile');
Route::post('servidorApi/getServidores', 'ServidorApiController@getServidores');
Route::get('servidorApi/getServidores', 'ServidorApiController@getServidores');
