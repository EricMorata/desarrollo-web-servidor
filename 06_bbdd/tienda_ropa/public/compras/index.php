<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
</head>
<body>
    <?php require '../../util/database.php'  ?>
    <?php require '../header.php' ?>

    <div class="container">
    <h1>Listado de compras</h1>

    <div class="row">
        <div class="col-9">
            <table class="table">
                <thead class="table-dark">
                    <tr>

                    </tr>
                </thead>
            </table>
        </div>
    </div>


<?php
$sql = "SELECT * FROM vw_clientes_prendas";
$resultado = $conexion -> query($sql);


if($resultado -> num_rows > 0){
    while($fila = $resultado ->fetch_assoc()){
        $usuario = $fila["usuario"];
        $producto = $fila ["producto"];
        $cantidad = $fila ["cantidad"];
        $precio_unitario = $fila["precio_unitario"];
        $fecha = $fila ["fecha"]
    
    }
}


?>





    </div>
    
</body>
</html>