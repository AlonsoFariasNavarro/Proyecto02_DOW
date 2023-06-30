<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/custom-colors.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    <div class="container-fluid min-vh-100" style="background: red;">
        <div class="row">
            <div class="col d-flex flex-column align-items-center py-5">
                <div class="card">
                    <div class="card-header">
                    <span class="material-icons">
                        person_add
                    </span>
                        <h1>Agregar usuarios</h1>
                        <div class="card-body">
                            @csrf
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="NombreUsuario" class="form-label">Nombre de usuario</label>
                                    <input type="text" class="form-control" id="NombreUsuario" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="Contraseña">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                                              
                                <button type="submit" class="btn btn-primary">Agregar usuario</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
    
</body>
</html>