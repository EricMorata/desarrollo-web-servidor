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

    array('Seat toledo', 12000),
    array('Audi A2', 20000),
    array('Fiat 500', 8000),
);


$nombre = array_column($productos, 0);
array_multisort($nombre, SORT_ASC, $productos);
?>




<table class="table table-striped">
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
    <table class="table table-striped">
    <tr>
        <td>Total procuctos: <?php echo  $total_productos; ?></td>
        <td>Total Precio: <?php echo  $total_precio."€"; ?> </td>
    </tr>
    </div>  
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>

