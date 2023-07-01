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
Route::post('/filtrado',[PublicController::class,'filtrado'])->name('public.filtrado');
Route::get('/filtrado',[PublicController::class,'filtrado'])->name('public.filtrado');

//admin
Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
Route::get('/admin/perfiles',[AdminController::class,'perfiles'])->name('admin.perfil');
Route::delete('/admin/{cuenta}',[AdminController::class,'destroy'])->name('admin.destroy');
Route::get('/admin/editar/{user}',[AdminController::class,'editar'])->name('admin.editar');
Route::get('/admin/editar/{user}/confirmar',[AdminController::class,'confirmar'])->name('admin.confirmar');
Route::put('/admin/editar/{user}/confirmar/update',[AdminController::class,'update'])->name('admin.update');
Route::get('/admin/fotos',[AdminController::class,'fotos'])->name('admin.fotos');
Route::get('/admin/fotos/banear/{foto}',[AdminController::class,'banear'])->name('admin.banear');

//artista
Route::get('/artista',[ArtistaController::class,'index'])->name('artista.index');
Route::post('/artista/subirimagen',[ArtistaController::class,'upload'])->name('artista.agregar');


//artista
Route::get('/registrar',[ArtistaController::class,'registrar'])->name('artista.registrar');
Route::post('/registrar',[ArtistaController::class,'store'])->name('artista.store');



//login
Route::post('/usuario/login',[LoginController::class,'autenticar'])->name('usuarios.autenticar');
Route::post('/usuario/logout',[LoginController::class,'logout'])->name('usuarios.logout');
