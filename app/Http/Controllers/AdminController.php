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

    public function banear(Request $request, $titulo){
        $foto = Imagen::where('titulo',$titulo)->first();

    }

    public function destroy($cuenta){
        $imagenesEliminadas = Imagen::where('cuenta_user',$cuenta)->first();
        if($imagenesEliminadas <> null){
            foreach($imagenesEliminadas as $imagenesEliminada);
                $imagenesEliminada->delete();       
        }
        $cuenta = Cuenta::where('user',$cuenta)->first();
        $cuenta->delete();
        return redirect()->route('admin.index');
    }

}
