<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use App\Models\Imagen;
use App\Models\Perfil;
class PublicController extends Controller
{
    public function index(){
        $imagenes = Imagen::orderBy('id')->get();
        $cuentas = Cuenta::orderBy('user')->get();
        return view('public.index',compact(['imagenes','cuentas']));
    }
    public function login(){
        return view('public.login');
    }
    
    public function filtrado(Request $request ){
        if($request->compadre== 'reset' ){
            $imagenes = Imagen::orderBy('id')->get();
            $cuentas = Cuenta::orderBy('user')->get();
            return view('public.index',compact(['imagenes','cuentas']));

        }
        $usuario=$request->compadre;
        $cuentas = Cuenta::orderBy('user')->get();
        $imagenes = Imagen::orderBy('id')->get();
        return view('public.filtrado',compact(['imagenes','usuario','cuentas']));
    }
}
