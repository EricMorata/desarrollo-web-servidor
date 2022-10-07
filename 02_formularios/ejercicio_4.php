<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <h1>
        Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
        en un encabezado de dicho número.

        Si introducimos "5" y "Hola mundo" se mostrará un encabezado <h5>Hola mundo</h5>
    </h1>
        <form action="./ejercicio_4_respuesta.php" method="GET">
        <label id="frase">Frase</label><br><br>
        <input type="text" name="frase"><br><br>
        <label id="encabezado">Encabezado</label><br><br>
        <input type="text" name="encabezado"><br><br>
        <input type="submit" value="Enviar">

        </form>
</body>

</html>