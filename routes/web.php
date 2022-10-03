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

Route::get('registro', function () {
    return view('registro');
})->name('registro');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('vista', function () {
    return view('vista');
})->name('vista');

Route::post('login.store', [App\Http\Controllers\LoginController::class, 'store'])->name('login.store');
Route::post('login.ingresar', [App\Http\Controllers\LoginController::class, 'ingresar'])->name('login.ingresar');
