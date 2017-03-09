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


Route::get('/teste', 'EstatisticasController@getGraphs');


Route::group(['middleware' => 'auth'], function(){
	Route::get('/', 'HomeController@index');

	Route::group(['prefix'=>'relatorios'], function(){
		Route::get('/', 'RespostasController@index')->name("relatorios.index");
		//Route::get('/getTableData', 'RespostasController@getTableData')->name("respostas.get.table.data");
	});


	Route::group(['prefix'=>'estatisticas'], function(){
		Route::get('/', 'EstatisticasController@index')->name("estatisticas.index");
		Route::get('/getTableData', 'EstatisticasController@getTableData')->name("");
		Route::get('/getGraphs', 'EstatisticasController@getGraphs')->name("estatisticas.get.graphs");
	});
});


Auth::routes();

