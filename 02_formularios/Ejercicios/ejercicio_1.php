<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_ej_1.css">
    <title>Formularios</title>
</head>

<body>
    <form action="./ejercicio_1_respuesta.php" method="post">

        <label id="nombre">Nombre</label><br>
        <input type="text" name="nombre"><br>
        <label id="edad">Edad</label><br>
        <input type="text" name="edad"><br>
        <input type="submit" value="Enviar">


    </form>
    <br><br>
    <?php
    require 'footer.php';
    ?>

</body>

</html>