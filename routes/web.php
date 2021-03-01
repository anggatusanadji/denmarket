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

Auth::routes();
Route::prefix('dashboard')->group(function () {
    Route::get('', 'HomeController@index')->name('home');
    Route::resource('admin', 'AdminController');
    Route::resource('kategori', 'KategoriController');
});
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});


Route::get('/', function () {
    return view('welcome');
});


// route view user
Route::get('home', 'HomeProductViewController@index');
Route::prefix('product')->group(function () {
    Route::get('', 'ProductViewController@index');
    Route::get('detail-product', 'DetailProductViewController@index');
});
Route::view('about', 'about');
Route::view('location', 'location');
Route::get('contact', 'ContactViewController@index');

