<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_clientes.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <?php require '../../util/control_acceso.php' ?>
    <?php require '../../util/database.php' ?>
    <?php require '../header.php' ?>
    <h1>Ver cliente</h1>
    <div class="container_mostrar">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET["id"];

            $sql = "SELECT * FROM clientes WHERE id = '$id'";

            $resultado = $conexion->query($sql);

            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $usuario = $fila["usuario"];
                    $nombre = $fila["nombre"];
                    $apellido_1 = $fila["apellido_1"];
                    $apellido_2 = $fila["apellido_2"];
                    $fecha_nacimiento = $fila["fecha_nacimiento"];
                }
            }
        }
        ?>
        <div class="row">
            <div class="col-4">
                <p>Usuario: <?php echo $usuario ?></p>
                <p>Nombre: <?php echo $nombre ?></p>
                <p>Primer apellido: <?php echo $apellido_1 ?></p>
                <p>Segundo apellido: <?php echo $apellido_2 ?></p>
                <p>Fecha de nacimiento: <?php echo $fecha_nacimiento ?></p>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>