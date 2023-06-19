<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/custom-colors.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('hojas-estilo')
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
            <img class="" style="height: 5rem;" src="{{ asset('images/isotipo_usm_color.jpg') }}">
            @yield('if-nombre')
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-4"></div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @yield('if-contenido')
                </ul>
                <a href="{{ asset('/') }}" class="btn btn-primary d-flex justify-content-end pt-2 pb-1"><h6>Cerrar Sesion</h6></a>
            </div>
        </div>
    </nav>

    @yield('contenido-principal')

    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @yield('scripts-manual')
</body>
</html>