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

Route::get('/secretaria/regDoacoes', function () {
    return view('secretaria/regDoacoes');
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

Route::get('/servico-social/regAdopcoes', function () {
    return view('servico-social/regAdopcoes');
});

Route::get('/visitante/index', function () {
    return view('visitante/index');
});

Route::get('/visitante/visitas', function () {
    return view('visitante/visitas');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
