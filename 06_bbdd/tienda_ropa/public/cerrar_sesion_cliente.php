<?php
session_start();
session_destroy();
header("location: http://localhost/06_bbdd/tienda_ropa/public/inicio_sesion_cliente.php");
?>