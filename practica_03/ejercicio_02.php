<?php
$productos = array(

    array('Seat toledo', 12000, 3),
    array('Audi A2', 20000, 5),
    array('Fiat 500', 8000, 2),
);


$nombre = array_column($productos, 0);
array_multisort($nombre, SORT_ASC, $productos);
?>




<table border>
    <tr>
        <th>Nombre: </th>
        <th>Precio: </th>
        <th>Cantidad</th>
        <th>Total de cantidad</th>
    </tr>

    <?php
    echo "<br><br>";
    $total_productos = 0;
    $total_precio = 0;
    $total_cantidad = 0;
    $total_p_comprados = 0;
    $total_p_adquiridos = 0;

    // $total_precio = array_sum($productos);
    foreach ($productos  as $producto) {
        $total_productos++;
        // $total_precio += is_array($producto) ? array_sum($producto) : 0;
        list($nombre, $precio, $cantidad) = $producto;
        
        
        $total_precio += $precio;
        $total_cantidad = $cantidad * $precio;
        $total_p_adquiridos += $cantidad;
        $total_p_comprados += $total_cantidad;




    ?>
        <tr>
            <td><?php echo  $nombre; ?></td>
            <td><?php echo  $precio; ?></td>
            <td><?php echo $cantidad; ?></td>
            <td><?php echo $total_cantidad; ?></td>

        </tr>
    <?php
    }

    ?>

    <br>
    <table border>
    <tr>
        <td>Total procuctos: <?php echo  $total_productos; ?></td>
        <td>Total Precio: <?php echo  $total_precio."€"; ?> </td>
        <td>Total productos adquiridos: <?php echo $total_p_adquiridos; ?></td>
        <td>Total productos comprados: <?php echo $total_p_comprados; ?></td>
    </tr>