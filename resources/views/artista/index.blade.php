@extends('templates.master')

@section('contenido-principal')
    <div class="container-fluid justify-content-center align-items-center bg-light">
        <div class="row">
            <!-- COL de los cards -->
            <div class="col d-flex justify-content-end mb-2">
                    <select class="form-select" >
                        <option selected hidden>Filtrar Artistas</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="3">Quitar Filtro</option>
                    </select>
            </div>
            <hr>
            <div class="col d-flex justify-content-center">
                
            </div>
        </div>
    </div>
@endsection