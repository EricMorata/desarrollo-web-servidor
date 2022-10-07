<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Respuesta</title>
</head>

<body>
    <h1>Respuesta Ejercicio 3 </h1>

    <?php
    $nombre = $_POST["nombre"];
    $nombre = ucfirst($nombre);
    $edad = (int)$_POST["edad"];

    echo "<p>$nombre</p>";

    if ($edad < 18  && $edad >=0) {
        echo "<p>Es menor de edad</p>";
    } elseif ($edad >= 18 && $edad <= 65) {
        echo "<p>Es una persona adulta</p>";
    } elseif ($edad > 65 && $edad >= 122){
        echo "<p>Es una persona jubilada</p>";
    } else{
        echo "<p>la edad no es valida</p>";
    }


    ?>


</body>

</html>