<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Http\Request;

//Retorna todos os Adicionais
Route::get('api/aditional', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return \testeUDSAPI\adicional::all();
});

//Retorna todos os sabores
Route::get('api/sabor', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return \testeUDSAPI\sabor::all();
});

//Retorna todos os tamanhos
Route::get('api/tamanho', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return \testeUDSAPI\tamanho::all();
});

//cria a pizza monstada pelo cliente
Route::post('api/pizza', function(Request $request)
{
    return \testeUDSAPI\pizza::create($request->all());
});

/*Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
