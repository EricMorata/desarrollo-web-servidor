<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_ej_4.css">
    <title>Ejercicio 4</title>
</head>

<body>
    <h1>Ejercicio 4</h1>
    <form action="./ejercicio_4_respuesta.php" method="GET">
        <label id="frase">Frase</label><br><br>
        <input type="text" name="frase"><br><br>
        <label id="encabezado">Encabezado</label><br><br>
        <input type="text" name="encabezado"><br><br>
        <input type="submit" value="Enviar">

    </form>
    <br><br>
    <?php
   require 'footer.php';
   ?>
</body>

</html>