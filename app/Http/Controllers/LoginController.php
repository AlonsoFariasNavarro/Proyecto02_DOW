<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller

{
    //

    public function autenticar(Request $request)
    {
        $user = $request->user;
        $password = $request->password;
        echo($user);
        echo($password);
        exit();
        
        if(Auth::attempt(['user'=>$user,'password'=>$password])){
            return redirect()->route('artista.index');
        }
    }
}
