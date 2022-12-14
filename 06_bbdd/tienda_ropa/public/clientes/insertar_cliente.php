<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_clientes.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Nuevo cliente</title>
</head>

<body>
    <?php
   
    require '../../util/control_acceso.php';
    require '../../util/database.php';
    require '../header.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $nombre = $_POST["nombre"];
        $apellido_1 = $_POST["apellido_1"];
        $apellido_2 = $_POST["apellido_2"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        

        if (!empty($usuario) && !empty($nombre) && 
        !empty($apellido_1 && 
        !empty($fecha_nacimiento))) {

        $apellido_2 = 
            !empty($apellido_2) ? "'$apellido_2'" : "NULL";


        $sql = "INSERT INTO clientes (usuario, nombre, 
            apellido_1, apellido_2, 
            fecha_nacimiento) VALUES ('$usuario', '$nombre',
            '$apellido_1', $apellido_2,
            '$fecha_nacimiento')";

        if ($conexion -> query($sql) == "TRUE") {
            echo "<p>Cliente insertado</p>";
        } else {
            echo "<p>Error al insertar</p>";
        }
    }

       
    }
    ?>



    <div class="container">
        <h1>Nuevo cliente</h1>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST">

                    <div class="form-group mt-5 mb-3">
                        <label class="form-label">Usuario</label>
                        <input class="form-control" type="text" name="usuario">

                    </div>

                    <div class="form-group mt-5 mb-3">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre">
                    </div>

                    <div class="form-group mt-5 mb-3">
                        <label class="form-label">Primer apellido</label>
                        <input class="form-control" type="text" name="apellido_1">
                    </div>

                    <div class="form-group mt-5 mb-3">
                        <label class="form-label">Segundo apellido</label>
                        <input class="form-control" type="text" name="apellido_2">
                    </div>

                    <div class="form-group mt-5 mb-3">
                        <label class="form-label">Fecha nacimiento</label>
                        <input class="form-control" type="date" name="fecha_nacimiento">
                    </div>

                    <button class="btn btn-primary" type="submit">Crear</button>
                    <a class="btn btn-secondary" href="./index.php">Volver</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>