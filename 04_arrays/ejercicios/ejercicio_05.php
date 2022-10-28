<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>

    <?php

    function calificacionIf (int $nota) {
        if ($nota < 5) {
            $calificacion = "Suspenso";
        } else if ($nota >= 5 && $nota < 7) {
            $calificacion = "Aprobado";
        } else if ($nota >= 7 && $nota < 9) {
            $calificacion = "Notable";
        } else {
            $calificacion = "Sobresaliente";
        }
        return $calificacion;
    }

    

    

    $estudiantes = [
        ["Luis", rand(0,10)],
        ["Maria", rand(0,10)],
        ["Penelope", rand(0,10)],
        ["Marcos asistencia", rand(0,10)]
    ];
    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Nota</th>
            <th>Califiación</th>
        </tr>
        <?php
        foreach ($estudiantes as $estudiante) {
            list($nombre, $nota) = $estudiante;
        ?>
            <tr>
                <td><?php echo $nombre ?></td>
                <td><?php echo $nota ?></td>
                <td><?php echo calificacionIf($nota) ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>