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

Route::get('/home', function () {
    return view('home');
});

Route::get('/form-gejala', function () {
    return view('form_gejala');
});

Route::get('/terapi-nyeri', function () {
    return view('metode_terapi.terapi_nyeri');
});

Route::get('/langkah-langkah-terapi', function () {
    return view('step_terapi');
});
