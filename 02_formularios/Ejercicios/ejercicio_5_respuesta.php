<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 respuesta</title>
</head>

<body>
    <h1>Ejercicio 5 respuesta</h1>
    <?php
    $numero = $_POST["numero"];
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

    ?>
</body>

</html>