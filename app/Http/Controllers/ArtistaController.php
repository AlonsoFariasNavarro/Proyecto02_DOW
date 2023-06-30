<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    //
    public function registrar(){
        return view('artista.registrar');
    }
}
