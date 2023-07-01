@extends('templates.master')

@section('contenido-principal')
<div class="container-fluid">
    <div class="row">
        <div class="col-3"></div>
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <h5>Banear foto de {{$usuario->user}}</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset($foto->archivo)}}" class="card-img-top">
                    <hr>
                    <form action="{{route('admin.confirmarBan')}}" method="POST">
                        @method('PUT')
                        @csrf
                        <label class="my-2" for="titulo">Titulo</label>
                        <input name="titulo" type="text" class="form-control" value="{{$foto->titulo}}" disabled>
                        <input name="titulo" type="text" class="form-control" value="{{$foto->titulo}}" hidden>
                        <label class="my-2" for="ban">Motivo de Ban</label>
                        <input name="ban" type="text" class="form-control">
                        <div class="d-flex justify-content-end pt-4">
                            <button class="btn btn-warning px-2" type="reset">Cancelar</button>
                            <button class="btn btn-success mx-2" type="submit">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
@endsection