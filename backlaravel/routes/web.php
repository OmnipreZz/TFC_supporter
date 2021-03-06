<?php

use App\Http\Controllers\TfcplayerController;

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


//Accueil Public
Route::get('/', 'PublicController@home')->name('public');

//RGPD
Route::get('/rgpd', 'PublicController@rgpd')->name('rgpd');


Auth::routes();

// Home
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// Cette route sert juste à cacher le fichier register
Route::get('/register')->name('register')->middleware('auth');

// Joueurs TFC
Route::get('/players', 'TfcplayerController@index')->name('players_index')->middleware('auth');
Route::get('/players/create', 'TfcplayerController@create')->name('players_create')->middleware('auth');
Route::post('/players/store', 'TfcplayerController@store')->name('players_store')->middleware('auth');
Route::get('/players/destroy/{id}', 'TfcplayerController@destroy')->name('players_destroy')->middleware('auth');
Route::get('/players/edit/{id}', 'TfcplayerController@edit')->name('players_edit')->middleware('auth');
Route::post('/players/update/{id}', 'TfcplayerController@update')->name('players_update')->middleware('auth');

// Store Photo
Route::get('/photos', 'StorephotoController@index')->name('photos_index')->middleware('auth');
Route::get('/photos/destroy', 'StorephotoController@destroy')->name('photos_destroy')->middleware('auth');
Route::post('/photos/select', 'StorephotoController@select')->name('photos_select')->middleware('auth');

//Top Photo
Route::get('/top', 'TopphotoController@index')->name('top_index')->middleware('auth');
Route::get('/top/destroy/{id}', 'TopphotoController@destroy')->name('top_destroy')->middleware('auth');