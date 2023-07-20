<?php
	include_once("conexion/conexion.php");
	$sql = "SELECT idProd, idSuper, nombreProd, catProd, precioProd, link_Img FROM producto";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
?>
    <div class="col mb-5">
        <div class="card h-100" data-href="product.php">
            <!-- Imagen del producto, solo copie y pegue el link de la imagen del jumbo xD-->
            <img class="card-img-top" src="<?php echo $record['link_Img']; ?>" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder"><?php echo $record['nombreProd']; ?></h5>
                    <!-- Product price-->
                    <?php echo $record['precioProd']; ?>
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Seleccionar!</a></div>
            </div>
        </div>
    </div>
<?php } ?>