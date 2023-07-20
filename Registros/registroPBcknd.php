<?php
    registrar();
    function registrar(){
        include('../conexion/conexion.php');

        if (!isset($_POST['nombre']) || !isset($_POST['apellidos'] ) || !isset($_POST['correo'] ) || !isset($_POST['contrasena'] ) || !isset($_POST['confirmar'] )) {
            echo 'Falta rellenar un campo';
            return FALSE;
        }

        if (!isset($_POST['contrasena'] ) != !isset($_POST['confirmar'] )) {
          echo 'Las contraseñas no coinciden';
          return FALSE;
        }

        $sql = "INSERT INTO persona (nombreUP, apellidosUP, correoUP, contrasenaUP) VALUES ('$_POST[nombre]', '$_POST[apellidos]', '$_POST[correo]', '$_POST[contrasena]')";
        if ($conexion->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
          }
        return TRUE;
    }
?>