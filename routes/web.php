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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'api/ajax'], function () {
    Route::post('/ilceler', 'AjaxController@getIlceler');
    Route::post('/markalar', 'AjaxController@getMarkalar');
    Route::post('/modeller', 'AjaxController@getModeller');
});

Route::group(['prefix' => 'hesabim'], function () {
    Route::get('/genel', 'HesabimController@index');
    Route::get('/ilanlarim', 'HesabimController@ilanlarim');
    Route::get('/mesajlarim', 'HesabimController@mesajlarim');
    Route::get('/favorilerim', 'HesabimController@favorilerim');
    Route::get('/ayarlar', 'HesabimController@ayarlarim');
});

Route::group(['prefix' => 'kurumsalhesabim'], function () {
    Route::get('/genel', 'KurumsalHesabimController@index@index');
    Route::get('/ilanlarim', 'KurumsalHesabimController@ilanlarim');
    Route::get('/mesajlarim', 'KurumsalHesabimController@mesajlarim');
    Route::get('/favorilerim', 'KurumsalHesabimController@favorilerim');
    Route::get('/magaza-duzenleme', 'KurumsalHesabimController@magazaDuzenleme');
    Route::get('/ayarlar', 'KurumsalHesabimController@ayarlarim');
});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'ilan-ver'], function () {
    Route::get('/adim-1', 'IlanVerController@index')->name('ilan-ver-adim-1');
    Route::post('/adim-2', 'IlanVerController@ikinciAdim')->name('ilan-ver-adim-2');
});