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

Route::get('/', 'HomeController@index')->middleware("auth");
Route::get('/teste', function(){ return hash('md5', 1); });


Route::group(['middleware' => 'auth', 'prefix'=>'usuarios'], function () {
    Route::get('/criar', 'AssinantesController@create')->name("rv.assinantes.create");

});


Route::group(['middleware' => 'auth', 'prefix'=>'linhas'], function () {
    Route::get('/criar', 'LinhasController@create')->name("rv.linhas.create");
});


Route::group(['middleware' => 'auth', 'prefix'=>'planos'], function () {
    Route::get('/criar', 'PlanosController@create')->name("rv.planos.create");
    Route::post('/guardar', 'PlanosController@store')->name("rv.planos.store");
    Route::get('/editar/{id?}', 'PlanosController@edit')->name("rv.planos.edit");
    Route::post('/atualizar/{id?}', 'PlanosController@update')->name("rv.planos.update");
});

Auth::routes();

