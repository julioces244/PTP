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


//Paginas principales informativas (js, css, html)

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


Route::get('/innovacion', function() {
  return view('innovacion');
});

Route::get('/adm_inicio', function () {
    return view('admmenu');
});

//Block pages (páginas simples en mantenimiento vista)

Route::get('/blockstudent', function(){
    return view('blockpages/blockstudent');
});

Route::get('/blockparent', function(){
    return view('blockpages/blockparent');
});

Route::get('/blockteacher', function(){
    return view('blockpages/blockteacher');
});

Route::get('/blockfund', function(){
    return view('blockpages/blockfund');
});

//Páginas backend BD (MySql, laravel, blade, prox(vue.js))

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('logout', 'Auth\LoginController@logout');

Route::post('login', 'Auth\LoginController@authenticate');

//Paginas intranet Camisea Carga de archivos documentos pisco aprendizaje, digital, tecnologia
Route::get('/test', 'ArchiveController@index')->name('test');
Route::get('/filepd', 'ArchiveController@index2')->name('filepd');
Route::get('/filept', 'ArchiveController@index3')->name('filept');

Route::get('/imagepa', 'ImageController@index')->name('imagepa');

Route::resource('admarchive', 'admarchiveController')->names([
    'index' => 'listar',
    'create' => 'intraplus',
    'destroy' => 'eliminar'
]);

Route::get('/admimage/upload', 'admimageController@create')->name('uploadimage');
//Route::resource('archives','ArchiveController');
