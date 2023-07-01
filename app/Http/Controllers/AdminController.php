<?php

namespace App\Http\Controllers;
use App\Models\Cuenta;
use App\Models\Imagen;
use App\Models\Perfil;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $imagenes = Imagen::orderBy('id')->get();
        $cuentas = Cuenta::orderBy('user')->get();
        return view('admin.index',compact(['imagenes','cuentas']));
    }
}
