<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\Admin\ArticulosAdminController;
use App\Http\Controllers\Admin\ProveedoresAdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/articulos', [ArticulosController::class, 'index'])->name('articulos.index');
Route::get('/', HomeController::class);

Route::resource('admin/articulos', ArticulosAdminController::class)->names('admin.articulos');

Route::resource('admin/proveedores', ProveedoresAdminController::class)->names('admin.proveedores')->parameters(['proveedores' => 'proveedor']);

require __DIR__.'/auth.php';
