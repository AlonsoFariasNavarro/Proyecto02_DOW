<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\LoginController;

//publico general
Route::get('/',[PublicController::class,'index'])->name('public.index');
Route::get('/login',[PublicController::class,'login'])->name('public.login');
Route::get('/logout',[LoginController::class,'logout'])->name('public.logout');
Route::get('/filtrado',[PublicController::class,'filtrado'])->name('public.filtrado');

//admin
Route::get('/admin',[AdminController::class,'index'])->name('admin.index');


//artista
Route::get('/registrar',[ArtistaController::class,'registrar'])->name('artista.registrar');
Route::post('/registrar',[ArtistaController::class,'store'])->name('artista.store');
Route::get('/artista',[ArtistaController::class,'index'])->name('artista.index');
Route::post('/artista',[ArtistaController::class,'agregarImagen'])->name('artista.agregar');


//login
Route::post('/usuario/login',[LoginController::class,'autenticar'])->name('usuarios.autenticar');
Route::post('/usuario/logout',[LoginController::class,'logout'])->name('usuarios.logout');
