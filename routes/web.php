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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('dasboard');
});


Route::get('/proyek', 'ItemController@list_proyek'); 
Route::get('/proyek/create', 'ItemController@form'); 
Route::post('/proyek', 'ItemController@store'); 
Route::get('/proyek/{id}/daftarkan-staff', 'ItemController@daftarkan_staff'); 
Route::post('/proyek/{id}/daftarkan-staff', 'ItemController@store_staft'); 
Route::get('/proyek/{id}/edit', 'ItemController@edit'); 
Route::put('/proyek/{id}', 'ItemController@update'); 
Route::delete('/proyek/{id}', 'ItemController@destroy'); 