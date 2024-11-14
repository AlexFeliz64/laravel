<?php

use App\Http\Controllers\Admin\ClientesAdminController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MisViajesController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mis-viajes', [MisViajesController::class, 'index'])->name('mis-viajes');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::resource('admin/clientes', ClientesAdminController::class)->names('admin.clientes')->parameters(['clientes' => 'cliente']);
    Route::get('admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard.index');


});
