<?php
$productos = array(

    array('Seat toledo', 12000),
    array('Audi A2', 20000),
    array('Fiat 500', 8000),
);


$nombre = array_column($productos, 0);
array_multisort($nombre, SORT_ASC, $productos);
?>




<table border>
    <tr>
        <th>Nombre: </th>
        <th>Precio: </th>
    </tr>





    <?php
    echo "<br><br>";
    $total_productos = 0;
    $total_precio = 0;
    // $total_precio = array_sum($productos);
    foreach ($productos  as $producto) {
        $total_productos++;
        // $total_precio += is_array($producto) ? array_sum($producto) : 0;
        list($nombre, $precio) = $producto;
        $total_precio += $precio;

    ?>
        <tr>
            <td><?php echo  $nombre; ?></td>
            <td><?php echo  $precio; ?></td>

        </tr>
    <?php
    }

    ?>

    <br>
    <table border>
    <tr>
        <td>Total procuctos: <?php echo  $total_productos; ?></td>
        <td>Total Precio: <?php echo  $total_precio."€"; ?> </td>
    </tr>