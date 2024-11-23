<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\PeliculasAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PeliculasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/peliculas', [PeliculasController::class, 'index'])->name('peliculas');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard.index');
    Route::resource('admin/peliculas', PeliculasAdminController::class)->names('admin.peliculas');

});

Route::get('images/{fileType}/{fileName}', [ImageController::class, 'show'])->name('images.show');
