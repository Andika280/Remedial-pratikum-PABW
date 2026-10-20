<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrediksiController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/prediksi', [PrediksiController::class, 'create'])->name('prediksi.create');
Route::post('/hasil-prediksi', [PrediksiController::class, 'prosesData'])->name('prediksi.store');

Route::get('/riwayat', [PrediksiController::class, 'riwayat'])->name('prediksi.riwayat');
