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
Route::get('/home', function () {
    return view('index');
});
Route::get('/dashboard1', function () {
    return view('backoffice.home.home');
});


Route::get('/about', function () {
    return view('backoffice.pages.about.about');
});

Route::get('/chef', function () {
    return view('backoffice.pages.chef.chef');
});

Route::get('/client', function () {
    return view('backoffice.pages.client.client');
});
Route::get('/header', function () {
    return view('backoffice.pages.header.header');
});

Route::get('/home', function () {
    return view('backoffice.pages.home.home');
});
Route::get('/users', function () {
    return view('backoffice.pages.users.users');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
