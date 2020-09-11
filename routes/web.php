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
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/aluno', function () {
    return view('aluno');
});
*/

Route::get('/aluno', 'AlunoController@index');
Route::get('/aluno/edit/{id}', 'AlunoController@edit');
Route::get('/aluno/remove/{id}', 'AlunoController@remove');
Route::post('/aluno/update/', 'AlunoController@update');
Route::post('/aluno/search/', 'AlunoController@search');
Route::get('/aluno/create', "AlunoController@create"); // carregar o formulário
Route::post('/aluno/store', 'AlunoController@store'); // salvar os dados do formulário

Route::get('/materiais', function () {
    return view('materiais');
});
