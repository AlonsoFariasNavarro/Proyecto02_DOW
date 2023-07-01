<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/custom-colors.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('hojas-estilo')
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{asset('images/folder.png')}}" class="mx-4" style="height: 2rem;">
            <p class="fw-bold">IMG Folder</p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if(auth()->check())
                <p class="fw-bold"> Bienvenido {{auth()->user()->user}}</p>
            @endif
            <div class="col-4"></div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if(auth()->check())
                    @if(auth()->user()->perfil_id == 1)
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{Route('public.index')}}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{Route('admin.index')}}">Cuentas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{Route('admin.fotos')}}">Fotos</a>
                        </li>
                    @elseif(auth()->user()->perfil_id == 2)
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{Route('public.index')}}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{Route('artista.index')}}">Perfil</a>
                        </li>
                    @endif
                @else
                    <h5>Bienvenido a IMG Folder</h5>
                @endif
            </ul>
            @if(auth()->check())
                <a href="{{route('public.logout')}}" class="btn btn-success">Cerrar sesion</a>
            @else
                <a href="{{route('public.login')}}" class="btn btn-success">Iniciar Sesion</a>
            @endif
                
        </div>
    </div>
    </nav>

    @yield('contenido-principal')

    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @yield('scripts-manual')
</body>
</html>