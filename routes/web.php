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

Route::get('/bienvenido', function () {
    return view('bienvenido');
});

Route::get('/pisco_digital', function () {
    return view('pdigital');
});

Route::get('/ptecnologia', function () {
    return view('ptecnologia');
});

Route::get('/talentopisco', function () {
    return view('talentopisco');
});

Route::get('/contacto', function () {
    return view('contact');
});


Route::get('/login', function () {
    return view('login');
});



Route::post('login', 'Auth\LoginController@authenticate');

Route::get('/test', 'ArchiveController@index')->middleware('guest');

Route::resource('admarchive','admarchiveController');
Route::resource('admarchive', 'admarchiveController')->names([
    'create' => 'intraplus'
]);
//Route::resource('archives','ArchiveController');
