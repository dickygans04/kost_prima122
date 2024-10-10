<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;

Route::get('/', function () {
    return view('home');
});

Route::get('/akun', [AkunController::class, 'tampil'])->name('akun.tampil');
Route::get('/akun/tambah', [AkunController::class, 'tambah'])->name('akun.tambah');
Route::post('/akun/submit', [AkunController::class, 'submit'])->name('akun.submit');
Route::get('/akun/edit/{id}', [AkunController::class, 'edit'])->name('akun.edit');
Route::post('/akun/update/{id}', [AkunController::class, 'update'])->name('akun.update');
Route::post('/akun/delete/{id}', [AkunController::class, 'delete'])->name('akun.delete');
