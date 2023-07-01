<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArtistaRequest;
use App\Models\Cuenta;
use Illuminate\Support\Facades\Hash;
use App\Models\Imagen;

class ArtistaController extends Controller
{
    //
    public function registrar(){
        return view('artista.registrar');
    }
    public function index(){
        $imagenes = Imagen::orderBy('id')->get();
        return view('artista.index',compact(['imagenes']));
    }
    

    
    public function store(Request $request){
        $cuenta = new Cuenta();
        $cuenta->perfil_id =2;
        $cuenta->user = $request->user;
        $cuenta->password = Hash::make($request->password);
        $cuenta->nombre = $request->nombre;
        $cuenta->apellido = $request->apellido;
        $cuenta->save();
        return redirect()->route('public.login');

    }
    public function agregarImagen(Request $request){
        $request->file('archivo')->storeAs('',$request->file('archivo')->getClientOriginalName());
        $imagen= new Imagen();
        $imagen->cuenta_user =auth()->user()->user;
        $imagen->titulo = $request->titulo;
        $imagen->archivo=$request->file('archivo')->getClientOriginalName();
        $imagen->baneada =false;
        $imagen->motivo_ban ='';
        $imagen->save();


    }

}
