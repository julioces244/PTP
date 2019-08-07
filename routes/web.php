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

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('intraplus', function () {
    return view('intraplus');
});

Route::post('login', 'Auth\LoginController@authenticate');

Route::get('/test', 'ArchiveController@index')->middleware('guest');
Route::get('/test', function () {
    return view('test');
});

Route::resource('archives','ArchiveController');
