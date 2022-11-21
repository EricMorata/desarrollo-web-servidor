<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Index cliente</title>
</head>

<body>

    <div class="container">
    <?php
        require '../../util/control_acceso.php';
        require '../../util/database.php';
        require '../header.php';
?>
<br>
        <h1>Listado de clientes</h1>
        <div class="row">
            <div class="col-9">
                <a class="btn btn-primary" href="../registro.php">Nuevo Cliente</a>
                <br><br>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Primer apellido</th>
                            <th>Segundo apellido</th>
                            <th>Fecha nacimiento</th>
                            <th></th>
                            <th></th>
                        </tr>
                    <tbody>
                        <?php
                        //BORRAR CLIENTES 
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $id = $_POST["id"];

                            $sql = "DELETE FROM clientes WHERE id = '$id'";
                            if ($conexion->query($sql)) {
                        ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Se ha eliminado el cliente
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Error al borrar el cliente
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php
                            }
                        }
                        ?>

                        <?php  //Selecionar clientes
                        $sql = "SELECT * FROM clientes";
                        $resultado = $conexion->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($fila = $resultado->fetch_assoc()) {
                                $id = $fila["id"];
                                $usuario = $fila["usuario"];
                                $nombre = $fila["nombre"];
                                $apellido_1 = $fila["apellido_1"];
                                $apellido_2 = $fila["apellido_2"];
                                $fecha_nacimiento = $fila["fecha_nacimiento"];
                                
                        ?>
                                <tr>
                                    <td><?php echo $usuario ?></td>
                                    <td><?php echo $nombre ?></td>
                                    <td><?php echo $apellido_1 ?></td>
                                    <td><?php echo $apellido_2 ?></td>
                                    <td><?php echo $fecha_nacimiento ?></td>
                                    <td>
                                        <form action="../prendas/mostrar_prendas.php" method="GET">
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
                <img width="300" height="307" src="../../resources/images/relacion_cliente.png">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>