<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Multidimensionales</title>
</head>

<body>
    <?php
    $videojuegos = array(

        array('gta v', 'ps4', 50),
        array('minecraft', 'pc', 20),
        array('Dark soul', 'ps5', 45),
        array('DOOM', 'steamdesk', 90),
        array('fifa', 'steamdesk', 40),

    );
    //añadir elemento
    $nuevo_juego = array('fruit ninja', 'android', 2.99);
    array_push($videojuegos, $nuevo_juego);

    //eliminar elemento
    unset($videojuegos[2]);

    //ordenar por la consola en orden ascendente 
    //y si hay dos iguales ordenar por nombre en forma descendente
    $nombre = array_column($videojuegos, 0);
    $consola = array_column($videojuegos, 1);
    array_multisort($consola, SORT_ASC, $nombre, SORT_DESC, $videojuegos);
    ?>
    <table border>
        <tr>
            <th>Nombre: </th>
            <th>Consola: </th>
            <th>Precio: </th>
        </tr>
        <?php
        echo "<br><br>";
        foreach ($videojuegos as $videojuego) {

            list($nombreJuego, $consola, $precio) = $videojuego;

        ?>

            <tr>
                <td><?php echo  $nombreJuego; ?></td>
                <td><?php echo  $consola; ?></td>
                <td><?php echo  $precio; ?></td>
            </tr>
        <?php
        }

        ?>
    </table>

</body>

</html>