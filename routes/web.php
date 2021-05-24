<?php

use App\Http\Controllers\evaluasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gejalaController;
use App\Http\Controllers\penyakitController;
use App\Http\Controllers\RatingController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});



Route::get('/home', [penyakitController::class, 'index']);
Route::get('/form_gejala/{kode}', [gejalaController::class, 'index']);
Route::post('/add/gejala', [gejalaController::class, 'add_gejala']);
Route::post('/update/gejala/{id}', [gejalaController::class, 'update_gejala']);
Route::get('terapi/{id}', [terapiController::class, 'index']);
Route::get('step_terapi/{id}', [terapiController::class, 'langkah_terapi']);
Route::get('evaluasi', [evaluasiController::class, 'index']);
Route::get('evaluasi/detail/{unique_id}', [evaluasiController::class, 'detail']);
Route::get('evaluasi/pra/{unique_id}', [evaluasiController::class, 'pra_evaluasi']);

Route::get('rating', [RatingController::class, 'rating']);
Route::post('/add/rating', [RatingController::class, 'add_rating']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// route admin
Route::get('/admin', function () {
    return view('admin.home');
})->middleware(['role:admin'])->name('admin');

Route::get('/penyakit', [penyakitController::class, 'adminIndex'])->middleware(['role:admin']);
Route::get('/penyakit/add', function () {
    return view('admin/penyakit.add_penyakit');
})->middleware(['role:admin']);
Route::post('/penyakit/add/proses', [penyakitController::class, 'addDataPenyakit'])->middleware(['role:admin']);
Route::get('/penyakit/hapus/{kode}', [penyakitController::class, 'hapusDataPenyakit'])->middleware(['role:admin']);
Route::get('/penyakit/edit/{kode}', [penyakitController::class, 'detailPenyakit'])->middleware(['role:admin']);
Route::post('/penyakit/edit/proses/{kode}', [penyakitController::class, 'editDataPenyakit'])->middleware(['role:admin']);

Route::get('/gejala/{id}', [gejalaController::class, 'gejala_penyakit'])->middleware(['role:admin']);
Route::get('/gejala/add/{id}', [gejalaController::class, 'formAddGejala'])->middleware(['role:admin']);
Route::post('/gejala/add/proses/{id}', [gejalaController::class, 'addDataGejala'])->middleware(['role:admin']);
Route::get('/gejala/hapus/{kode}', [gejalaController::class, 'hapusDataGejala'])->middleware(['role:admin']);



require __DIR__ . '/auth.php';
