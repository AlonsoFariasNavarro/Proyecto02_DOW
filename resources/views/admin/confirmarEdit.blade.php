@extends('templates.master')

@section('contenido-principal')
    <div class="container-fluid justify-content-center align-items-center bg-ligh min-vh-100">
        <div class="row">
            <div class="col-3"></div>
            <div class="col">
                <div class="card my-3">
                    <div class="card-header d-flex justify-content-center">
                        <h5>Confirmar Edición</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.update',$user)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <label class="mb-2" for="user">Usuario</label>
                            <input name="user" type="text" class="form-control" value="{{$user}}" disabled>
                            <label class="my-2" for="nombre">Nombre</label>
                            <input name="nombre" type="text" class="form-control" value="{{$nombre}}" disabled>
                            <label class="my-2" for="apellido">Apellido</label>
                            <input name="apellido" type="text" class="form-control" value="{{$apellido}}" disabled>
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