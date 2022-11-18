<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header('location: http://localhost/06_bbdd/tienda_ropa/public/clientes/inicio_sesion_cliente.php');
} else {
    echo "<p>Bienvenid@ " . $_SESSION["usuario"] . "</p>";
}
?>

