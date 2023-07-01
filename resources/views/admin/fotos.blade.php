@extends('templates.master')
@section('user')
    @if(auth()->check())
        <p class=""> Bienvenido {{auth()->user()->user}}</p>
    @endif
@endsection

@section('contenido-principal')
    <div class="container-fluid justify-content-center align-items-center bg-ligh min-vh-100">
        <div class="row">
            <div class="col my-3">
                <form action="{{route('public.filtrado')}}"method="POST">
                    @csrf
                    <div class="input-group">
                        <select class="form-select" id="user" name="compadre">
                            <option selected hidden>Filtrar Artista</option>
                            @foreach($cuentas as $index => $cuenta)
                                <option name="compadre" value="{{$cuenta->user}}">{{$cuenta->nombre}} {{$cuenta->apellido}}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-success" type="submit">Filtrar</button>
                    </div>
                </form>
            </div>
            <hr>
            <!-- COL de los cards -->
            <div class="col d-flex justify-content-center">
                @foreach($imagenes as $imagen)
                    @if(!$imagen->baneada)
                        <div class="card m-3">
                            <div class="card-header align-middle text-center">
                                <h6>{{$imagen->titulo}}</h6>
                            </div>                                   
                            <div class="card-body">
                                <img src="{{asset($imagen->archivo)}}" class="card-img-top">
                                <hr>
                                <h6>Imagen subida por: {{$imagen->cuenta_user}}</h6>
                                <form action="{{route('admin.banear',$imagen->titulo)}}">
                                    <input type="text" name="nombrefoto" value="{{$imagen->cuenta_user}}" hidden>
                                    <button class="btn btn-danger" type="submit">Banear</button>
                                </form>
                            </div>                       
                        </div> 
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection