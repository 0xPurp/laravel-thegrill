<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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







Route::get('/header', function () {
    return view('backoffice.pages.header.header');
});

Route::get('/dhome', function () {
    return view('backoffice.pages.home.home');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/* Route::get('/user', function () {
    return view('backoffice.pages.users.users');
})->middleware(['auth'])->name('users'); */

require __DIR__.'/auth.php';

Route::resource('/users', UserController::class);

Route::resource('/chef', ChefController::class);

Route::resource('/client', ClientController::class);

Route::resource('/about', AboutController::class);
