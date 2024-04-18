<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/577c509b41.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>

    <!-- Menú desplegable -->
    <div class="sidebar">
        <!-- Foto del empleado en un círculo -->
        <div class="profile-picture">
            <img src="asset/fondo.jpg" alt="Foto de perfil">
        </div>
        <!-- Mensaje de bienvenida -->
        <div class="welcome-message">
            Bienvenido Leonardo
        </div>
        <!-- Menú desplegable -->
        <div class="sidebar-menu">
            <!-- Aquí van los elementos del menú desplegable -->
        </div>
    </div>

    <div class="modal" id="modalSubir" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Subir Archivo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('subirArchivo') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Ingrese la lista de Bienes</label>
                            <input class="form-control" type="file" id="formFile" name="archivo" accept=".xls, .xlsx">
                            <span class="badge bg-success" id="nombreArchivo"></span>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Subir Archivo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="modal" id="modalElegir" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Elegir Lista</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Opciones
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($archivos as $archivo)
                            <li><a class="dropdown-item archivo" href="#" data-nombre="{{ $archivo }}">{{ $archivo }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div id="contenidoArchivoSeleccionado">
                         Aquí se mostrará el contenido del archivo seleccionado 
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="btnMostrar">Mostrar</button>
                </div>
            </div>
        </div>
    </div>-->
    
    <!-- Contenido principal -->
    <div class="main-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="blue-square">
                        <i class="fa-solid fa-file-import fa-3x mb-3"></i> <!-- Haciendo el icono más grande y agregando espacio debajo -->
                        <p class="upload-message">SUBIR ARCHIVO (.xlsx / xls)</p>
                        <button class="btn btn-primary" id="btnAbrirModal">Subir</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="red-square">
                        <i class="fa-regular fa-rectangle-list fa-3x mb-3"></i>
                        <p class="upload-message">Mostrar Lista</p>
                        <a href="/crud">
                            <button class="btn btn-danger" id="btnAbrirModalElegir">👍</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/ListarArchivo.js') }}"></script>
    <script src="{{ asset('js/FuncionModal.js') }}"></script>

</body>

</html>