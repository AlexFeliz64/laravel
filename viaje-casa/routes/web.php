<?php

use App\Http\Controllers\Admin\ViajesAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViajesController;
use App\Http\Controllers\Admin\ClientesAdminController;
use App\Http\Controllers\Admin\EmpleadosAdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/viajes', [ViajesController::class, 'index'])->name('viajes.index');
Route::get('/', HomeController::class);

Route::resource('admin/clientes', ClientesAdminController::class)->names('admin.clientes')->parameters(['clientes' => 'cliente']);

Route::resource('admin/empleados', EmpleadosAdminController::class)->names('admin.empleados')->parameters(['empleados' => 'empleado']);

Route::resource('admin/viajes', ViajesAdminController::class)->names('admin.viajes')->parameters(['viajes' => 'viaje']);


require __DIR__.'/auth.php';
