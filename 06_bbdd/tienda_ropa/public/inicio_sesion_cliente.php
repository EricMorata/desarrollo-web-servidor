<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Inicio sesion clientes</title>
</head>

<body>


    <?php
    require '../util/database.php';
    ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contrasenia = $_POST["contrasenia"];

        $sql = "SELECT * FROM clientes WHERE usuario = '$usuario'";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $hash_contrasenia = $fila["contrasenia"];
                $rol = $fila["rol"];
            }
            $acceso_valido = password_verify($contrasenia, $hash_contrasenia);

            if ($acceso_valido == TRUE) {
                session_start();
                $_SESSION["usuario"] = $usuario;
                $_SESSION["rol"] = $rol;

                header('location: http://localhost/06_bbdd/tienda_ropa/public/');
            } else {
                echo "<h2>Contraseña equivocada</h2>";
            }
        }
    }
    ?>
    <div class="login-wrapper mt-5 ">
        <div class="container-login">
            <div class="container">
                <div class="column">
                    <div class="col-6">
                        <div class="imagen">
                            <img src="../resources/images/cenec_modas-removebg-preview.png">

                            <form action="" method="POST">

                                <div class="form-group mt-3 mb-3">
                                    <input id="texto" class="form-control form-control-sm" type="text" name="usuario" placeholder="Usuario">
                                </div>
                                
                                <div class="form-group mt-3 mb-3">

                                    <input id="contrasenia" class="form-control form-control-sm" name="contrasenia" type="password" placeholder="Contraseña">
                                </div>

                                <div class="form-group mt-3 mb-3">
                                    <button id="boton1" class="btn btn-primary " type="submit">Login</button>
                                    <a id="boton2" class="btn btn-secondary" href="registro.php">Registrarse</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>