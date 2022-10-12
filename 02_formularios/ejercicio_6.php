<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_ej_6.css">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio 6</h1>
    <p>
        Formulario que reciba un número y devuelva su factorial.
        Factorial de 3: 1*2*3 = 6
        Factorial de 5: 1*2*3*4*5 = 120
    </p>

    <form action="./ejercicio_6_respuesta.php" method="POST">
        <label id="numero">Número</label>
        <input type="number" name="numero">
        <input type="submit" value="Enviar">



    </form>
    <br><br>
    <div>
        <a href="./index.php">Volver a la página principal</a>
    </div>

</body>

</html>