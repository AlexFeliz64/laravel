<?php

use App\Http\Controllers\Admin\ArticulosAdminController;
use App\Http\Controllers\Admin\ProveedoresAdminController;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Solo carga la vista
//Route::get('/articulos', function () {
//    return view('articulos.index');
//});

//Route::get('/articulos', [ArticulosController::class, 'index']);
//Route::get('/articulos/create', [ArticulosController::class, 'create']);
//Route::post('/articulos/store', [ArticulosController::class, 'store']);
//Route::get('/articulos/edit/{id}', [ArticulosController::class, 'edit']);
//Route::put('/articulos/update/{id}', [ArticulosController::class, 'update']);
//Route::delete('/articulos/destroy/{id}', [ArticulosController::class, 'destroy']);
//Route::get('/articulos/show/{id}', [ArticulosController::class, 'show']);


//Route::resource('/articulos', ArticulosController::class);

Route::get('/articulos', [ArticulosController::class, 'index'])->name('articulos.index');
Route::get('/proveedores', [ProveedoresController::class, 'index'])->name('proveedores.index');
//Route::get('/home', [HomeController::class]);
Route::get('/', HomeController::class);


Route::resource('admin/articulos', ArticulosAdminController::class)->names('admin.articulos');
Route::resource('admin/proveedores', ProveedoresAdminController::class)->names('admin.proveedores');



require __DIR__.'/auth.php';





