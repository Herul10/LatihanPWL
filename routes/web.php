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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route ::get('/test', function(){
    return"Hello";
});

Route::get ('admin/home', [App\Http\Controllers\AdminController::class, 'index'])
                ->name('admin.home')
                ->middleware('is_admin');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get ('admin/books', [App\Http\Controllers\AdminController::class, 'books'])
                ->name('admin.books')
                ->middleware('is_admin');

Route::get ('admin/books', [App\Http\Controllers\AdminController::class, 'submit_book'])
                ->name('admin.book.submit')
                ->middleware('is_admin');


