<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>

<body>
<body>
    <h1>Ejercicio 1</h1>
     <!-- 
    EJERCICIO 1
Crea un array que contenga los números pares del 1 al 50 y muéstralos.
Investiga si hay algún método en PHP para “barajar” los elementos de un array. 
Una vez barajado, muestra los números en orden descendente.
-->
    <?php
    $numeros = [];

    for ($i = 2; $i <= 50; $i += 2) {
        $numeros[] = $i;
    }
    shuffle($numeros);
    rsort($numeros);
    ?>
    <ul>
        <?php 
        for ($i = 0; $i < count($numeros); $i++) {
        ?>
            <li><?php echo $numeros[$i] ?></li>
        <?php
        }
        ?>
    </ul>
</body>
</html>
