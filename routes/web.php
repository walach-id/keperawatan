<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gejalaController;
use App\Http\Controllers\penyakitController;
use App\Http\Controllers\terapiController;

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

Route::get('/home', [penyakitController::class, 'index']);
Route::get('/form_gejala/{kode}', [gejalaController::class, 'index']);
Route::post('/add/gejala', [gejalaController::class, 'add_gejala']);
Route::get('terapi/{id}', [terapiController::class, 'index']);
Route::get('step_terapi/{id}/?nama=', [terapiController::class, 'langkah_terapi']);
