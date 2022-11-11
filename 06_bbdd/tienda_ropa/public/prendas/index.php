<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Index prendas</title>
</head>

<body>

    <div class="container">
        <?php
        require '../header.php';
        require '../../util/database.php';
        ?>
        <h1>Listado de prendas</h1>
        <div class="row">
            <div class="col-9">
                <a class="btn btn-primary" href="./insertar_prenda.php">Nueva prendra</a>
                <br><br>
                <table class="table table-striped ">
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th></th>
                            <th>Talla</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th></th>
                            <th></th>
                        </tr>
                    <tbody>


                        <?php //BORRAR PRENDA


                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $id = $_POST["id"];

                            //CONSULTA BORRART IMAGEN
                            $sql = "SELECT imagen FROM prendaas WHERE id = '$id'";
                            $resultado = $conexion -> query($sql);
                            if($resultado -> num_rows > 0){
                                while ($fila = $resultado -> fetch_assoc()){
                                    $imagen = $fila["imagen"];
                                }
                                unlink("../.." .$imagen);
                            }

                            //CONSULTA BORRAR PRENDA
                            $sql = "DELETE FROM prendas WHERE id = '$id'";

                            if ($conexion->query($sql)) {

                        ?>

                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Se ha eliminado la prenda
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php
                            } else {
                                echo "<p>Error al eliminar</p>";
                            }
                        }

                        ?>

                        <?php //SELECCIONAR PRENDAS 

                        $sql = "SELECT * FROM prendas";
                        $resultado = $conexion->query($sql);

                        if ($resultado->num_rows > 0) { // -> es como llamar a una funcion con el punto  $resultado.num_rows
                            while ($fila = $resultado->fetch_assoc()) {

                                $nombre = $fila["nombre"];
                                $talla = $fila["talla"];
                                $precio = $fila["precio"];
                                $categoria = $fila["categoria"];
                                $imagen = $fila ["imagen"];
                        ?>
                                <tr>
                                    <td><?php echo $nombre ?></td>
                                    <td>
                                        <img width="50" height="60" src="../..<?php echo $imagen ?>">
                                </td>
                                    <td><?php echo $talla ?></td>
                                    <td><?php echo $precio ?></td>
                                    <td><?php echo $categoria ?></td>
                                    <td>
                                        <form action="mostrar_prendas.php" method="GET">
                                            <button class="btn btn-primary" type="submit">Ver</button>
                                            <input type="hidden" name="id" value="<?php echo $fila["id"] ?>">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            <button class="btn btn-danger" type="submit">Borrar</button>
                                            <input type="hidden" name="id" value="<?php echo $fila["id"] ?>">
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </tbody>

                    </thead>
                </table>

            </div>
            <div class="col-3">
                <img width="300" height="307" src="../../resources/images/ropa.jpeg">
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>