<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    </meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_index_bueno.css">
    </meta>
    <title>Formularios</title>
</head>

<body>
    <h1>Ejercicios de clase de formularios</h1>

    <div>
        <h2> <a href="ejercicio_1.php">Ejercicio 1</a></h2>
        <p>Formulario que reciba un nombre y una edad y los muestre por pantalla</p>
        <form action="" method="post">
            <label>Nombre</label><br>
            <input type="text" name="nombre"><br><br>
            <label>Edad</label><br>
            <input type="text" name="edad"><br><br>
            <input type="hidden" name="f" value="ej1">
            <input type="submit" value="Enviar">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej1") {
                $nombre = $_POST["nombre"];
                $edad = $_POST["edad"];

                echo "<p>$nombre</p>";
                echo "<p>$edad</p>";
            }
        }
        ?>
    </div>

    <div>
        <h2> <a href="ejercicio_2.php">Ejercicio 2</a> </h2>
        <p>Crear un formulario que reciba un número.
            Generar una lista dinámicamente con tantos elementos como se haya indicado</p>
        <form action="" method="POST">
            <label>Número</label><br>
            <input type="number" name="numero"><br>
            <input type="hidden" name="f" value="ej2"><br>
            <input type="submit" value="Enviar">
        </form>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej2") {
                $numero = $_POST["numero"];
                echo "$numero";
            }

            $numero = $_POST["numero"];
            for ($i = 1; $i <= $numero; $i++) {
                echo "<li>$i</li>";
            }
        }


        ?>
    </div>

    <div>
        <h2>
            <a href="ejercicio_3.php">Ejercicio 3</a>
        </h2>
        <p>Crear un formulario que reciba el nombre y la edad de una persona y muestre por pantalla si es menor de edad, es adulta, o está jubilada en función a su edad. Además:</p>
        <p>- Convertir la edad a un número entero<br>- Convertir el nombre introducido a minúsculas salvo la primera letra, que será mayúscula</p><br>
        <form action="" method="POST">
            <label id="nombre">Nombre</label><br>
            <input type="text" name="nombre"><br><br>
            <label id="edad">Edad</label><br>
            <input type="text" name="edad"><br><br>
            <input type="hidden" name="f" value="ej3"><br>
            <input type="submit" value="Enviar"><br>

        </form>
        <br>


        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej3") {
                $nombre = $_POST["nombre"];
                $nombre = ucfirst($nombre);
                $edad = (int)$_POST["edad"];

                echo "<p>$nombre</p>";
                echo "<p>$edad</p>";

                if ($edad < 18  && $edad >= 0) {
                    echo "<p>Es menor de edad</p>";
                } elseif ($edad >= 18 && $edad <= 65) {
                    echo "<p>Es una persona adulta</p>";
                } elseif ($edad > 65 && $edad >= 122) {
                    echo "<p>Es una persona jubilada</p>";
                } else {
                    echo "<p>la edad no es valida</p>";
                }
            }
        }

        ?>
    </div>

    <div>
        <h2>
            <a href="ejercicio_4.php">Ejercicio 4</a>
        </h2>
        <p>Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase en un encabezado de dicho número.</p>
        <form action="" method="GET">
            <label id="frase">Frase</label><br>
            <input type="text" name="frase"><br><br>
            <label id="encabezado">Encabezado</label><br>
            <input type="text" name="encabezado"><br><br>
            <input type="hidden" name="f" value="ej4"><br>
            <input type="submit" value="Enviar">

        </form>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if ($_GET["f"] == "ej4") {
                $frase = $_GET["frase"];
                $encabezado = $_GET["encabezado"];
                echo "<h$encabezado>$frase</h$encabezado>";
            }
        }
        ?>
    </div>

    <div>
        <h2>
            <a href="ejercicio_5.php">Ejercicio 5</a>
        </h2>
        <p>Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo. Asegurarse de que funciona con cualquier valor válido. No se admiten exponentes negativos.</p>

        <form action="" method="POST">
            <label id="numero">Número</label><br>
            <input type="number" name="numeroej5"><br><br>
            <label id="numero2">Número 2</label><br>
            <input type="number" name="numero2"><br><br>
            <input type="hidden" name="f" value="ej5"><br>
            <input type="submit" value="Enviar">
        </form>
        <br><br>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej5") {
                $numero = $_POST["numeroej5"];
                $numero2 = $_POST["numero2"];
                $resultado = 1;




                if ($numero2 < 0) {
                    echo "<p>El exponente debe ser positivo</p>";
                } elseif ($numero2 == 1) {
                    echo "<p>$resultado</p>";
                } else {
                    for ($i = 1; $i <= $numero2; $i++) {

                        $resultado  = $resultado * $numero;
                    }
                    echo $resultado;
                }
            }
        }

        ?>

    </div>

    <div>
        <h2>
            <a href="ejercicio_6.php">Ejercicio 6</a>
        </h2>
        <p>Formulario que reciba un número. Devolver el factorial de dicho número.</p>
        <form action="" method="POST">
            <label id="numero">Número</label>
            <input type="number" name="numeroej6"><br>
            <input type="hidden" name="f" value="ej6"><br>
            <input type="submit" value="Enviar">
        </form>
        <br><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej6") {
                $numeroej6 = $_POST["numeroej6"];
                $factorial = 1;

                if ($numeroej6 >= 1) {
                    for ($i = 1; $i <= $numeroej6; $i++) {
                        $factorial = $factorial * $i;
                    }
                    echo "<br> La Factorizacion del numero ", $numeroej6, " es ", $factorial;
                } else {
                    echo "<p>El número debe de ser igual o más que 1</p>";
                }
            }
        }

        ?>


    </div>


</body>

</html>