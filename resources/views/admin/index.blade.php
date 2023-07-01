@extends('templates.master')

@section('contenido-principal')
    <div class="container-fluid justify-content-center align-items-center bg-ligh min-vh-100">
        <div class="row">
            <div class="col my-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Cuentas</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Tipo De Cuenta</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="p-0">
                                @foreach($cuentas as $cuenta)
                                    <tr>
                                        <td class="aling-middle">{{$cuenta->user}}</td>
                                        <td class="aling-middle">{{$cuenta->nombre}}</td>
                                        <td class="aling-middle">{{$cuenta->apellido}}</td>
                                        <td class="aling-middle">
                                            @if($cuenta->perfil_id == 1)
                                                Administrador
                                            @elseif($cuenta->perfil_id == 2)
                                                Artista
                                            @endif
                                        </td>
                                        <td>
                                            <div class="col d-flex m-2" style="">
                                                <form action="#" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger p-0 my-0" type="submit"><span class="material-icons">delete</span></button>
                                                </form>
                                                <form action="#">
                                                    @csrf
                                                    <button class="btn btn-sm btn-warning text-white mx-2 my-0 p-0" type="submit"><span class="material-icons">edit</span></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-3 my-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Perfiles</h5>
                    </div>
                    <div class="card-body">
                        <li>Administrador</li>
                        <li>Artista</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection