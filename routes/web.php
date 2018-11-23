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

Route::get('/app', function () {
    return view('layouts/app');
});

Route::get('/templateVisitante', function () {
    return view('layouts/templateVisitante');
});

Route::get('/templateCRUD', function () {
    return view('layouts/templateCRUD');
});


Route::get('/secretaria/regDoacoes', function () {
    return view('secretaria/regDoacoes');
});

Route::get('/secretaria/listaDoacoes', function () {
    return view('secretaria/listaDoacoes');
});

Route::get('/secretaria/cadUser', function () {
    return view('secretaria/cadUser');
});

Route::get('/secretaria/listaFunc', function () {
    return view('secretaria/listaFunc');
});

Route::get('/secretaria/publicacao', function () {
    return view('secretaria/publicacao');
});

Route::get('/servico-social/cadCrianca', function () {
    return view('servico-social/cadCrianca');
});

Route::get('/servico-social/listaCiancas', function () {
    return view('servico-social/listaCriancas');
});


Route::get('/servico-social/regAdopcoes', function () {
    return view('servico-social/regAdopcoes');
});

Route::get('/visitante/index', function () {
    return view('visitante/index');
});

Route::get('/visitante/visitas', function () {
    return view('visitante/visitas');
});
Route::get('/secretaria/visitas', function () {
    return view('secretaria/regVisitas');
});
Route::get('/visitante/procuracri', function () {
    return view('visitante/procuracri');
});

Route::get('/visitante/slider', function () {
    return view('visitante/slider');
});

Route::get('/visitante/galeria', function () {
    return view('visitante/galeria');
});

Route::get('/visitante/contacto', function () {
    return view('visitante/contacto');
});

Route::get('/visitante/politica', function () {
    return view('visitante/politica');
});

Route::get('/visitante/eventos', function () {
    return view('visitante/eventos');
});

Route::get('/visitante/donativos', function () {
    return view('visitante/donativos');
});

Route::get('/visitante/procura', function () {
    return view('visitante/procura');
});

Route::get('/secretaria/visitas', function () {
    return view('secretaria/regVisitas');
});

Route::get('/secretaria/listaDoacoes', function () {
    return view('secretaria/listaVisitas');
});



//Testes




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('doacoes', 'DoacoesController');
Route::get('/doacoes.create', 'DoacoesController@create')->name('doacoes.create');
Route::get('/doacoes.edit', 'DoacoesController@edit')->name('doacoes.edit');
Route::get('/doacoes.delete', 'DoacoesController@delete')->name('doacoes.delete');



Route::resource('publicacao', 'publicacaoController');
Route::resource('cadCrianca', 'criancaController');
Route::resource('regVisitas', 'visitasController');

Route::resource('visitas', 'controllerVisita');
Route::resource('contacto', 'contactoController');
Route::resource('donativos', 'donativosController');
Route::resource('procuracri', 'procuraController');
//Route::post('/visitas.salvarVisitas', 'controllerVisita@salvarVisitas')->name('visitas.salvarVisitas');
