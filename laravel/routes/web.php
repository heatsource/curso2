<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function(){
	return "Que tengas una excelente mañana amigo!";
});

Route::get('usuarios/{nombre}',function($nombre){
	return 'Buenos días '.$nombre.' sigue aprendiendo Laravel!';
});

Route::get('/home','TicketsController@home');
Route::get('/create','TicketsController@create');
Route::post('/create','TicketsController@store');
Route::get('/tickets','TicketsController@index');
Route::get('/ticket/{slug?}','TicketsController@show');
Route::get('/ticket/{slug?}/edit','TicketsController@edit');
Route::post('/ticket/{slug?}/edit','TicketsController@update');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy');