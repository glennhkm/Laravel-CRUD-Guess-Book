<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\TamuController as AdminTamucontroller;
use App\Http\Controllers\Admin\AuthController as AdminAuthcontroller;
use App\Http\controllers\User\TamuController;
use Illuminate\Support\Facades\Route;

Route::controller(TamuController::class)->group(function() {
    Route::get('/', 'index')->name('show-tamu');  
    Route::get('/guess-list', 'showTamu')->name('show-tamu');  
    Route::post('simpan-bukutamu', 'simpanTamu')->name('simpan-bukutamu');
});

Route::post('login', [AdminAuthcontroller::class, 'authenticate'])->name('login.post');

Route::middleware('admin')->group(function () {
    Route::get('admin', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::controller(AdminTamuController::class)->group(function() {
        Route::get('admin/tamu', 'index')->name('admin-tamu');
        Route::get('admin/form-tambah', 'formTambah')->name('admin-form-tambah');
        Route::post('admin/simpan-data', 'simpanData')->name('admin-simpan-data');
        Route::get('admin/form-edit/{id}', 'formEdit')->name('admin-form-edit');
        Route::post('admin/update-data', 'updateTamu')->name('admin-update-data');
        Route::post('admin/hapus-data', 'hapusTamu')->name('admin-hapus-hapus-data');
    });
    Route::controller(AdminAuthController::class)->group(function() {
        Route::get('login.html', 'logout')->name('logout');
        Route::get('admin/login.html', 'logout')->name('logout');
    });
});