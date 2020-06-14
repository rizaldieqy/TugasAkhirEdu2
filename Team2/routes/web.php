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

Route::get('/', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function(){
    Route::resource('product','ProductController');
    Route::resource('gallery','GalleryController');
});
Route::get('/product','view_productController@index')->name('product');
Route::get('/gallery','view_galleryController@index')->name('gallery');
Route::get('/detail/{slug}','detailController@index')->name('detail');



