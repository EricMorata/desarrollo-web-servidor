

<?php

$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="admin";
$dbname="db_tienda_ropa";

$conexion = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ("Error en la conexión");

//$con->close();
?>