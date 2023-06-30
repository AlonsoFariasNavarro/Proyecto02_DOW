<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use App\Models\Perfil;

class ImagenController extends Controller
{
    public function index(){
        return view('imagenes.index');
    }
}
