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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::match(['get', 'post'],'/','IndexController@indexHome');
Route::get('archive','IndexController@archiveHome');
Route::get('category','IndexController@categoryHome');
Route::get('blog-details','IndexController@blog_detailsHome');
Route::get('contact','IndexController@contactHome');

require __DIR__.'/auth.php';
