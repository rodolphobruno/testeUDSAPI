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

//retorna a pizza montada
Route::get('api/pizza/{id}', function($id) {
    return \testeUDSAPI\pizza::with('sabor','tamanho')->find($id);
});

//retorna a pizza_adicional montada
Route::get('api/pizzaAdicional/{pizzaId}', function($pizzaId) {
    //return $id;
   return\testeUDSAPI\pizza_adicional::with('pizza','adicional')->where('pizza_id', $pizzaId)->get();
});

//cria os adicionais da pizza
Route::post('api/pizzaAdicional', function(Request $request)
{
    return \testeUDSAPI\pizza_adicional::create($request->all());
});
//retorna a pizza com adicionais

//cria o pedido
Route::post('api/pedido', function(Request $request)
{
    return \testeUDSAPI\pedido::create($request->all());
});

/*Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
