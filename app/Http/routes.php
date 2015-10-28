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
Route::group(['prefix'=>'atendimento'], function() 
{
Route::get('',				['as'=>'atendimento', 			'uses'=>'AtendimentoController@index']);
Route::get('create',		['as'=>'atendimento.create', 	'uses'=>'AtendimentoController@create']);
Route::post('store',		['as'=>'atendimento.store', 	'uses'=>'AtendimentoController@store']);
Route::get('{id}/destroy',	['as'=>'atendimento.destroy', 	'uses'=>'AtendimentoController@destroy']);
Route::get('{id}/edit',		['as'=>'atendimento.edit', 		'uses'=>'AtendimentoController@edit']);
Route::put('{id}/update',	['as'=>'atendimento.update', 	'uses'=>'AtendimentoController@update']);
Route::get('usuario',		['as'=>'atendimento.usuario', 	'uses'=>'AtendimentoController@usuario']);
});

Route::get('/', function () {
    return view('welcome');
});
