<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
        header("location: http://localhost/06_bbdd/tienda_ropa/public/inicio_sesion_cliente.php");
    }
?>

