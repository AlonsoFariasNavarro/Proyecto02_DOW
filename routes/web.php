<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\LoginController;

Route::get('/',[PublicController::class,'index'])->name('public.index');
Route::get('/login',[PublicController::class,'login'])->name('public.login');



//artista
Route::get('/registrar',[ArtistaController::class,'registrar'])->name('artista.registrar');
Route::post('/registrar',[ArtistaController::class,'store'])->name('artista.store');
Route::get('/artista',[ArtistaController::class,'index'])->name('artista.index');





//login
Route::post('/artista2',[LoginController::class,'autenticar'])->name('usuarios.autenticar');
