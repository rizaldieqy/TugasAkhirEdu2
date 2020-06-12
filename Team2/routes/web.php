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

Route::get('/utamahome', 'UtamaFrontController@index')->name('utamahomes.index');

Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');

Route::get('/utamas', 'UtamaController@index')->middleware('auth')->name('utamas.index');

Route::get('/utamas/create', 'UtamaController@create')->middleware('auth')->name('utamas.create');

// Route::get('/statuses/{status}', 'StatusController@show')->name('statuses.show');

Route::get('/utamas/{utama}/edit', 'UtamaController@edit')->middleware('auth')->name('utamas.edit');

Route::patch('/utamas/{utama}', 'UtamaController@update')->middleware('auth')->name('utamas.update');

Route::delete('/utamas/{utama}', 'UtamaController@destroy')->middleware('auth')->name('utamas.destroy');

Route::post('/utamas', 'UtamaController@store')->middleware('auth')->name('utama.store');
// Contact Us 

// Users Route
Route::get('/contact','ContactController@create');
Route::post('/contact','ContactController@store');

// UsersAdminRoute 
Route::prefix('/admin')->group(function(){
    Route::get('/contact','ContactController@index');
    Route::get('/contact/{id}','ContactController@show');
    Route::resource('alamat','AlamatController');
});

