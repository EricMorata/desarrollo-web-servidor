<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
     <div class="col-9">
<?php
$productos = array(

    array('Seat toledo', 12000, 3),
    array('Audi A2', 20000, 5),
    array('Fiat 500', 8000, 2),
);


$nombre = array_column($productos, 0);
array_multisort($nombre, SORT_ASC, $productos);
?>




<table class="table table-striped">
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
    <table class="table table-striped">
    <tr>
        <td>Total procuctos: <?php echo  $total_productos; ?></td>
        <td>Total Precio: <?php echo  $total_precio."€"; ?> </td>
        <td>Total productos adquiridos: <?php echo $total_p_adquiridos; ?></td>
        <td>Total productos comprados: <?php echo $total_p_comprados; ?></td>
    
    
    </tr>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>

