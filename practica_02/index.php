<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./styles.css">
    <title>Practica 2</title>
</head>

<body>
    <h1>Práctica 2</h1>
    <?php

    use function PHPSTORM_META\elementType;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_dni = depurar($_POST["dni"]);
        $temp_nombre = depurar($_POST["nombre"]);
        $temp_primerApellido = depurar($_POST["primerApellido"]);
        $temp_segundoApellido = depurar($_POST["segundoApellido"]);
        $temp_edad = depurar($_POST["edad"]);
        $temp_email = depurar($_POST["email"]);


        if (empty($temp_dni)) {
            $error_dni = "El campo DNI es obligatorio";
        } else {
            $pattern = "/^[0-9]{8}[a-zA-Z]$/";


            if (!preg_match($pattern, $temp_dni)) {
                $error_dni = "El dni debe de tener 8 dígitos y un carácter ";
            } else {
                $letras = strtoupper(substr($temp_dni, -1));
                $temp_dni = substr($temp_dni, 0, -1);
                if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $temp_dni % 23, 1) == $letras && strlen($letras) == 1 &&  strlen($temp_dni) == 8) {
                    $dni = $temp_dni;
                    echo "<p>$dni</p>";
                } else {
                    $error_dni = "El dni debe de tener 8 dígitos y un carácter";
                }
            }
        }
        /*  if (empty($temp_dni)) {
            $error_dni = "El DNI es obligatorio";
        } else {

            $letras = 'TRWAGMYFPDXBNJZSQVHLCKE';
            $nLetras = strtoupper(substr($temp_dni, -1));
            $temp_dni = substr($temp_dni, 0, -1); 
            $pattern = "/^[0-9]{8}[a-zA-Z]{1}$/";
            if (!substr("TRWAGMYFPDXBNJZSQVHLCKE", $temp_dni % 23, 1) == $letras && strlen($letras) == 1 &&  strlen($temp_dni == 8)){
                $error_dni = "El dni debe de tener 8 dígitos y un carácter"; 
             } if (!preg_match($pattern, $temp_dni)) {
                $error_dni = "El dni debe de tener 8 dígitos y un carácter";
            } else {
                $temp_dni == $letras[$temp_dni % 23];
                $dni = $temp_dni;
            } */



        /*  if (empty($temp_dni)) {
            $error_dni = "El DNI es obligatorio";
        } else {
            $numero;
            $letra;
            $letr;
            $pattern = "/^[0-9]{8}[a-zA-Z]{1}$/";
        }
        if (preg_match($pattern, $temp_dni)) {
            $numero = $temp_dni . substr(0, strlen($temp_dni) == -1);
            $letr = $temp_dni . substr(strlen($temp_dni) - 1, 1);
            $numero = $numero % 23;
            $letra = 'TRWAGMYFPDXBNJZSQVHLCKE';
            $letra = substr($letra, $numero, $numero + 1);
        } elseif ($letra != strtoupper($letr)) {
            $error_dni = "Dni erroneo, la letra no coincide";
        } else {
            $dni = $temp_dni;
        } */


        if (empty($temp_nombre)) {
            $error_nombre = "El nombre es obligatorio";
        } else {

            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

            if (!preg_match($pattern, $temp_nombre)) {
                $error_nombre = "El nombre solo puede contener letras";
            } else {
                $nombre = ucwords(strtolower($temp_nombre));;
                echo "<p>$nombre</p>";
            }
        }

        if (empty($temp_primerApellido)) {
            $error_primerApellido = "El nombre es obligatorio";
        } else {
            ucwords(strtolower($temp_primerApellido));
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

            if (!preg_match($pattern, $temp_primerApellido)) {
                $error_primerApellido = "El nombre solo puede contener letras";
            } else {
                $primerApellido = $temp_primerApellido;
                echo "<p>$primerApellido</p>";
            }
        }

        if (empty($temp_segundoApellido)) {
            $error_segundoApellido = "El nombre es obligatorio";
        } else {
            ucwords(strtolower($temp_segundoApellido));
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

            if (!preg_match($pattern, $temp_segundoApellido)) {
                $error_segundoApellido = "El nombre solo puede contener letras";
            } else {
                $segundoApellidos = $temp_segundoApellido;
                echo "<p>$segundoApellidos</p>";
            }
        }



        if (empty($temp_edad)) {
            $error_edad = "La edad es obligatoria";
        } else {
            if ($temp_edad < 0 || $temp_edad > 120) {
                $error_edad = "Esa edad no es correcta";
            } else {
                if ($temp_edad < 18) {
                    $error_edad = "Eres menor de edad";
                } else {
                    (int)$edad = $temp_edad;
                    echo "<p(int)$edad</p>";
                }
            }
        }




        /*  if (empty($temp_edad)) {
            $error_edad = "El campo edad es obligatorio";
        } else {
            if ($temp_edad >= 18) {
                (int)$edad = $temp_edad;
                echo "<p(int)$edad</p>";
            } elseif ($temp_edad < 18 && $temp_edad <= 0 || $temp_edad > 120) {
                $error_edad = "Esa edad no es correcta";
            } else {
                $error_edad = "Eres menor de edad";
            }
        } */

        if (empty($temp_email)) {
            $error_email = "El campo email es obligatorio";
        } else {
            if (!filter_var($temp_email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Formato de email invalido";
            } elseif (str_contains($temp_email, 'joputa')) {
                $error_email = "No puedes usar palabras malsonantes";
            } elseif (str_contains($temp_email, 'cabron')) {
                $error_email = "No puedes usar palabras malsonantes";
            } elseif (str_contains($temp_email, 'follacabras')) {
                $error_email = "No puedes usar palabras malsonantes";
            } else {
                $email = $temp_email;
                echo "<p>$email</p>";
            }
        }
    }




    function depurar($dato)
    {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
    ?>
    <!-- <p>
        Crea un formulario con los siguientes campos: DNI, Nombre,
        Primer apellido, Segundo apellido, Edad y Correo electrónico. Valida el formulario mediante PHP.
        Crea un archivo index.php dentro de una carpeta llamada "practica_02" donde se muestre el formulario.
    </p>

    <p>
        El DNI deberá contener 8 caracteres y una letra. Tenemos que comprobar que la letra sea correcta
    </p>
    <p>
        El nombre y los apellidos no deberán contener caracteres especiales y habrá que mostrarlos
        con la primera letra en mayúscula y las demás en minúscula, aunque se hayan introducido en mayúsculas o minúsculas.
    </p>
    <p>
        Si se es menor de 18 años se deberá mostrar un aviso de que se es menor de edad. Además,
        la edad deberá ser siempre un número, y nunca inferior a 0 o superior a 120.
    </p>
    <p>
        El correo electrónico deberá estar en formato correcto. No se permitirán además correos
        electrónicos que contengan palabras malsonantes (basta con que vetéis 3 palabras malsonantes).
        Utilizar la función str_contains.
    </p> -->
    <div class="formulario">
        <form action="" method="POST">

            <label for="dni"></label><br>
            <input type="text" name="dni" placeholder="DNI">
            <span class="error">
                *<?php
                    if (isset($error_dni)) echo $error_dni
                    ?>
            </span>
            <br><br>

            <label for="nombre"></label><br>
            <input type="text" name="nombre" placeholder="Nombre">
            <span class="error">
                *<?php
                    if (isset($error_nombre)) echo $error_nombre
                    ?>
            </span>
            <br><br>

            <label for="primerApellido"></label><br>
            <input type="text" name="primerApellido" placeholder="Primer apellido">
            <span class="error">
                *<?php
                    if (isset($error_primerApellido)) echo $error_primerApellido
                    ?>
            </span>
            <br><br>

            <label for="segundoApellido"></label><br>
            <input type="text" name="segundoApellido" placeholder="Segundo apellido">
            <span class="error">
                *<?php
                    if (isset($error_segundoApellido)) echo $error_segundoApellido
                    ?>
            </span>
            <br><br>

            <label for="edad"></label><br>
            <input type="text" name="edad" placeholder="Edad:">
            <span class="error">
                *<?php
                    if (isset($error_edad)) echo $error_edad
                    ?>
            </span>
            <br><br>

            <label for="email"></label><br>
            <input type="text" name="email" placeholder="Email:">
            <span class="error">
                *<?php
                    if (isset($error_email)) echo $error_email
                    ?>
            </span>
            <br><br>

            <input type="submit" value="Enviar">

        </form>
    </div>

</body>

</html>