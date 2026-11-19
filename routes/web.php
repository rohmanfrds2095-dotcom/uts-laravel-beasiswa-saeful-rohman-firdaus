<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeasiswaController;

// Route HOME (hanya SATU kali)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

// Route Beasiswa
// Route Beasiswa
Route::get('/beasiswa/kriteria', [BeasiswaController::class, 'kriteria'])->name('beasiswa.kriteria');
Route::get('/beasiswa/hitung', [BeasiswaController::class, 'hitung'])->name('beasiswa.hitung');
Route::get('/beasiswa/ranking', [BeasiswaController::class, 'ranking'])->name('beasiswa.ranking');
Route::get('/beasiswa/filter-layak', [BeasiswaController::class, 'filterLayak'])->name('beasiswa.filter');