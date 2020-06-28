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
    return view('index');
});
Route::get('index', function () {
    return view('index');
});
Route::get('form', function () {
    return view('form');
});

Route::get('tabel_agent', function () {
    return view('tabel_agent');
});

Route::get('form_challeng', function () {
    return view('form_challeng');
});
Route::get('tabel_challeng', function () {
    return view('tabel_challeng');
});
Route::get('formation', function () {
    return view('formation');
});
Route::get('tabel_formation', function () {
    return view('tabel_formation');
});
Route::get('login', function () {
    return view('login');
});
Route::get('profile', function () {
    return view('profile');
});
Route::get('inbox', function () {
    return view('inbox');
});
Route::get('calendar', function () {
    return view('calendar');
});
Route::get('google_maps', function () {
    return view('google_maps');
});


