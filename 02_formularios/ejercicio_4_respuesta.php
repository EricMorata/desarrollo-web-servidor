<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 Respuesta</title>
</head>

<body>
    <h1>Ejercicio 4 respuesta</h1>
    <?php
    $frase = $_GET["frase"];
    $encabezado = $_GET["encabezado"];
    echo "<h$encabezado>$frase</h$encabezado>";
    ?>
</body>

</html>