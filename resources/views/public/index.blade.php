@extends('templates.master')

@section('contenido-principal')
    <div class="container-fluid justify-content-center align-items-center bg-light">
        <div class="row">
            <!-- COL de los cards -->
            <div class="col d-flex justify-content-end mb-2">
                    <select class="form-select" aria-label="a">
                        <option selected hidden>Filtrar Artistas</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="3">Quitar Filtro</option>
                    </select>
            </div>
            <hr>
            <div class="col d-flex justify-content-center">
                @foreach($imagenes as $imagen)
                    <div class="card m-3">
                        <div class="card-header align-middle text-center">
                            <h6>{{$imagen->titulo}}</h6>
                        </div>
                        <div class="card-body">
                            {{$imagen->archivo}}
                            <hr>
                            subida por: {{$imagen->cuenta_user}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection