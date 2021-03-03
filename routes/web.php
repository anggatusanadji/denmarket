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
    Route::resource('produk', 'ProdukController');
    Route::get('pesan', 'ContactController@index');
    Route::delete('pesan/{kontak}', 'ContactController@destroy');
    Route::get('logout', 'LoginController@logout')->name('logout');
    
});

Route::get('/', function () {
    return view('welcome');
});


// route view user
Route::prefix('product')->group(function () {
    Route::get('', 'ProdukController@indexview');
    Route::get('detail-product', 'DetailProductViewController@index');
});
Route::view('about', 'about');
Route::view('location', 'location');
Route::get('home', 'HomeProductViewController@index');

// contact
Route::get('contact/create', 'ContactController@create');
Route::post('contact', 'ContactController@store');

