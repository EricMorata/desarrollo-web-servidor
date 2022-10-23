<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <title>Index</title>
</head>

<body>
    <h1>Ejercicios practica_01</h1>

    <video src="./Resumen - 20072.mp4" controls autoplay muted loop></video>

    <div>
        <h2>Ejercicio 1</h2>
       <!--  <p>
            Un número primo es aquel que sólo es divisible entre sí mismo y 1. Crea un formulario que reciba dos números “a” y “b”.
        </p>
        <p>
            El formulario devolverá como respuesta los “a” primeros números primos empezando por “b”.
        </p>
        <p>
            Ej: Si a=3 y b=4, se devolverán los tres primeros números primos empezando por 4. Es decir, 5, 7 y 11.
        </p> -->

        <form class="form1" action="" method="POST">

    
            <input type="text" name="num1" placeholder="Introduzca 1 número"><br><br>

            
            <input type="text" name="num2"  placeholder="Introduzca 1 número"><br><br>
            <input type="hidden" name="f" value="ej1">
            <input type="submit" value="Enviar">


        </form>

        <?php

        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $cont = 0;
            $num = $b;
            while ($cont < $a) {
                $div = 0;
                for ($i = 1; $i <= $num; $i++) {
                    if ($num % $i == 0) {
                        $div++;
                    }
                }
                if ($div == 2) {
                    echo $num . "<br>";
                    $cont++;
                }
                $num++;
            }
        }

        ?>




    </div>

    <div>
        <h2 id="ej2">Ejercicio 2</h2>
        <!-- <p>
            Crea un formulario que compruebe si un DNI es válido. Un DNI es válido si:
        </p>
        <p>Está formado por 8 dígitos seguidos de una letra (mayúscula o minúscula)</p>
        <p>La letra es válida (debes de investigar cómo averiguar si la letra es válida)</p>
        <p>No usar expresiones regulares</p> -->

        <div class="form">
        <form class="form2" action="#ej2" method="post">
           
            <input type="text" name="dni" placeholder="Introduzca su DNI"><br><br>
            <input type="hidden" name="f" value="ej2">
            <input type="submit" value="Enviar">
        </form>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej2") {
                $dni = $_POST["dni"];
                echo "<p>$dni</p>";
            }

            $letras = strtoupper(substr($dni, -1));
            $dni = substr($dni, 0, -1);

            if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $dni % 23, 1) == $letras && strlen($letras) == 1 &&  strlen($dni) == 8) {
                echo 'Este DNI es valido';
            } else {
                echo 'Este DNI no es valido';
            }
        }
        ?>
    </div>

    <div>
        <h2>Ejercicio 3</h2>
       <!--  <p>Genera de manera dinámica las tablas de multiplicar del 1 al 10. </p>
        <p>El resultado debe ser parecido al siguiente y estar estructurado mediante tablas HTML.</p> -->
       
    </div>

    <div class="tablas">
        <?php
        $multiplicarHasta = 11;

        for ($i = 1; $i <= 10; $i++) {
            echo "<table id='tabla'><tr>";
            echo "<th>Tabla del  " . $i . "</th></tr>";
            for ($j = 1; $j < $multiplicarHasta; $j++) {
                echo "<tr><td>" . $i . " x " . $j . " = " . $i * $j . "</td></tr>";
            }
            echo "</table>";
            echo "<br>";
        }
        ?>
    </div>

</body>

</html>