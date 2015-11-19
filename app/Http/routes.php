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

Route::get('/', function () {
    return view('welcome');
});

Route::get('listamembros','MembroController@index');
Route::get('adicionarmembro','MembroController@create');
Route::post('listamembros','MembroController@store');
//Route::get('listademembros/{id}','MembroController@show');

//Route::get('criarrequisicao','RequisicaoController@create');
//Route::post('listarrequisicao','RequisicaoController@store');

Route::get('contacto','ContactoController@index');

Route::resource('Requisicao','RequisicaoController');
Route::resource('usuario','UsuarioController');
Route::resource('tarefa','TarefaController');
Route::resource('filme','FilmeController');
Route::resource('cliente','ClienteController');
Route::resource('emprestimo','EmprestimoController');

Route::get('request/{id?}','UsersController@index');
Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
