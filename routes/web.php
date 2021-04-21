<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'GamesController@index');
Route::get('games', 'GamesController@index');
Route::post('submit', 'GamesController@submit');
Route::post('generatescrambler', 'GamesController@generate');
Route::get('topscore', 'GamesController@topscore');
Route::post('reset', 'GamesController@reset');