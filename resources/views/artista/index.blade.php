@extends('templates.master')

@section('contenido-principal')
    <div class="container-fluid justify-content-center align-items-center bg-light">
        <div class="row">
            <!-- COL de los cards -->
            <div class="col-6  justify-content-start mb-2">     
                <div class="card ">
                    <div class="card-header text-center">
                        <h3>Mis fotos</h3>
                        <div class="card-body">
                            <div class="col d-flex ">                               
                                <div class="card m-3">
                                    <div class="card-header align-middle text-center">
                                        <h6>titulo</h6>
                                    </div>
                                    <div class="card-body">
                                        archivo
                                        <hr>
                                        subida por:
                                    </div>
                                </div>                              
                            </div>
                            <div class="col d-flex ">                               
                                <div class="card m-3">
                                    <div class="card-header align-middle text-center">
                                        <h6>titulo</h6>
                                    </div>
                                    <div class="card-body">
                                        archivo
                                        <hr>
                                        subida por:
                                    </div>
                                </div>                              
                            </div>
                                                       
                        </div>
                    </div>
                </div>               
            </div>
            <div class="col-6  justify-content-end mb-2">     
                <div class="card ">
                    <div class="card-header ">
                        <h2 class="text-center" >Agregar foto</h2>
                        <div class="card-body">
                        <form method="POST" action="{{route('artista.agregar')}}">
                                @csrf   
                                <div class="mb-3">
                                    <label for="" class="form-label">User</label>
                                    <input type="text" class="form-control "disabled id="user"name="user" value="{{auth()->user()->user}}">
                                </div>                           
                                <div class="mb-3">
                                    <label for="" class="form-label">Titulo de la imagen</label>
                                    <input type="text" class="form-control" id="titulo"name="titulo">
                                </div>
                                <div>
                                    <label for="formFileLg" class="form-label">SELECCIONA FOTO</label>
                                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>                                                          
                                <button type="submit" class="btn btn-primary m-3">Agregar usuario</button>                               
                            </form>
                        </div>
                    </div>
                </div>                
            </div>
          
     
@endsection