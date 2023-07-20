<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        *{
            margin:0;
            padding: 0;
        }
        html{
            height: 100%;
        }
        body{
            height: 100%;
        }
        .span{
            width: 200px;
            margin-right: 20px;
            /* background-color: #dddd; */
            font-weight: bold;
        }
    </style>
    <title>Registro Empresa - SoloSuper!</title>
</head>

<body style="background-color: #dddd;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../index.php">Solo Super!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Supermercados</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Todos Los Productos</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">En Oferta!</a></li>
                            <li><a class="dropdown-item" href="#!">No se que mas</a></li>
                            <li><a class="dropdown-item" href="#!">No se que mas x2</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Lista
                    </button>
                </form>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <a href="../gruposup-master/Login/index.php" class="bi bi-door-open-fill">Iniciar Sesion</a>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="w-100 h-100 d-flex justify-content-center align-content-center align-items-center">
        <form action="./registroEBcknd.php" method="POST" class="p-4 border rounded col-lg-4" style="background-color:white;">
            <h1 class="mb-3 w-100 text-center">Registro Empresa</h1>

            <div class="input-group mb-3">
                <span class="input-group-text span">Nombre Representante</span>
                <input name="nombre" type="text" class="form-control" required/>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text span">Apellidos</span>
                <input name="apellidos" type="text" class="form-control" required/>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text span">Nombre Empresa</span>
                <input name="empresa" type="text" class="form-control" required/>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text span">Correo</span>
                <input name="correo" type="text" class="form-control" required/>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text span">Contraseña</span>
                <input name="contrasena" type="password" class="form-control" required/>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text span">Confirmar Contraseña</span>
                <input name="confirmar" type="password" class="form-control" required/>
            </div>
            
            <button class="btn btn-dark w-100">Registrarse</button>
        </form>
    </div>
    <a href="./registroPVista.php" class="fixed-bottom">¿Necesitas una cuenta Persona?</a>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>