<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Videojuegos</title>
</head>

<body>
    <h2>Nuevo juego</h2>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $temp_titulo = depurar($_POST["titulo"]);
        $temp_precio = depurar($_POST["precio"]);

        if (empty($temp_titulo)) {
            $error_titulo = "El Títutlo es obligatorio";
        }

        if (empty($temp_precio)) {
            $error_precio = "El precio es obligatorio";
        }

        /*  echo depurar($_POST["titulo"]);
        echo "<br>";
        echo depurar($_POST["precio"]); */

        /* echo htmlspecialchars($_POST["titulo"]);
    echo "<br>";
    echo htmlspecialchars($_POST["precio"]); */

        // var_dump(trim($_POST["titulo"])); //te cuenta las letras

        //var_dump(stripslashes($_POST["titulo"])); //te quita las barra laterales de carácteres especiales

    }
    //Función que te ayuda a depurar el formulario
    function depurar($dato)
    {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

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
        <p><input type="submit" value="Crear"></p>
    </form>

</body>

</html>