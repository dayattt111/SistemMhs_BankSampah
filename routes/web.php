<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;

//Login & Reg
Route::get('/', [menuController::class, 'index']);
Route::get('/BackLogin', [menuController::class, 'backLogin']);
Route::get('/Daftar', [menuController::class, 'Daftar']);

//admin
Route::post('admin/dashboard', [menuController::class, 'adminDashboard']);


//petugas
Route::post('petugas/dashboard', [menuController::class, 'petugasDashboard']);


//warga
Route::post('warga/dashboard', [menuController::class, 'wargaDashboard']);
