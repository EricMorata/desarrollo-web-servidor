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

        <h1>Comprar prendas</h1>

        <!--   Las prendas aparecerán listadas con la siguiente información:
             nombre, precio e imagen. Además habrá un campo "select" 
             para seleccionar la cantidad deseada (mín 1 y máx 5). 
             Habrá un botón de comprar para cada prenda, 
             y al pulsarlo se insertará un registro en la tabla "clientes_prendas" 
             con la prenda seleccionada, la cantidad y la fecha actual.
              El usuario que se insertará estará "hardcodeado" y será siempre el mismo
               (a libre elección).
 -->

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

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $id = $_POST["id"];
                            $nombre = $_POST["nombre"];
                            $precio = $_POST["precio"];
                            $imagen = $_POST["imagen"];
                            $cantidad = $_POST["cantidad"];
                        }
                        ?>
                        <?php //SELECCIONAR PRENDAS 
                        $sql = "SELECT * FROM prendas";
                        $resultado = $conexion->query($sql);
                        if ($resultado->num_rows > 0) {
                            while ($fila = $resultado->fetch_assoc()) {
                                $nombre = $fila["nombre"];
                                $precio = $fila["precio"];
                                $imagen = $fila["imagen"];
                        ?>
                        
                                <tr>
                                    <td><?php echo $nombre ?></td>
                                    <td><?php echo $precio ?></td>
                                    <td>
                                        <img width="50" height="60" src="../..<?php echo $imagen ?>">
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
                                        <form action="cliente_compras.php" method="POST">
                                            <button class="btn btn-dark" type="submit">Comprar</button>
                                            <input type="hidden" name="id" value="<?php echo $fila["id"] ?>">
                                        </form>
                                    </td>
                                   
                                </tr>
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