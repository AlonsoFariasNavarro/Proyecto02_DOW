<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Inicio de Sesion</title>
</head>

<!-- style="background: linear-gradient(to bottom, #026597 40%, #990099 100%);" -->
<body style="background: linear-gradient(to bottom, #074469 40%, #026597 100%);">
    <div class="contariner-fluid min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="row">
            <div class="col rounded" style="height: 36rem; width: 33rem; background-color: #201C85;">
                <div class="row">
                    <div class="col d-flex flex-column align-items-center py-5">
                        <div class="rounded bg-white">
                            <img class=" rounded"style="width: 9rem;" src="{{asset('images/isotipo_usm_color.jpg')}}">
                        </div>
                        <div class="col py-3 text-white">
                            <p>Propuestas TSI</p>
                        </div>
                        <div class="col" style="width: 30rem;">
                            <div class="card p-3">
                                <form action="{{route('home.loginUser')}}" method="POST">
                                    <!-- @method('PUT') -->
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Rut Usuario</label>
                                        <input type="text" id="username" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="userid" id="Estudiante" value="Estudiante" checked>
                                              <label class="form-check-label" for="Estudiante">
                                                Estudiante
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="userid" id="Profesor" value="Profesor">
                                              <label class="form-check-label" for="Profesor">
                                                Profesor
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="userid" id="Administrador" value="Administrador">
                                              <label class="form-check-label" for="Administrador">
                                                Administrador
                                              </label>
                                            </div>
                                        </div>
                                        <div class="col-4 py-4">
                                            <button class="btn btn-success" type="submit">Iniciar Sesion</button>
                                        </div>
                                    </div>
                                </form>
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