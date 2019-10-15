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

Route::get('/summer_tech', function () {
    return view('summer_tech');
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

  //Imagenes aprendizaje colegios
Route::get('/imgpa_bandera', 'ImageController@index')->name('imagepa');
Route::get('/imgpa_sanmartin', 'ImageController@imagepa_sanmartin');
Route::get('/imgpa_porras', 'ImageController@imagepa_porras');
Route::get('/imgpa_renan', 'ImageController@imagepa_renan');
Route::get('/imgpa_carlos', 'ImageController@imagepa_carlos');
Route::get('/imgpa_mariategui', 'ImageController@imagepa_mariategui');
Route::get('/imgpa_independencia', 'ImageController@imagepa_independencia');
Route::get('/imgpa_quiñones', 'ImageController@imagepa_quiñones');
Route::get('/imgpa_alegria', 'ImageController@imagepa_alegria');
Route::get('/imgpa_beatita', 'ImageController@imagepa_beatita');
Route::get('/imgpa_velazco', 'ImageController@imagepa_velazco');
Route::get('/imgpa_porsia', 'ImageController@imagepa_porsia');

  //Imagenes digital colegios
Route::get('/imgpd_bandera', 'ImageController@imagepd_bandera');
Route::get('/imgpd_sanmartin', 'ImageController@imagepd_sanmartin');

  //Imagenes tecnologia colegios
Route::get('/imgpt_bandera', 'ImageController@imagept_bandera');




Route::resource('admarchive', 'admarchiveController')->names([
    'index' => 'listar',
    'create' => 'intraplus',
    'destroy' => 'eliminar'
]);

Route::get('/admimage/upload', 'admimageController@create')->name('uploadimage');

Route::post('/admimage', 'admimageController@store')->name('uploadimage');
//Route::resource('archives','ArchiveController');
