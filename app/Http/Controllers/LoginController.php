<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cuenta;
use App\Models\Imagen;
use App\Models\Perfil;

class LoginController extends Controller

{
    public function __construct(){
        $this->middleware('auth')->except(['autenticar','logout']);
    }

    public function autenticar(Request $request)
    {
        $user = $request->user;
        $password = $request->password;

        if(Auth::attempt(['user'=>$user,'password'=>$password])){
            //echo(auth()->user()->password);
            return redirect()->route('artista.index');

        }

        return back()->withErrors([
            'user' => 'Credenciales Incorrectas',
        ])->onlyInput('user');
    }
}
