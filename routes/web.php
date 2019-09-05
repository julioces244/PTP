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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/bienvenido', function () {
    return view('bienvenido');
});

Route::get('/pisco_digital', function () {
    return view('pdigital');
});

Route::get('/pisco_tecnologia', function () {
    return view('ptecnologia');
});

Route::get('/talentopisco', function () {
    return view('talentopisco');
});

Route::get('/pisco_aprendizaje', function () {
    return view('paprendizaje');
});


Route::get('/excelencia_formativa', function () {
    return view('excformativa');
});

Route::get('/oportunidades_empleo', function () {
    return view('empleo');
});

Route::get('/noticias', function () {
    return view('noticias');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/adm_inicio', function () {
    return view('admmenu');
});



Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('logout', 'Auth\LoginController@logout');



Route::post('login', 'Auth\LoginController@authenticate');

Route::get('/test', 'ArchiveController@index')->name('test');

Route::resource('admarchive', 'admarchiveController')->names([
    'create' => 'intraplus',
    'destroy' => 'eliminar'
]);
//Route::resource('archives','ArchiveController');
