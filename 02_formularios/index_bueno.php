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
        <h2 id="ej1"> <a href="ejercicio_1.php">Ejercicio 1</a></h2>
        <p>Formulario que reciba un nombre y una edad y los muestre por pantalla</p>
        <form action="#ej1" method="post">
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
        <h2 id="ej2"> <a href="ejercicio_2.php">Ejercicio 2</a> </h2>
        <p>Crear un formulario que reciba un número.
            Generar una lista dinámicamente con tantos elementos como se haya indicado</p>
        <form action="#ej2" method="POST">
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
        <h2 id="ej3">
            <a href="ejercicio_3.php">Ejercicio 3</a>
        </h2>
        <p>Crear un formulario que reciba el nombre y la edad de una persona y muestre por pantalla si es menor de edad, es adulta, o está jubilada en función a su edad. Además:</p>
        <p>- Convertir la edad a un número entero<br>- Convertir el nombre introducido a minúsculas salvo la primera letra, que será mayúscula</p><br>
        <form action="#ej3" method="POST">
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
        <h2 id="ej4">
            <a href="ejercicio_4.php">Ejercicio 4</a>
        </h2>
        <p>Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase en un encabezado de dicho número.</p>
        <form action="#ej4" method="GET">
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
        <h2 id="ej5">
            <a href="ejercicio_5.php">Ejercicio 5</a>
        </h2>
        <p>Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo. Asegurarse de que funciona con cualquier valor válido. No se admiten exponentes negativos.</p>

        <form action="#ej5" method="POST">
            <label>Base</label><br>
            <input type="text" name="base"><br><br>
            <label>Exponente</label><br>
            <input type="text" name="exponente"><br><br>
            <input type="hidden" name="f" value="ej5"><br>
            <input type="submit" value="Enviar">
        </form>
        <br><br>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej5") {
                require 'Funciones/potencia.php';
                $base= $_POST["base"];
                $exponente = $_POST["exponente"];
                $resultado = potencia($base, $exponente);
                if($resultado == -1){
                    echo "<p>El número no puede ser negativo</p>";
                }else {
                    echo "<p>El resultado es $resultado</p>";
                }

            }
        }



        ?>

    </div>

    <div>
        <h2 id="ej6">
            <a href="ejercicio_6.php">Ejercicio 6</a>
        </h2>
        <p>Formulario que reciba un número. Devolver el factorial de dicho número.</p>
        <form action="#ej6" method="POST">
            <label id="numero">Número</label>
            <input type="number" name="numero"><br>
            <input type="hidden" name="f" value="ej6"><br>
            <input type="submit" value="Enviar">
        </form>
        <br><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej6") {
                require './Funciones/factorial.php';
                $numero = $_POST["numero"];
                $factorial = factorial($numero);

                
                    echo "<br> La Factorizacion del numero ", $numero, " es ", $factorial;
                
            }
        }

        ?>


    </div>
    <div>
        <h2 id="ej8">
            <a href="ejercicio_8.php">Ejercicio 8</a>
        </h2>
        <p>Crear un formulario que reciba un número. Mostrar la tabla de multiplicar de ese número.
Hacerlo mediante una tabla HTML.</p>
        <form action="#ej8" method="POST">
            <label id="numero">Número</label>
            <input type="number" name="numero"><br>
            <input type="hidden" name="f" value="ej8"><br>
            <input type="submit" value="Enviar">
        </form>
        <br><br>
        <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej8") {
			$numero = $_POST['numero'];
			echo "<table border='7'><br>";
			echo "<h3>Tabla del $numero </h3>";
			
			for($i=1; $i <= 10; $i++)
			{
				$valor = $i*$numero;
				echo "<tr>";
				echo "<td>&nbsp; $i X $numero &nbsp; </td>";
				echo "<td>&nbsp; $valor &nbsp;</td>";
				echo "</tr>";
			}
			
			echo "</table>";
			
		}
    }
        ?>


    </div>


</body>

</html>