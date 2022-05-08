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



Route::resource('/', 'WebController\ItemController');

Route::post('logged_in', 'WebController\ItemController@logged_in')->name('logged_in');

Route::get('all', 'WebController\ItemController@get_all_data')->name('get_all_data');

Route::post('save', 'WebController\ItemController@save')->name('save');

//se quisesse Separado
//Route::get('/', 'WebController\ItemController@index');


