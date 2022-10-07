<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style3.css">
    <title>Ejercicio 3</title>
</head>

<body>
    <h1>
        EJERCICIO 3:

        Crear un formulario que reciba el nombre y la edad de una persona y
        muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
        a su edad. Además:
        - Convertir la edad a un número entero
        - Convertir el nombre introducido a minúsculas salvo la primera letra, que será mayúscula
    </h1>

    <form action="./ejercicio_3_respuesta.php" method="POST">
        <label id="nombre">Nombre</label>
        <input type="text" name="nombre"><br>
        <label id="edad">Edad</label><br>
        <input type="text" name="edad"><br>
        <input type="submit" value="Enviar">
    </form>


</body>

</html>