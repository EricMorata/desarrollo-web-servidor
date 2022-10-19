<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles.css" />
    <title>Videojuegos</title>
</head>

<body>
    <h2>Nuevo juego</h2>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $temp_titulo = depurar($_POST["titulo"]);
        $temp_precio = depurar($_POST["precio"]);
        $temp_consola = depurar($_POST["consola"]);
        $temp_descripcion = depurar($_POST["descripcion"]);


        if (empty($temp_titulo)) {
            $error_titulo = "El Títutlo es obligatorio";
        } else {
            if (strlen($temp_titulo) > 40) {
                $error_titulo = "El titulo no puede tener más de 40 carácteres";
            } else {
                $titulo = $temp_titulo;
            }
        }

        if (empty($temp_precio)) {
            $error_precio = "El precio es obligatorio";
        } else {
            $temp_precio = filter_var($temp_precio, FILTER_VALIDATE_FLOAT);
        }

        if (!$temp_precio) {
            $error_precio = "El precio debe ser un número";
        } else {
            $temp_precio = round($temp_precio, 2);
            if ($temp_precio < 0) {
                $error_precio = "El precio no puede ser negativo";
            } else if ($temp_precio >= 1000) {
                $error_precio = "El precio no puede ser superior a 1000";
            } else {
                $precio = $temp_precio;
            }
        }

        if (empty($temp_descripcion)) {
            $error_descipcion = "La descripción es obligatoria";
        } else {
            if (strlen($temp_descripcion) >= 255) {
                $error_descipcion = "La descripción no puede tener más de 255 carácteres";
            } else {
                $descripcion = $temp_descripcion;
            }
        }
    }


    if (isset($titulo) && isset($precio)) {
        echo "<p>$titulo</p>";
        echo "<p>$precio €</p>";
    }


    //Función que te ayuda a depurar el formulario
    function depurar($dato)
    {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
    /*  echo depurar($_POST["titulo"]);
        echo "<br>";
        echo depurar($_POST["precio"]); */

    /* echo htmlspecialchars($_POST["titulo"]);
    echo "<br>";
    echo htmlspecialchars($_POST["precio"]); */

    // var_dump(trim($_POST["titulo"])); //te cuenta las letras

    //var_dump(stripslashes($_POST["titulo"])); //te quita las barra laterales de carácteres especiales


    ?>

    <form action="" method="POST">
        <p> Título: <input type="text" name="titulo">

            <span class="error">

                * <?php

                    if (isset($error_titulo)) echo $error_titulo

                    ?>
            </span>
        </p>

        <p> Precio: <input type="text" name="precio">
            <span class="error">

                * <?php

                    if (isset($error_precio)) echo $error_precio

                    ?>
            </span>
        </p>
        <p>
            Consola:
            <select name="consola" required>
                <option value=""></option>
                <option>PS5</option>
                <option>PS4</option>
                <option>Switch</option>
                <option>PC</option>
            </select>

            <!-- <input type="select" name="consola"> -->

            <span class="error">
                *<?php

                    if (isset($error_consola))

                    ?>

            </span>
        </p>
        <p>
            Descripción:
            <textarea name="descripcion" placeholder="Max. 255 carácteres"></textarea>
            <span class="error">

                * <?php

                if (isset($error_descipcion)) echo $error_descipcion

                    ?>
            </span>

        </p>
        <p><input type="submit" value="Crear"></p>
    </form>

</body>

</html>