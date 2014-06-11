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
	return View::make('index');
});

Route::get('/nosotros', function(){
	return View::make('nosotros');
});


# Rutas de Inicio de sesión
Route::get('admin/login', 'AuthController@showLogin');
Route::post('admin/login', 'AuthController@postLogin');

Route::group(array('before' => 'auth'), function()
{
    Route::get('admin/', function(){
    	return View::make('admin/index');
    });

    Route::get('admin/logout', 'AuthController@logOut');
    
    # Administración de usuarios
	Route::resource('admin/users', 'UsersController');
});