<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'UserController@microfix')->name('users.microfix');


Route::get('/portal', 'UserController@portal')
->name('users.portal');



Route::get('/usuarios', 'UserController@index')
->name('users.index');


Route::get('/usuarios/{user}', 'UserController@show')
-> where ('user', '[0-9]+')
-> name('users.show');



Route::get('/computadora/nuevo', 'ComputerController@create')->name('computer.create');

//-------------------------------------//

Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');

Route::post('/usuarios/crear', 'UserController@store');

Route::get('/usuarios/{user}/editar', 'UserController@edit')->name('users.edit');

Route::put('/usuarios/{user}', 'UserController@update')->name('users.update');

Route::delete('usuarios/{user}','UserController@destroy' )->name('users.destroy');


//----------------------------------//

Route::get('/registro/nuevo', 'ComputerController@create')->name('computer.create');

Route::post('/registro/crear', 'ComputerController@store');
