<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Practica 2</title>
</head>

<body>
    <h1>Práctica 2</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_dni = depurar($_POST["dni"]);
        $temp_nombre = depurar($_POST["Nombre"]);
        $temp_primerApellido = depurar($_POST["primerApellido"]);
        $temp_segundoApellido = depurar($_POST["segundoApellido"]);
        $temp_edad = depurar($_POST["edad"]);
        $temp_email = depurar($_POST["email"]);



        if (empty($temp_dni)) {
            $error_dni = "El DNI es obligatorio";
        } else {
            $pattern = "/^[0-9]{8}[a-zA-Z]$/";
            if (!preg_match($pattern, $temp_dni)) {
                $error_dni = "El dni debe de tener 8 dígitos y un carácter";
            } else {
                $dni = $temp_dni;
            }
        }

        if (empty($temp_nombre)) {
            $error_nombre = "El nombre es obligatorio";
        } else {
            ucwords(strtolower($temp_nombre));
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

            if (!preg_match($pattern, $temp_nombre)) {
                $error_nombre = "El nombre solo puede contener letras";
            } else {
                $nombre = $temp_nombre;
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
    }




    function depurar($dato)
    {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
    ?>
    <p>
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
    </p>

    <form action="" method="POST">

        <label for="dni">DNI:</label><br>
        <input type="text" name="dni" placeholder="8 carácteres y una letra"><br><br>
        <span class="error">
            *<?php
                if (isset($error_dni)) echo $error_dni
                ?>
        </span><br>

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" placeholder="Nombre completo"><br><br>
        <span class="error">
            *<?php
                if (isset($error_nombre)) echo $error_nombre
                ?>
        </span>

        <label for="primerApellido">Primer apellido:</label><br>
        <input type="text" name="primerApellido" placeholder="Primer apellido"><br><br>
        <span class="error">
            *<?php
                if (isset($error_primerApellido)) echo $error_primerApellido
                ?>
        </span>

        <label for="segundoApellido">Segundo apellido:</label><br>
        <input type="text" name="segundoApellido" placeholder="Segundo apellido"><br><br>
        <span class="error">
            *<?php
                if (isset($error_segundoApellido)) echo $error_segundoApellido
                ?>
        </span>

        <label for="edad">Edad:</label><br>
        <input type="text" name="edad" placeholder="Indicame tu edad en Números"><br><br>
        <span class="error">
            *<?php
                if (isset($error_edad)) echo $error_edad
                ?>
        </span>

        <label for="email">Email:</label><br>
        <input type="text" name="email" placeholder="example@email.com"><br><br>
        <span class="error">
            *<?php
                if (isset($error_email)) echo $error_email
                ?>
        </span>

        <input type="submit" value="Enviar">

    </form>

</body>

</html>