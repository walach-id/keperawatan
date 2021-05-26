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
Route::get('/referensi-jurnal', [terapiController::class, 'tampilJurnal']);

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
Route::get('/gejala/edit/{kode}', [gejalaController::class, 'detail_gejala_penyakit'])->middleware(['role:admin']);
Route::post('/gejala/edit/proses/{kode}', [gejalaController::class, 'editDataGejala'])->middleware(['role:admin']);

Route::get('/treatment', [terapiController::class, 'namaTerapi'])->middleware(['role:admin']);
Route::get('/treatment/add', [terapiController::class, 'formTerapi'])->middleware(['role:admin']);
Route::post('/treatment/add/proses', [terapiController::class, 'addDataTerapi'])->middleware(['role:admin']);
Route::get('/treatment/hapus/{kode}', [terapiController::class, 'hapusDataTerapi'])->middleware(['role:admin']);
Route::get('/treatment/edit/{kode}', [terapiController::class, 'detailDataTerapi'])->middleware(['role:admin']);
Route::post('/treatment/edit/proses/{kode}', [terapiController::class, 'editDataTerapi'])->middleware(['role:admin']);

Route::get('/step-treatment/{id}', [terapiController::class, 'step_terapi'])->middleware(['role:admin']);
Route::get('/step-treatment/add/{id}', function () {
    return view('admin/langkah_terapi.add_langkah_terapi');
})->middleware(['role:admin']);
Route::post('/step-treatment/add/proses', [terapiController::class, 'addDataStepTerapi'])->middleware(['role:admin']);
Route::get('/step-treatment/hapus/{kode}', [terapiController::class, 'hapusDataStepGejala'])->middleware(['role:admin']);
Route::get('/step-treatment/edit/{kode}', [terapiController::class, 'detailDataStepTerapi'])->middleware(['role:admin']);
Route::post('/step-treatment/edit/proses/{kode}', [terapiController::class, 'editDataStepTerapi'])->middleware(['role:admin']);


Route::get('/jurnal', [terapiController::class, 'dataJurnal'])->middleware(['role:admin']);
Route::get('/jurnal/edit/{kode}', [terapiController::class, 'detailDataJurnal'])->middleware(['role:admin']);
Route::post('/jurnal/edit/proses/{kode}', [terapiController::class, 'editDataJurnal'])->middleware(['role:admin']);
Route::get('/jurnal/add', [terapiController::class, 'formAddJurnal'])->middleware(['role:admin']);
Route::post('/jurnal/add/proses', [terapiController::class, 'addDataJurnal'])->middleware(['role:admin']);
Route::get('/jurnal/hapus/{kode}', [terapiController::class, 'hapusDataJurnal'])->middleware(['role:admin']);

Route::get('/review', [RatingController::class, 'dataRating'])->middleware(['role:admin']);

Route::get('/evaluasi-user', [RatingController::class, 'dataEvaluasi'])->middleware(['role:admin']);
Route::get('/evaluasi-user/view/{kode}', [RatingController::class, 'detailDataEvaluasi'])->middleware(['role:admin']);


require __DIR__ . '/auth.php';
