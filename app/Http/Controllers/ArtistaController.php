<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArtistaRequest;
use App\Models\Cuenta;
use Illuminate\Support\Facades\Hash;
use App\Models\Imagen;
use App\Http\Middleware\ArtistaMiddleware;
use Illuminate\Support\Facades\Storage;

class ArtistaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware(ArtistaMiddleware::class);
    }

    public function registrar(){
        return view('artista.registrar');
    }
    public function index(){
        $imagenes = Imagen::orderBy('id')->get();
        return view('artista.index',compact(['imagenes']));
    }
    
    public function subirimagen(Request $request){
        return $request->all();
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
    public function upload(Request $request){
        $request->validate([
            'titulo' => 'required|string',
            'archivo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $archivo = $request->file('archivo');
        $titulo = $request->input('titulo');
        $archivoNombre = $titulo . '.' . $archivo->getClientOriginalExtension();
    
        $archivo->storeAs('', $archivoNombre);
    
        $imagen = new Imagen();
        $imagen->cuenta_user = auth()->user()->user;
        $imagen->titulo = $titulo;
        $rutaImagen = $request->file('archivo')->move(('carpeta_publica'), $request->titulo . '.jpg');
        $imagen->archivo = $rutaImagen;
        $imagen->baneada = false;
        $imagen->motivo_ban = '';
    
        $imagen->save();

        return redirect()->route('artista.index');
    }

    

}
