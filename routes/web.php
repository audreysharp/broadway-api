<?php

use Illuminate\Http\Request;

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

// Musicals collection routes
Route::get('/musicals', 'MusicalController@index');
Route::post('/musicals', 'MusicalController@create');

// Musicals singular routes
Route::get('/musicals/{id}', 'MusicalController@show');
Route::put('/musicals/{id}', 'MusicalController@update');
Route::delete('/musicals/{id}', 'MusicalController@destroy');

// Actors collection routes
Route::get('/actors', 'ActorController@index');
Route::post('/actors', 'ActorController@create');

// Actors singular routes
Route::get('/actors/{id}', 'ActorController@show');
Route::put('/actors/{id}', 'ActorController@update');
Route::delete('/actors/{id}', 'ActorController@destroy');

// Songs collection routes
Route::get('/songs', 'SongController@index');
Route::post('/songs', 'SongController@create');

// Songs singular routes
Route::get('/songs/{id}', 'SongController@show');
Route::put('/songs/{id}', 'SongController@update');
Route::delete('/songs/{id}', 'SongController@destroy');

// HTML/view responses
Route::get('/', function() {
  return view('home');
});

Route::get('/credits', function() {
  return view('credits');
});