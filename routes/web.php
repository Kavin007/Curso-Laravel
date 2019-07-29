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
*/

// Route::get('/', function () {
//     return view('home');
// });


//  Route::get('/',['as'=>'curso.home','uses'=> 'CursoController@home']); /*redireciona para home*/

 Route::get('/',['as'=>'login','uses'=> 'LogginController@login']); /*redireciona para tela de login*/

 Route::get('/login',['as'=>'login.sair','uses'=> 'LogginController@sair']); /*rota para sair*/

 Route::post('/login',['as'=>'login.entrar','uses'=> 'LogginController@entrar']); /* redireciona depois de logado*/

Route::group(['middlware'=>'auth'],function(){
Route::get('/cursos',['as'=>'cursos','uses'=> 'CursoController@index']);
Route::get('/cursos/adicionar',['as'=>'cursos.adicionar','uses'=> 'CursoController@adicionar']);
Route::post('/cursos/salvar',['as'=>'cursos.salvar','uses'=> 'CursoController@salvar']);
Route::get('/cursos/editar/{id}',['as'=>'cursos.editar','uses'=> 'CursoController@editar']);
Route::put('/cursos/atualizar/{id}',['as'=>'cursos.atualizar','uses'=> 'CursoController@atualizar']);
Route::get('/cursos/deletar/{id}',['as'=>'cursos.deletar','uses'=> 'CursoController@deletar']);

});

