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




Route::middleware(['guest'])->group(function () {
    Route::get('/login', 'LoginController@login')->name('login-form');
    Route::post('/authenticate', 'LoginController@authenticate')->name('login');
});


Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('', 'HomeController@index')->name('home');
    Route::resource('admin', 'AdminController');
    Route::resource('kategori', 'KategoriController');

    Route::get('produk', 'ProdukController@index');
    Route::post('produk', 'ProdukController@store');
    Route::get('produk/create', 'ProdukController@create');
    Route::get('produk/{produk}', 'ProdukController@show');
    Route::put('produk/{produk}', 'ProdukController@update');
    Route::get('produk/{produk}/edit', 'ProdukController@edit');
    Route::delete('produk/{produk}', 'ProdukController@destroy');

    Route::get('pesan', 'ContactController@index');
    Route::delete('pesan/{kontak}', 'ContactController@destroy');
    Route::get('logout', 'LoginController@logout')->name('logout');
    
});

Route::get('/', function () {
    return view('welcome');
});


// route view user
Route::prefix('product')->group(function () {
    Route::get('futsal', 'ProdukController@indexfutsal');
    Route::get('football', 'ProdukController@indexfootball');
    Route::get('running', 'ProdukController@indexrunning');
    Route::get('detail-product/{produk}', 'ProdukController@detailProduct');
});
Route::view('about', 'about');
Route::view('location', 'location');
Route::get('home', 'ProdukController@indexview');

// contact
Route::get('contact/create', 'ContactController@create');
Route::post('contact', 'ContactController@store');

