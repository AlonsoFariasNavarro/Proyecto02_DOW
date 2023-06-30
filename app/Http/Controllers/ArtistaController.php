<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArtistaRequest;
use App\Models\Cuenta;

class ArtistaController extends Controller
{
    //
    public function registrar(){
        return view('artista.registrar');
    }

    
    public function store(Request $request){
        $cuenta = new Cuenta();
        $cuenta->user = $request->user;
        $cuenta->password = $request->password;
        $cuenta->nombre = $request->nombre;
        $cuenta->apellido = $request->apellido;
        $cuenta->save();
        return redirect()->route('public.login');

    }

}
