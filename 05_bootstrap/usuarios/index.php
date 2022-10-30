<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./stylesUsuarios.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Usuarios</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">

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

                    if (empty($temp_fecha)) {
                        $error_fecha = "La fecha es obligatoria";
                    } else {
                        $pattern = "/^[0-3][0-9]\/[0-1][0-9]\/(19|20)[0-9]{2}$/";
                        if (!preg_match($pattern, $temp_fecha)) {
                            $error_fecha = "El formato de la fecha no es correcta";
                        } else {
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
                    <div id="nombre">
                    <label for="nombre" class="form-label">Nombre:</label><br>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre completo">
                    <span class="error">
                        <?php

                            if (isset($error_nombre)) echo $error_nombre

                            ?>

                    </span>
                    </div>

                    <br>
                    <div id="apellidos">
                    <label for="apellidos" class="form-label">Apellidos:</label><br>
                    <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
                    <span class="error">
                        <?php

                            if (isset($error_apellidos)) echo $error_apellidos

                            ?>
                    </span>
                    </div>
                    <br>

                    <div id="dni">
                    <label for="dni" class="form-label">DNI:</label><br>
                    <input type="text" class="form-control" name="dni" placeholder="max. 8 números y 1 letra">
                    <span class="error">
                        <?php
                            if (isset($error_dni)) echo $error_dni
                            ?>
                    </span>
                    </div>
                    <br>

                    <div id="email">
                    <label for="email"class="">Email:</label><br>
                    <input type="text"readonly class="form-control-plaintext" name="email" placeholder="example@email.com">
                    <span class="error">
                        <?php
                            if (isset($error_email)) echo $error_email
                            ?>
                    </span>
                    </div>
                    <br>

                    <label for="fecha">Fecha:</label><br>
                    <input type="text" name="fecha" placeholder="dd/mm/yyyy">
                    <span class="error">
                        <?php
                            if (isset($error_fecha)) echo $error_fecha
                            ?>
                    </span>

                    <br><br>
                    <div id="boton">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
            </div>
        </div>
    </div>
</body>

</html>