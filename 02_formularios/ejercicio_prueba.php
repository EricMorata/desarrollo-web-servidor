<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio prueba</title>
</head>
<body>
    <form action="./ejercicio_prueba.php" method="POST">
<label>Número</label>
<input type="text" name="numero"><br><br>
<input type="hidden" name="f" value="f_numero">
<input type="submit" value="Enviar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if($_POST["f"] == "f_numero"){
            echo "<p>Estoy en f_numero</p>";
        }
    }
    ?>

     <form action="ejercicio_prueba.php" method="post">
        <label>Nombre</label><br>
        <input type="text" name="nombre"><br><br>
        <input type="hidden" name="f" value="f_nombre">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if($_POST["f"] == "f_nombre"){
            echo "<p>Estoy en f_nombre</p>";
        }
    }
    ?>
   
</body>
</html>