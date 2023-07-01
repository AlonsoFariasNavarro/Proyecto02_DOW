<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
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
}
