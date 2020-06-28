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
Route::post('/offres', 'OffreController@ajoutOffre');

Route::get('index', function () {
    return view('index');
});
Route::get('calendar', function () {
    return view('calendar');
});

Route::get('manager', function () {
    return view('manager');
});
Route::get('doit_dacces', function () {
    return view('doit_dacces');
});
Route::get('offres', 'OffreController@creat');
Route::get('inbox', function () {
    return view('inbox');
});
Route::get('login', function () {
    return view('login');
});
Route::get('profile', function () {
    return view('profile');
});

