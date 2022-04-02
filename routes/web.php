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
    return view('main');
})->name('main');

Route::get('/patines', function () {
    return view('patines');
})->name('patines');

Route::get('/patinaje', function () {
    return view('patinaje');
})->name('patinaje');

Route::get('/frenos', function () {
    return view('frenos');
})->name('frenos');
