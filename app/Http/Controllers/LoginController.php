<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Cuenta;
use App\Models\Imagen;
use App\Models\Perfil;

class LoginController extends Controller
{

    public function autenticar(Request $request){
        $user = $request->user;
        $password = $request->password;

        if(Auth::attempt(['user'=>$user,'password'=>$password])){
            return redirect()->route('public.index');

        }

        return back()->withErrors([
            'user' => 'Credenciales Incorrectas',
        ])->onlyInput('user');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('public.index');
    }

    public function registrar(){
        return view('public.registrar');
    }

    public function store(Request $request){
        $r = Cuenta::find($request->user);
        if($request->user == null){
            return view('public.registrar');
        }elseif($r <> null){
            return view('public.registrar');
        }else{
            $cuenta = new Cuenta();
            $cuenta->perfil_id =2;
            $cuenta->user = $request->user;
            $cuenta->password = Hash::make($request->password);
            $cuenta->nombre = $request->nombre;
            $cuenta->apellido = $request->apellido; 
            $cuenta->save();
            return redirect()->route('public.login');
        }
        

    }
}
