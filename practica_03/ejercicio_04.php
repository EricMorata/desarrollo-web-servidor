<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Ejercicio 4</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <?php
                $personas = [
                    ["Eric", "Morata", rand(0, 100)],
                    ["Jose", "Ponce", rand(0, 100)],
                    ["Alejandra", "Santiago", rand(0, 100)],
                ];
                ?>
                <table class="table table-striped">
                    <thead class="table">
                    <tr>
                        <th>Nombre: </th>
                        <th>Consola: </th>
                        <th>Precio: </th>
                        <th>Categoria:</th>
                    </tr>
                    <?php
                    echo "<br><br>";
                    foreach ($personas as $persona) {
                        list($nombre, $apellido, $edad) = $persona;
                        $categoria = edad($edad);

                    ?>
                        <tr>
                            <td><?php echo $nombre ?></td>
                            <td><?php echo $apellido ?></td>
                            <td><?php echo $edad ?></td>
                            <td><?php echo $categoria ?></td>
                        </tr>

                    <?php
                    }
                    function edad(int $cat_edad)
                    {
                        $categoria = match (true) {
                            $cat_edad >= 18 and $cat_edad < 65 => "Mayor de edad",
                            $cat_edad >= 65 => "Jubilado",
                            default => "Menor de edad"
                        };
                        return $categoria;
                    }
                    ?>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>