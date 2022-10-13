<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>respuesta formulario</title>
</head>

<body>
    <h1>Respuesta </h1>

    <?php
    /*
    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
    echo "<p>$nombre</p>";
    echo"<p>$edad</p>";
    */

    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    echo "<p>$nombre</p>";
    echo"<p>$edad</p>";


    ?>

</body>

</html>