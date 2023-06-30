<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenController;

Route::get('/',[ImagenController::class,'index'])->name('images.index');