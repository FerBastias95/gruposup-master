<?php 
session_start();

if(isset($_SESSION['loggedin'])) {
    header('Location: ../gruposup-master/index.php');
}
else {
    header('Location: ../login.php');
}

?>