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
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('dashboard')->group(function () {
//     Route::get('', 'DashboardController@index')->name('home');
// });

// route view user
Route::get('home', 'HomeProductController@index');
Route::prefix('product')->group(function () {
    Route::get('', 'ProductController@index');
    Route::get('detail-product', 'DetailProductController@index');
});
Route::get('about', 'AboutController@index');
Route::get('contact', 'ContactController@index');
Route::get('location', 'LocationController@index');

