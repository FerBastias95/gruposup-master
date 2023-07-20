<?php
    registrar();
    function registrar(){
        include('../conexion/conexion.php');

        if (!isset($_POST['nombre']) || !isset($_POST['apellidos'] ) || !isset($_POST['empresa'] ) || !isset($_POST['correo'] ) || !isset($_POST['contrasena'] ) || !isset($_POST['confirmar'] )) {
            echo 'Falta rellenar un campo';
            return FALSE;
        }

        $sql = "INSERT INTO empresa (nombreRep, apellidosRep, nombreEmp, correoRep, contrasenaRep) VALUES ('$_POST[nombre]', '$_POST[apellidos]', '$_POST[empresa]', '$_POST[correo]', '$_POST[contrasena]')";
        if ($conexion->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
          }
        return TRUE;
    }
?>