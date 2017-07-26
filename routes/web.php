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

Route::get('/test/index', function () {
    return view('sils.index');
});
Route::get('/test/services', function () {
    return view('sils.services');
});
Route::get('/test/about', function () {
    return view('sils.about');
});
Route::get('/', 'Render\OnePageController@index');