<?php

namespace App\Http\Controllers;
use App\Models\Cuenta;
use App\Models\Imagen;
use App\Models\Perfil;
use App\Http\Middleware\AdminMiddleware;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware(AdminMiddleware::class);
    }

    public function index(){
        $imagenes = Imagen::orderBy('id')->get();
        $perfiles = Perfil::orderBy('id')->get();
        $cuentas = Cuenta::orderBy('user')->get();
        return view('admin.index',compact(['imagenes','cuentas','perfiles']));
    }

    public function editar($cuenta){
        $cuenta = Cuenta::where('user',$cuenta)->first();
        return view('admin.editar',compact('cuenta'));
    }

    public function confirmar(Request $request){
        $user = $request->user;
        $nombre = $request->nombre;
        $apellido = $request->apellido;
        return view('admin.confirmarEdit',compact(['user','nombre','apellido']));
    }

    public function update(Request $request){
        $cuenta = Cuenta::where('user',$request->user)->first();
        $cuetna->nombre = $request->nombre;
        $cuetna->apellido = $request->apellido;
        $cuenta->save();
        return redirect()->route('admin.index');
    }

    public function fotos(){
        $imagenes = Imagen::orderBy('id')->get();
        $perfiles = Perfil::orderBy('id')->get();
        $cuentas = Cuenta::orderBy('user')->get();
        return view('admin.fotos',compact(['imagenes','cuentas','perfiles']));
    }
    public function confirmarBan(Request $request){
        $motivo=$request->ban;
        $foto = Imagen::where('titulo',$request->titulo)->first();
        $foto->motivo_ban = $motivo;
        $foto->baneada = true;
        $foto->save();
    }
    public function banear(Request $request, $usuario){
        $usuario = Cuenta::orderBy('user')->first();
        $foto = Imagen::where('titulo',$request->titulo)->first();
        return view('admin.banear',compact(['usuario','foto']));
        
    }

    public function destroy($cuenta){
        $imagenesEliminadas = Imagen::where('cuenta_user',$cuenta)->get();
            foreach($imagenesEliminadas as $imagenesEliminada);
                $imagenesEliminada->delete();       

        $cuenta = Cuenta::where('user',$cuenta)->first();
        if(auth()->user()->user == $cuenta->user){
            return redirect()->route('admin.index');
        }
        $cuenta->delete();
        return redirect()->route('admin.index');
    }

}
