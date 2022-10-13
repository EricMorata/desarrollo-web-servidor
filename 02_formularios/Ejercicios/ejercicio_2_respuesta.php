<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>respuesta</title>
</head>
<body>
    <h1>Respuesta</h1>
    <ul>
    <?php

    $n = $_POST["numero"];
    for($i = 1; $i <= $n; $i++){
        echo "<li>$i</li>";
    }


    ?>

    </ul>
</body>
</html>