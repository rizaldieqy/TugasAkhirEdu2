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

Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');


// Contact Us 

// Users Route
Route::get('/contact','ContactController@create');
Route::post('/contact','ContactController@store');

// UsersAdminRoute 
Route::prefix('/admin')->group(function(){
    Route::get('/contact','ContactController@index');
    Route::get('/contact/{id}','ContactController@show');
    Route::delete('/contact/{id}','ContactController@destroy')->name('destroy');
    Route::resource('alamat','AlamatController');
});

