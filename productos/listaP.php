<!DOCTYPE html>
<html lang="en">
<?php include('../conexion/conexion.php') 
        
?>  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="../index.php">Solo Super!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="../supers/super.php">Supermercados</a></li>
                    </ul>

                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Lista
                        </button>                   
                    </form>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <a href="../Login/index.php" class="bi bi-door-open-fill">Iniciar Sesion</a>
                        </button>                    
                    </form>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <a href="../Login/creaSesn.php" class="bi bi-door-open-fill">Registrarse</a>
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                        </button>                    
                    </form>
                </div>
            </div>
        </nav>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Solo Super!</title>
        <!-- Icono pestaña pagina-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Mejores Ofertas!</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Solo para probar la BDD</p>
                </div>
            </div>
        </header>
        <!-- Productos pantalla principal-->
        <section class="py-5">
            <div class="parent-container d-flex">
                
                        <div class="col-3 px-4 px-lg-4">
                            <!-- Category -->
                            <div class="single category">
                                <h3 class="side-title">Categorias</h3>
                                    <ul class="list-group">
                                        <li><a href="" title="">Comida <span class="pull-right">(cantidad)</span></a></li>
                                        <li><a href="" title="">Bebestibles <span class="pull-right">(cantidad)</span></a></li>
                                        <button type="button" class="list-group-item list-group-item-action">Vestibulum at eros</button>
                                        <button type="button" onClick="" class="list-group-item list-group-item-action">nada</button>
                                    </ul>
                            </div>
                        </div>
                
                <div class="container px-4 px-lg-4 mt-4">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        
                        <?php
                        $sql = "SELECT idProd, idSuper, nombreProd, catProd, precioProd, link_Img FROM producto";
                        $resultset = mysqli_query($conexion, $sql) or die("database error:". mysqli_error($conexion));			
                        while( $record = mysqli_fetch_assoc($resultset) ) {
                        ?>

                        <div class="col mb-5">
                            <div class="card h-100" data-href="<?php echo $record['link_Img']?>&precio=<?php echo $record['precioProd']; ?>&id=<?php echo $record['idProd']; ?>&nombre=<?php echo $record['nombreProd']; ?>&cat=<?php echo $record['catProd']; ?>">
                                <!-- Imagen del producto-->
                                <img class="card-img-top" src="<?php echo $record['link_Img']; ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $record['nombreProd']; ?></h5>
                                        <!-- Product price-->
                                        $<?php echo $record['precioProd']; ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center" ?><a class="btn btn-outline-dark mt-auto" href="../product.php">Ver producto</a></div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; YGrupo 10 - SuperGrup</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    </body>
</html>