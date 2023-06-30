<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\PublicController;

Route::get('/',[PublicController::class,'index'])->name('public.index');
Route::get('/login',[PublicController::class,'login'])->name('public.login');
Route::get('/registrar',[ArtistaController::class,'registrar'])->name('artista.registrar');


//artista
Route::get('/registrar',[ArtistaController::class,'registrar'])->name('artista.registrar');
Route::post('/registrar',[ArtistaController::class,'store'])->name('artista.store');
