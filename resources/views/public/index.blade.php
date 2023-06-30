@extends('templates.master')

@section('contenido-principal')
    <div class="container-fluid justify-content-center align-items-center">
        <div class="row">
            <!-- COL de los cards -->
            <div class="col-9 d-flex justify-content-center ">
                <div class="card m-3">
                    <div class="card-header align-middle text-center">
                        <h6>Titulo</h6>
                    </div>
                    <div class="card-body">
                        <hr>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum tortor non diam pharetra facilisis. Mauris scelerisque fermentum facilisis. Phasellus volutpat interdum sodales. Aliquam ex leo, iaculis a suscipit a, pellentesque dapibus ligula. Etiam in sapien dapibus, rutrum magna et, volutpat lacus. Aenean quam urna, bibendum id sodales eu, feugiat quis mauris. Proin tempor ante odio, et elementum arcu convallis et. Aliquam erat volutpat.</h4>
                    </div>
                </div>
                <div class="card m-3">
                    <div class="card-header align-middle text-center">
                        <h6>Titulo</h6>
                    </div>
                    <div class="card-body">
                        <hr>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum tortor non diam pharetra facilisis. Mauris scelerisque fermentum facilisis. Phasellus volutpat interdum sodales. Aliquam ex leo, iaculis a suscipit a, pellentesque dapibus ligula. Etiam in sapien dapibus, rutrum magna et, volutpat lacus. Aenean quam urna, bibendum id sodales eu, feugiat quis mauris. Proin tempor ante odio, et elementum arcu convallis et. Aliquam erat volutpat.</h4>
                    </div>
                </div>
                <div class="card m-3">
                    <div class="card-header align-middle text-center">
                        <h6>Titulo</h6>
                    </div>
                    <div class="card-body">
                        <hr>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum tortor non diam pharetra facilisis. Mauris scelerisque fermentum facilisis. Phasellus volutpat interdum sodales. Aliquam ex leo, iaculis a suscipit a, pellentesque dapibus ligula. Etiam in sapien dapibus, rutrum magna et, volutpat lacus. Aenean quam urna, bibendum id sodales eu, feugiat quis mauris. Proin tempor ante odio, et elementum arcu convallis et. Aliquam erat volutpat.</h4>
                    </div>
                </div> 
            </div>
            <div class="col">
            <div class="card m-3">
                    <div class="card-header align-middle text-center">
                        <h6>Titulo</h6>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col">
                                        <label for="user">Ingrese Nombre de Usuario</label>
                                        <input name="user" type="text">
                                    </div>
                                    <div class="col">
                                        <br>
                                        <label for="user">Ingrese Contraseña</label>
                                        <input name="user" type="text">
                                    </div>
                                    <div class="col text-end">
                                        <br>
                                        <button class="brn btn-primary">Iniciar Sesion</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection