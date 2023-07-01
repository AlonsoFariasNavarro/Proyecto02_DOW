@extends('templates.master')

@section('contenido-principal')
    <div class="container-fluid justify-content-center align-items-center bg-light">
        <div class="row">
            <!-- COL de los cards -->
            <div class="col-6  justify-content-start mb-2">     
                <div class="card ">
                    <div class="card-header text-center">                        
                        <h3>Mis fotos</h3>
                    </div>
                    <div class="card-body">
                        <div class="col d-flex "> 
                        @foreach($imagenes as $num=>$imagen)
                            @if(auth()->user()->user ==$imagen->cuenta_user)                              
                            <div class="card m-3">
                                <div class="card-header align-middle text-center">
                                    <h6>{{$imagen->titulo}}</h6>
                                </div>                                   
                                <div class="card-body">
                                    <img src="{{asset($imagen->archivo)}}" class="card-img-top">
                                    <hr>
                                    <h6>Imagen subida por: {{$imagen->cuenta_user}}</h6>
                                    @if($imagen->baneada == 1)
                                        <span style="color:red;">
                                            <h6>Imagen Baneada</h6>
                                        </span>
                                        <p>Motivo del ban: {{$imagen->motivo_ban}}</p>
                                    @endif
                                </div>                       
                            </div>  
                            @endif
                        @endforeach  
                        </div>                                                                                 
                    </div>
                </div>               
            </div>
            <div class="col-6  justify-content-end mb-2">     
                <div class="card ">
                    <div class="card-header ">
                        <h2 class="text-center" >Agregar foto</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('artista.agregar')}}" enctype="multipart/form-data">
                                @csrf   
                                <div class="mb-3">
                                    <label for="" class="form-label">User</label>
                                    <input type="text" class="form-control "disabled id="user"name="user" value="{{auth()->user()->user}}">
                                </div>                           
                                <div class="mb-3">
                                    <label for="" class="form-label">Titulo de la imagen</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo">
                                </div>
                                <div>
                                    <label for="formFileLg" class="form-label">SELECCIONA FOTO</label>
                                    <input class="form-control" id="imagen" type="file" name="archivo" accept="image/*">
                                </div>                                                          
                                <button type="submit" class="btn btn-primary m-3">Subir imagen</button>                               
                        </form>                            
                    </div>                                  
                </div>
            </div>     
     
@endsection