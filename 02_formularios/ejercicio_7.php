<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 prueba</title>
</head>
<body>
    <h1>Ejercicio 7 prueba</h1>
    <p></p>
    <form action="./ejercicio_7.php" method="POST">
        <label>Número</label>
        <input type="text" name="numero"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <br>
    
    <?php
    
    //esto es para enviar el formulario en la misma pagina
    //El if es para preguntarle al servidor si el metodo es POST en este caso 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        echo $_POST["numero"];
    }

   
    ?>

</body>
</html>