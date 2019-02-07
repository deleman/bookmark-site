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

//myself coding

Route::get('insert','TestController@index');
Route::get('builder','TestController@builder');
Route::get('builder','TestController@select');
Route::get('join','TestController@join');
Route::get('advance','TestController@advance');
Route::get('subquery','TestController@subquery');
