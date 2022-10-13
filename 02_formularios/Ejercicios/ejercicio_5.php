<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_ej_5.css">
    <title>Ejercicio 5</title>


    </div>
</head>

<body>
    <h1>
        Asegurarse de que funciona con cualquier valor válido.

        No se admiten exponentes negativos. vale
    </h1>
    <form action="./ejercicio_5_respuesta.php" method="POST">
        <label>Base</label><br>
        <input type="text" name="base"><br><br>
        <label>Exponente</label><br>
        <input type="text" name="exponente"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <br><br>
    <?php
    require 'footer.php';
    ?>
</body>

</html>