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

Route::get('/about', function () {
    $iller = \App\Ulke::findOrFail(1)->il;

    return view('about')->with('iller',$iller);
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/ilceler', 'AjaxController@getIlceler');

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