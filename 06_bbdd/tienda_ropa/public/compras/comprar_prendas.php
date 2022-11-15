<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Comprar prendas</title>
</head>

<body>
    <div class="container">
        <?php require '../../util/database.php' ?>
        <?php require '../header.php' ?>

        <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $prenda_id = $_POST["prenda_id"];
    $cantidad = $_POST["cantidad"];
    $cliente_id = 1;
    $fecha = date('Y-m-d H:i:s');

    $sql = "INSERT INTO clientes_prendas 
                (cliente_id, prenda_id, cantidad, fecha) 
                VALUES 
                ('$cliente_id', '$prenda_id', '$cantidad', '$fecha')";

    if($conexion -> query($sql)== "TRUE"){
        echo "<p>Compra realizada</p>";
    } else {
        echo "<p>Error al comprar</p>";
    }
}
        ?>

        <h1>Comprar prendas</h1>

        <div class="row">
            <div class="col-9">
                <br><br>
                <table class="table table-striped ">
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                            <th>Cantidad</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php //SELECCIONAR PRENDAS 
                        $sql = "SELECT * FROM prendas";
                        $resultado = $conexion->query($sql);
                        if ($resultado->num_rows > 0) {
                            while ($fila = $resultado->fetch_assoc()) {

                        ?>
                                <form action="" method="POST">
                                    <tr>
                                        <td><?php echo $fila["nombre"] ?></td>
                                        <td><?php echo $fila["precio"]  ?></td>
                                        <td>
                                            <img width="50" height="60" src="../..<?php echo $fila["imagen"] ?>">
                                        </td>
                                        <td>
                                            <select class="form-select" name="cantidad">
                                                <option value="" selected disabled hidden>-- Selecciona la cantidad --</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                        </td>
                                        <td>
                                            <button class="btn btn-dark" type="submit">Comprar</button>
                                            <input type="hidden" name="prenda_id" value="<?php echo $fila["id"] ?>">
                                        </td>
                                    </tr>
                                </form>
                            <?php
                            }
                        }
                            ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>