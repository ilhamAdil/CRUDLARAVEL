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
//     return view('page.page1');
// });
// Route::get('/data-tables',function(){
//     return view('page.page2');
// });
Route::get('/',function(){
    return view('master');
});
Route::get('/pertanyaan/create','PostController@create');

Route::post('/pertanyaan','PostController@store');
Route::get('/pertanyaan','PostController@index');
Route::get('/pertanyaan/{id}','PostController@show');
Route::get('/pertanyaan/{id}/edit','PostController@edit');
Route::put('/pertanyaan/{id}','PostController@update');
Route::delete('/pertanyaan/{id}','PostController@destroy');