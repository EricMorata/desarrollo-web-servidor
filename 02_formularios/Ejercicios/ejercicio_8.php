<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>EJERCICIO 8</h1>

<h2>Crear un formulario que reciba un número. Mostrar la tabla de multiplicar de ese número.
Hacerlo mediante una tabla HTML. </h2>
    
<form action="./ejercicio_8_respuesta.php" method="POST">
        <label>Número</label>
        <input type="number" name="numero">
        
        <input type="submit" value="Enviar"><br>
    </form>
    <br><br>
    <?php
   require 'footer.php';
   ?>
</body>
</html>
