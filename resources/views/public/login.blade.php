<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/custom-colors.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Inicio de Sesion</title>
</head>

<!-- style="background: linear-gradient(to bottom, #026597 40%, #990099 100%);" -->
<body class="bg-white">
    <div class="contariner-fluid min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="row">
            <div class="col rounded bg-ligh" style="height: 36rem; width: 33rem;">
                <div class="row">
                    <div class="col d-flex flex-column align-items-center py-5">
                        <div class="rounded bg-white">
                            <img class=" rounded"style="width: 9rem;" src="">
                        </div>
                        <div class="col py-3">
                            <img src="{{asset('images/folder.png')}}" class="  mx-4 " style="height: 4rem;">
                            <h3 class="fb-bold">IMG Folder</h3>
                           
                        </div>
                        <div class="col" style="width: 30rem;">
                            <div class="card p-3">
                                <form action="{{route('usuarios.autenticar')}}" method="POST">
                                    <!-- @method('PUT') -->
                                    @csrf
                                    <div class="mb-3">
                                        <label for="user" class="form-label">Ingresa nombre de usuario </label>
                                        <input type="text" id="user" name="user" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="row">                                      
                                        <div class="col py-3">
                                            <button class="btn btn-success" type="submit">Iniciar Sesion</button>
                                        </div>                                       
                                    </div>
                                    <div class="row">
                                        <div class="col  ">
                                            <h6>¿No tienes cuenta?</h6>
                                            <a href="{{route('login.registrar')}}" class="btn btn-warning">Crear cuenta</a>
                                        </div> 
                                    </div>
                                </form>
                                <a href="{{route('public.index')}}" class="btn btn-primary mt-2">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>