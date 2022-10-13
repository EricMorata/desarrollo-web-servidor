<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_index.css">
    <title>Index</title>
</head>

<body>
    <h1>Listado de ejercicios</h1>
    <ul>
        <li>
            <a href="Ejercicios/ejercicio_1.php">Ejercicio 1</a>
            <p>Formulario que reciba un nombre y una edad y los muestre por pantalla</p>
        </li>
        <li>
            <a href="Ejercicios/ejercicio_2.php">Ejercicio 2</a>
            <p>Crear un formulario que reciba un número. Generar una lista dinámicamente con tantos elementos como se haya indicado</p>
        </li>
        <li>
            <a href="Ejercicios/ejercicio_3.php">Ejercicio 3</a>
            <p>Crear un formulario que reciba el nombre y la edad de una persona y
                muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
                a su edad. Además:
                - Convertir la edad a un número entero
                - Convertir el nombre introducido a minúsculas salvo la primera letra, que será mayúscula</p>
        </li>
        <li>
            <a href="Ejercicios/ejercicio_4.php">Ejercicio 4</a>
            <p>Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
                en un encabezado de dicho número.

                Si introducimos "5" y "Hola mundo" se mostrará un encabezado
            <h5>Hola mundo</h5>
            </p>
        </li>

        <li>
            <a href="Ejercicios/ejercicio_5.php">Ejercicio 5</a>
            <p>Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo. </p>
        </li>

        <li>
            <a href="Ejercicios/ejercicio_6.php">Ejercicio 6</a>
            <p>Formulario que reciba un número y devuelva su factorial.
                Factorial de 3: 1*2*3 = 6
                Factorial de 5: 1*2*3*4*5 = 120 </p>
        </li>

        <li>
            <a href="Ejercicios/ejercicio_7.php">Ejercicio 7</a>
            <p>Formulario que devuelve el metodo en la misma pagina</p>
        </li>

        <br><br>
        <?php
        require 'footer.php';
        ?>

    </ul>



</body>

</html>