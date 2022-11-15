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

<?php require '../../util/database.php'?>
<?php
require '../header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasenia = $_POST["contrasenia"];

    

    $sql = "SELECT * FROM clientes WHERE usuario = '$usuario'";
    $resultado = $conexion -> query($sql);

    if($resultado -> num_rows > 0){
        while ($fila = $resultado ->fetch_assoc()){
            $hash_contrasenia = $fila["contrasenia"];
        }
        $acceso_valido = password_verify($contrasenia, $hash_contrasenia);
   
        if($acceso_valido == TRUE){
            echo "<h2>Acceso válido</h2>";
        }else{
            echo "<h2>Contraseña equivocada</h2>";
        }
    }
}
?>

<div class="container">
        <h1>Inicio sesión area clientes</h1>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST">

                    <div class="form-group mt-5 mb-3">
                        <label class="form-label">Usuario</label>
                        <input class="form-control" type="text" name="usuario">

                    </div>
                    <div class="form-group mt-5 mb-3">
                        <label class="form-label">Contraseña</label>
                        <input class="form-control" name="contrasenia" type="password">
                    </div>
                  
                    
                    <div class="form-group mb-3">
                    <button class="btn btn-primary" type="submit">Login</button>
                        <button class="btn btn-dark" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>