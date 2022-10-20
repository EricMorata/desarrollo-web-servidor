<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./stylesUsuarios.css" />
    <title>Usuarios</title>
</head>

<body>
    <h1>Formulario de usuarios</h1>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_nombre = depurar($_POST["nombre"]);
        $temp_apellidos = depurar($_POST["apellidos"]);
        $temp_dni = depurar($_POST["dni"]);
        $temp_email = depurar($_POST["email"]);
        $temp_fecha = depurar($_POST["fecha"]);


        if (empty($temp_nombre)) {
            $error_nombre = "El nombre es obligatorio";
        } else {
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

            if (!preg_match($pattern, $temp_nombre)) {
                $error_nombre = "El nombre solo puede contener letras";
            } else {
                $nombre = $temp_nombre;
                echo "<p>$nombre</p>";
            }
            if (strlen($temp_nombre) > 25) {
                $error_nombre = "El nombre no puede tener más de 25 carácteres";
            }
        }


        if (empty($temp_apellidos)) {
            $error_apellidos = "El apellido es obligatorio";
        } else {
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

            if (!preg_match($pattern, $temp_apellidos)) {
                $error_apellidos = "El apellido solo puede contener letras";
            } else {
                $apellidos = $temp_apellidos;
                echo "<p>$apellidos</p>";
            }
            if (strlen($temp_apellidos) > 40) {
                $error_apellido = "El apellido no puede tener más de 25 carácteres";
            }
        }


        if (empty($temp_dni)) {
            $error_dni = "El dni es obligatorio";
        } else {
            $pattern = "/^[0-9]{8}[a-zA-Z]$/";
            if (!preg_match($pattern, $temp_dni)) {
                $error_dni = "El dni debe de tener 8 dígitos y un carácter";
            } else {
                $dni = $temp_dni;
            }
        }

        if (empty($temp_email)) {
            $error_email = "El email es obligatorio";
        } else {
            $temp_email = filter_var($temp_email, FILTER_VALIDATE_EMAIL);
            if (!$temp_email) {
                $error_email = "El email no es valido";
            } else {
                $email = $temp_email;
            }
        }

        if(empty($temp_fecha)){
            $error_fecha = "La fecha es obligatoria";
        }else {
            $pattern = "/^[0-3][0-9]\/[0-1][0-9]\/(19|20)[0-9]{2}$/";
            if(!preg_match($pattern, $temp_fecha)){
                $error_fecha = "El formato de la fecha no es correcta";
            }else {
                $fecha = $temp_fecha;
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


    <form action="" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" placeholder="Nombre completo">
        <span class="error">
            *<?php

                if (isset($error_nombre)) echo $error_nombre

                ?>

        </span>
        <br><br>
        <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos" placeholder="Apellidos">
        <span class="error">
            *<?php

                if (isset($error_apellidos)) echo $error_apellidos

                ?>

        </span>

        <br><br>

        <label for="dni">DNI:</label><br>
        <input type="text" name="dni" placeholder="max. 8 números y 1 letra">
        <span class="error">
            *<?php
                if (isset($error_dni)) echo $error_dni
                ?>
        </span>

        <br><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email" placeholder="example@email.com">
        <span class="error">
            *<?php
                if (isset($error_email)) echo $error_email
                ?>
        </span>

        <br><br>

        <label for="fecha">Fecha:</label><br>
        <input type="text" name="fecha" placeholder="dd/mm/yyyy">
        <span class="error">
            *<?php
                if (isset($error_fecha)) echo $error_fecha
                ?>
        </span>

        <br><br>
    <div id="boton">
        <input type="submit" value="Enviar">
        </div>
    </form>

</body>

</html>