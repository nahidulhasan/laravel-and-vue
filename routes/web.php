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

Route::get('/', function () {
    return view('welcome');
});

Route::post ( '/vueitems', 'PesonController@storeItem' );
Route::get ( '/vueitems', 'PesonController@readItems' );
Route::post ( '/vueitems/{id}', 'PesonController@deleteItem' );
Route::post ( '/edititems/{id}', 'PesonController@editItem' );